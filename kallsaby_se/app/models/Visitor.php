<?php

class visitor{
	public function isLoggedIn(){
		if (isset($_SESSION['username'])){
			return true;
		}
		else{
			return false;
		}	
	}

	private function getUser($entityManager, $username){
		require_once 'entity/User.php';

		$sql = 'SELECT u FROM User u WHERE u.username = :name';
		$query = $entityManager->createQuery($sql);
		$query->setParameter('name',$username);
		$users = $query->getResult();
		if(!$users == null){
			$user = $users[0];
		}
		else{
			return null;
		}
		if ($user == null) {
		    return null;
		}
		else{
			return $user;
		}
	}

	private function getUserInformation($entityManager, $id){
		require_once 'entity/User_details.php';
		$sql = 'SELECT u FROM User_details u WHERE u.user_id = :id';
		$query = $entityManager->createQuery($sql);
		$query->setParameter('id',$id);
		$users_detail = $query->getResult();
		if(!$users_detail == null){
			$user_detail = $users_detail[0];
		}
		else{
			return null;
		}
		if ($user_detail == null) {
		    return null;
		}
		else{
			return $user_detail;
		}

	}

	public function information($entityManager){
		require_once 'entity/User.php';
		require_once 'entity/User_details.php';
		$user = visitor::getUser($entityManager, $_SESSION['username']);
		if(!$user==null){
			$user_information = visitor::getUserInformation($entityManager, $user->getId());
			if(!$user_information==null){
				$information = array( 'username'=> $user->getUsername(), 'email'=> $user_information->getEmail(), 'color_theme' => $user_information->getColortheme() );
				return $information;
			}
		}
		return null;
	}

	public function register($entityManager){
		require_once 'entity/User.php';
		require_once 'entity/User_details.php';

		$username = $_REQUEST['register_username'];
		$email = $_REQUEST['register_email'];
		$password = $_REQUEST['register_password'];
		$salt = mcrypt_create_iv(16, MCRYPT_DEV_RANDOM);
		$hashed_password = crypt( $password, $salt );

		$user = new User();
		$user_details = new User_details();

		$added_user = true;
		
		try{
			$user->setUsername($username);
			$user->setPassword($hashed_password);
			$user->setSalt($salt);

			$user_details->setUser($user);
			$user_details->setEmail($email);
			$user_details->setRole(1);
			$user_details->setColortheme('grey');
			$entityManager->persist($user);
			$entityManager->persist($user_details);
			$entityManager->flush();
		}
		catch(PDOException $e){
			echo $e->getMessage();
			$added_user = false;
		}
		catch(Exception $e){
			echo $e->getMessage();
			$added_user = false;
		}
		
		return $added_user;
	}

	public function login($entityManager){
		require_once 'entity/User.php';
		$username = $_REQUEST['login_username'];
		$password = $_REQUEST['login_password'];

		$user = visitor::getUser($entityManager, $username);
		if ($user == null) {
			echo 'user is null';
		    return false;
		}
		else{
			$crypt_password = crypt($password, $user->getSalt());
			if($crypt_password == $user->getPassword()){
				require_once 'entity/User_details.php';
				$user_details = $entityManager->find('User_details', $user->getId());
				$_SESSION["username"] = $user->getUsername();
				$_SESSION["role"] = $user_details->getRole();
				$_SESSION["color_theme"] = $user_details->getColortheme();
				return true;
			}
			else{
				echo 'wrong password';
				return false;
			}
		}	
	}

	public function setColorTheme(){
		if(isset($_REQUEST['color_theme'])){
  			$this->color_theme = $_REQUEST['color_theme'];
   		}
	}
}