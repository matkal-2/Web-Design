<?php

class videohandler{
	public $amount;
	public $error;
	public $status;
	
	public function getLatestVideo($entityManager, $videotype, $page, $role){
		require_once 'entity/' . $videotype . '.php';
		require_once 'entity/User.php';
		$records = $entityManager->getRepository("Video")->findBy(array(),array(),10,10*$page);
		$this->amount = count($records);
		$vidsamount = $this->amount;
		$vids;
		if($this->amount == 0){
			return null;
		}
		$arraypos = 0;
		for($i=0; $i<$vidsamount;$i++){
			if($records[$i]->getPrivacy() == 'private' && $role < 4){
				$vids[$arraypos] = array($records[$i]->getVideoName(), $records[$i]->getId());
				$arraypos ++;
			}
			else if($records[$i]->getPrivacy() == 'public'){
				$vids[$arraypos] = array($records[$i]->getVideoName(), $records[$i]->getId());
				$arraypos ++;
			}
			else{
				$this->amount -= 1;
				if($this->amount == 0){
					return null;
				}

			}
		}
		return $vids;
	}

	public function getSearchVideo($entityManager, $queryString,  $videotype, $role, $results){
		require_once 'entity/' . $videotype . '.php';

		$qb = $entityManager->getRepository($videotype)->createQueryBuilder('v')
   			->where('v.name LIKE :name')
   			->setParameter('name', '%'.$queryString.'%');
   		$records = $qb->getQuery()->getResult();
		$this->amount = count($records);
		$vids;
		if($this->amount == 0){
			return null;
		}
		for($i=0; $i<$this->amount;$i++){
			if($records[$i]->getPrivacy() == 'private' && $role < 4){
				$vids[$i]=array($records[$i]->getVideoName(), $records[$i]->getId());
				if(count($vids)>=$results){
					$this->amount = $results-1;
					return $vids;
				}
			}
			else if($records[$i]->getPrivacy() == 'public'){
				$vids[$i]=array($records[$i]->getVideoName(), $records[$i]->getId());
				if(count($vids)>=$results){
					$this->amount = $results;
					return $vids;
				}
			}
			else{
				$this->amount -= 1;
				if($this->amount == 0){
					return null;
				}

			}
		}
		return $vids;
	}

	public function getVideopath($entityManager, $privacy, $video, $videotype, $role){
		
		if($privacy == 'private'){
			if($role < 4){
				require_once 'entity/' . $videotype . '.php';
				require_once 'entity/User.php';
				$records = $entityManager->find($videotype, $video);
				$path = '/resources/vid/'.$privacy.'/'.$videotype.'/'.$records->getVideopath();
				return $path;
			}
		}else if($privacy == 'public'){
			require_once 'entity/' . $videotype . '.php';
			require_once 'entity/User.php';
			$records = $entityManager->find($videotype, $video);
			$path = '/resources/vid/'.$privacy.'/'.$videotype.'/'.$records->getVideopath();
			return $path;
		}
		
	}

	public function uploadVideo($entityManager, $privacy, $videotype){
		$allowedExts = array("mp4");
		$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
		$path = 'D:/Documents/GitHub/Web-Design/kallsaby_se/public/resources/vid/'.$privacy.'/'.$videotype.'/';
		$filename = $_REQUEST['filename'];

		if ((($_FILES["file"]["type"] == "video/mp4")
		|| ($_FILES["file"]["type"] == "audio/mp3")
		|| ($_FILES["file"]["type"] == "audio/wma")
		|| ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg"))
		&& in_array($extension, $allowedExts)){

			if ($_FILES["file"]["error"] > 0)
			    {
			    $this->error =  "Return Code: " . $_FILES["file"]["error"] . "<br />";
			    return false;
			    }
			else{
				$this->status ="Upload: " . $_FILES["file"]["name"] . "<br />Type: " . $_FILES["file"]["type"] . "<br />Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
			    $i=-1;
			    while(true){
			    	if($i==-1){
			    		if (file_exists($path . $filename . '.'.$extension)){
					    	$this->error = $filename . '.'.$extension . " already exists. <br>";
					    	$i = 0;
					    }
					    else{
					    	move_uploaded_file($_FILES["file"]["tmp_name"],
					    	$path . $filename . '.'.$extension);
					    	$this->status = $this->status."<br />Stored in: " . $path . $filename . '.'.$extension;
					    	$this->insertVideo($entityManager, $privacy, $videotype, $filename.'.'.$extension, $filename);
					    	return true;
					    }
			    	}
			    	else{
			    		if (file_exists($path . $filename.'('.$i.')' . '.'.$extension)){
					    	$this->error = $filename.'('.$i.')' . '.'.$extension . " already exists. <br>";
					    	$i += 1;
					    }
					    else{
					    	move_uploaded_file($_FILES["file"]["tmp_name"],
					    	$path . $filename.'('.$i.')' . '.'.$extension);
					    	$this->status = $this->status."<br />Stored in: " . $path . $filename.'('.$i.')' . '.'.$extension;
					    	$this->insertVideo($entityManager, $privacy, $videotype, $filename.'('.$i.')'.'.'.$extension, $filename);
					    	return true;
					    }
			    	}
			    	
			    }
			    
			}
		}
		else{
			$this->error = "Invalid file";
			return false;
		}
	}

	public function insertVideo($entityManager, $privacy, $videotype, $path, $filename){
		require_once 'entity/'.$videotype.'.php';
		require_once 'entity/User.php';
		$v = new $videotype();

		$vadded = true;

		
		
		
		
		try{
			$sql = 'SELECT u FROM User u WHERE u.id = :id';
			$query = $entityManager->createQuery($sql);
			$query->setParameter('id',$_SESSION['id']);
			$users = $query->getResult();
			
			if(!$users == null){
				$user = $users[0];
			}
			$v->setVideoname($filename);
			$v->setVideopath($path);
			$v->setPrivacy($privacy);
			$v->setUser($user);
			$v->setUserid($_SESSION['id']);
			$entityManager->persist($v);
			$entityManager->flush();
		}
		catch(PDOException $e){
			$vadded = false;
			echo $e->getMessage();
		}
		catch(Exception $e){
			$vadded = false;
			echo $e->getMessage();
		}
		
		return $vadded;
	}
}