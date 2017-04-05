<?php



	class SportComponent extends Component{



		public $components = array('Auth', 'Session', 'Cookie');


		//FUNCTION FOR ENCRYPTION START

		public function encrypt($data){

			$enc_data = base64_encode($data);

			return $enc_data;

		}

		//FUNCTION FOR ENCRYPTION END


		//FUNCTION FOR DECRYPTION START

		public function decrypt($data){

			$deenc_data = base64_decode($data);

			return $deenc_data;

		}

		//FUNCTION FOR DECRYPTION END


		//FUNCTION FOR CREATING A RANDOM STRING START

		public function random_string($length=8){

			$characters = '0123456789';

			$randomString = '';

			for($i = 0; $i < $length; $i++)

				$randomString .= $characters[rand(0, strlen($characters) - 1)];

			return $randomString;

		}

		//FUNCTION FOR CREATING A RANDOM STRING END


		//FUNCTION FOR UPLAODING A FILE START

		public function uploadFile($fileArr, $path, $replaceFileName=null){ //pr($fileArr);die;
			$fileExtArr = explode('.', $fileArr['name']); // file extension
			$fileName = $this->random_string(5).time().rand(1, 99).$this->random_string(5).'.'.end($fileExtArr); //unique file name

			if($replaceFileName != ''){ // replace the new file with old name
				$fileName = $replaceFileName;
			}

			$targetPath = $path.$fileName;
			 if(move_uploaded_file($fileArr['tmp_name'], $targetPath))
				 return $fileName;
			 else
				 return '';
		}
		//FUNCTION FOR UPLAODING A FILE END


		//FUNCTION TO UPLOAD THE FILE START(SAURABH)
		function uploadFiles($path, $ext, $formData){ //echo $path.' --- '.$ext.' --- '.$formData; die;
			$filename = $this->createTempPassword(15).'.'.$ext;
			$url = $path.$filename;
		
				if(move_uploaded_file($formData['tmp_name'], $url))
					return $filename;
				else
					return '';
		}
		//FUNCTION TO UPLOAD THE FILE END


		//FUNCTION FOR PARSING THE URL START

		public function parseParameterNew($title){
			$title = trim(strtolower($title),'.');
			$title = trim($title,'-');
			$title = str_replace(' ', '-', $title);
			$title = str_replace("'", '-', $title);
			$newParameter = str_replace(array('/',' ',',','.',':',"'",'?','!','&','#39;', '--', '---'),array('-'),$title);
			return $newParameter;
		}

		//FUNCTION FOR PARSING THE URL END


		//FUNCTION TO GENERATE PASSWORD START
		public function createTempPassword($len){
		$pass = '';
		$lchar = 0;
		$char = 0;
		for($i = 0; $i < $len; $i++){
			while($char == $lchar){
				$char = rand(48, 109);
				if($char > 57) $char += 7;
				if($char > 90) $char += 6;
			}
			$pass .= chr($char);
			$lchar = $char;
		}
		return $pass;
	}
   //FUNCTION TO GENERATE PASSWORD END

		//FUNCTION FOR EMAIL VALIDATION START
		function validateEmail($email){
			$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
			if(preg_match($regex, $email))
				$ret = 'valid';
			else
				$ret = 'invalid';
			return $ret;
		}
		//FUNCTION FOR EMAIL VALIDATION END

		// FUNCTION TO FETCH THE INPUTS FROM THE WEB SERVICE HIT START
		public function fetchServiceInputBojectData(){
			$json = file_get_contents('php://input');
			return json_decode($json);
		}
		// FUNCTION TO FETCH THE INPUTS FROM THE WEB SERVICE HIT END

		// FUNCTION TO GET THE GOOGLE COORDINATES START
		public function getCoordinates($address){
			$address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern
			$url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";
			$response = file_get_contents($url); //pr($response);die;
			$json = json_decode($response,TRUE); //pr($json);die;
			$ret['latitude'] = $json['results'][0]['geometry']['location']['lat'];
			$ret['longitude'] = $json['results'][0]['geometry']['location']['lng']; //pr($ret);die;
			return $ret;
		}
		// FUNCTION TO GET THE GOOGLE COORDINATES END
	}
?>