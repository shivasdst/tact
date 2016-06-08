<?php

class Model {

	public function __construct() {

		$this->db = new Database();
	}

	public function getPostData() {

		if (isset($_POST['submit'])) {

			unset($_POST['submit']);	
		}

		if(!array_filter($_POST)) {
		
			return false;
		}
		else {

			return array_filter(filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
		}
	}

	public function getGETData() {

		if(!array_filter($_GET)) {
		
			return false;
		}
		else {

			return filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
	}

	public function preProcessPOST ($data) {

		return array_map("trim", $data);
	}

	public function encrypt ($data) {

		return sha1(SALT.$data);
	}
	
	public function sendLetterToPostman ($fromName = SERVICE_NAME, $fromEmail = SERVICE_EMAIL, 
		$toName = SERVICE_NAME, $toEmail = SERVICE_EMAIL, $subject = 'Bounce', 
		$message = '', $successMessage = 'Bounce', $errorMessage = 'Error') {

	    $mail = new PHPMailer();
        $mail->isSendmail();
        $mail->isHTML(true);
        $mail->setFrom($fromEmail, $fromName);
        $mail->addReplyTo($fromEmail, $fromName);
        $mail->addAddress($toEmail, $toName);
        $mail->Subject = $subject;
        $mail->Body = $message;
        
        return $mail->send();
 	}

 	public function bindVariablesToString ($str = '', $data = array()) {

 		unset($data['count(*)']);
	    
	    while (list($key, $val) = each($data)) {
	    
	        $str = preg_replace('/:'.$key.'/', $val, $str);
		}
	    return $str;
 	}

 	public function listFiles ($path = '') {

 		if (!(is_dir($path))) return array();

 		$files = scandir($path);
 
 		unset($files[array_search('.', $files)]);
 		unset($files[array_search('..', $files)]);
 
 		return $files;
 	}

	public function getAlbumDetails($albumID) {

		$dbh = $this->db->connect(DB_NAME);
		if(is_null($dbh))return null;
		
		$sth = $dbh->prepare('SELECT * FROM ' . METADATA_TABLE_L1 . ' WHERE albumID = :albumID');
		$sth->bindParam(':albumID', $albumID);

		$sth->execute();
		
		$result = $sth->fetch(PDO::FETCH_OBJ);
		$dbh = null;
		return $result;
	}

	public function getPhotoDetails($albumID, $id) {

		$dbh = $this->db->connect(DB_NAME);
		if(is_null($dbh))return null;
		
		$sth = $dbh->prepare('SELECT * FROM ' . METADATA_TABLE_L2 . ' WHERE albumID = :albumID AND id = :id');
		$sth->bindParam(':albumID', $albumID);
		$sth->bindParam(':id', $id);
		$sth->execute();
		
		$result = $sth->fetch(PDO::FETCH_OBJ);
		$dbh = null;

		return $result;
	}

	public function getNeighbourhood($albumID, $id) {

		$albumPath = PHY_PHOTO_URL . $albumID;

		$actualID = $this->getActualID($id);

		$photoPath = $albumPath . "/" . $actualID . PHOTO_FILE_EXT;

		$files = glob($albumPath . "/*" . PHOTO_FILE_EXT);

		$match = array_search($photoPath, $files);

		if(!($match === False)){
			
			$data['prev'] = (isset($files[$match-1])) ? preg_replace("/.*\/(.*)\.JPG/", "$1", $files[$match-1]) : '';
			$data['next'] = (isset($files[$match+1])) ? preg_replace("/.*\/(.*)\.JPG/", "$1", $files[$match+1]) : '';
			return $data;
		}	
		else{

			return False;
		}

	}

    public function getActualID($combinedID) {

        return preg_replace('/^(.*)__/', '', $combinedID);
    }

    public function getRandomImage($id){

        $photos = glob(PHY_PHOTO_URL . $id . '/thumbs/*.JPG');
        $randNum = rand(0, sizeof($photos) - 1);
        $photoSelected = $photos[$randNum];

        return str_replace(PHY_PHOTO_URL, PHOTO_URL, $photoSelected);   	
    }

    public function getPhotoCount($id = '') {

        $count = sizeof(glob(PHY_PHOTO_URL . $id . '/*.json'));
        return ($count > 1) ? $count . ' Photographs' : $count . ' Photograph';
    }

    public function getDetailByField($json = '', $firstField = '', $secondField = '') {

        $data = json_decode($json, true);

        if (isset($data[$firstField])) {
      
            return $data[$firstField];
        }
        elseif (isset($data[$secondField])) {
      
            return $data[$secondField];
        }

        return '';
    }
}

?>