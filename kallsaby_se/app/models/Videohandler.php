<?php

class videohandler{
	public $amount;
	
	public function getLatestVideo($entityManager, $videotype, $page, $role){
		require_once 'entity/' . $videotype . '.php';
		$records = $entityManager->getRepository("Video")->findBy(array(),array(),10,10*$page);
		$this->amount = count($records);
		$vids;
		if($this->amount == 0){
			return null;
		}
		for($i=0; $i<$this->amount;$i++){
			if($records[$i]->getPrivacy() == 'private' && $role < 4){
				$vids[$i]=array($records[$i]->getVideoName(), $records[$i]->getId());
			}
			else if($records[$i]->getPrivacy() == 'public'){
				$vids[$i]=array($records[$i]->getVideoName(), $records[$i]->getId());
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
				$records = $entityManager->find($videotype, $video);
				$path = '/resources/vid/'.$privacy.'/'.$videotype.'/'.$records->getVideopath();
				return $path;
			}
		}else if($privacy == 'public'){
			require_once 'entity/' . $videotype . '.php';
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
			    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			    }
			else{
			    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
			    echo "Type: " . $_FILES["file"]["type"] . "<br />";
			    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
			    $notsaved = true;
			    $i=-1;
			    while($notsaved){
			    	if($i==-1){
			    		if (file_exists($path . $filename . '.'.$extension)){
					    	echo $filename . '.'.$extension . " already exists. <br>";
					    	$i = 0;
					    }
					    else{
					    	move_uploaded_file($_FILES["file"]["tmp_name"],
					    	$path . $filename . '.'.$extension);
					    	echo "Stored in: " . $path . $filename . '.'.$extension;
					    	$this->insertVideo($entityManager, $privacy, $videotype, $filename.'.'.$extension, $filename);
					    	$notsaved = false;
					    }
			    	}
			    	else{
			    		if (file_exists($path . $filename.'('.$i.')' . '.'.$extension)){
					    	echo $filename.'('.$i.')' . '.'.$extension . " already exists. <br>";
					    	$i += 1;
					    }
					    else{
					    	move_uploaded_file($_FILES["file"]["tmp_name"],
					    	$path . $filename.'('.$i.')' . '.'.$extension);
					    	echo "Stored in: " . $path . $filename.'('.$i.')' . '.'.$extension;
					    	$this->insertVideo($entityManager, $privacy, $videotype, $filename.'('.$i.')'.'.'.$extension, $filename);
					    	$notsaved = false;
					    }
			    	}
			    	
			    }
			    
			}
		}
		else{
			echo "Invalid file";
		}
	}

	public function insertVideo($entityManager, $privacy, $videotype, $path, $filename){
		require_once 'entity/'.$videotype.'.php';
		$v = new $videotype();

		$vadded = true;
		
		try{
			$v->setVideoname($filename);
			$v->setVideopath($path);
			$v->setPrivacy($privacy);
			$entityManager->persist($v);
			$entityManager->flush();
		}
		catch(PDOException $e){
			$vadded = false;
		}
		catch(Exception $e){
			$vadded = false;
		}
		
		return $vadded;
	}
}