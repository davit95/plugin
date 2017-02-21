<?php

require_once APP_PATH.DS.'models'.DS.'ImageModel.php';
require_once 'BaseRepository.php';
/**
* 
*/
class ImageRepository extends BaseRepository
{
	
	protected $imageModel;

	/**
	 * Return Image Model Object
	 *
	 * @return Response
	 */
	function __construct()
	{
		$this->imageModel = new ImageModel;
		return $this->imageModel;
	}

	/**
     * Image Create 
     *
     * @return Response
     */
	public function process($params, $files)
	{
		$images = $this->uploadImageAndReturnFileName($files);
		$images_sizes = $this->getimagesize($images);
		//$blur = $this->blur($images, $params);
		//$this->size($files, $params['size_1'], $params['size_2'], $params['size_3']);
		//$files_sizes_array = $this->getimagesize($images);
	}

	/**
     * Image Create 
     *
     * @return Response
     */
	public function createImage($params)
	{
		$data = $this->getImageData($params);
		$image_name = $this->uploadImageAndReturnFileName();
		$query = "INSERT INTO images (name) VALUES ('$image_name')";
		$result = $this->imageModel->sqlQuestion($query);
		return $result;
	}

	/*
     * Upload Image And Return string
     *
     * @return Response
     */
	private function uploadImageAndReturnFileName($files, $file_max_size = 500000)
	{
		$uploaddir = PUBLIC_PATH.DS.'uploads'.DS;
		$uploadfile1 = (null != $files['file_one']['name']) ?  $uploaddir . basename($this->getRandomString().$files['file_one']['name']) : null;
		$uploadfile2 = (null != $files['file_two']['name']) ?  $uploaddir . basename($this->getRandomString().$files['file_two']['name']) : null;
		$uploadfile3 = (null != $files['file_three']['name']) ?  $uploaddir . basename($this->getRandomString().$files['file_three']['name']) : null;

		echo '<pre>';
		if($uploadfile1 != null){
			if (move_uploaded_file($files['file_one']['tmp_name'], $uploadfile1)) {
			} else {
			    throw new RuntimeException('File is not uploaded');
			}
		}
		if($uploadfile2 != null){
			if (move_uploaded_file($files['file_two']['tmp_name'], $uploadfile2)) {
			} else {
			   throw new RuntimeException('File is not uploaded');
			}
		}

		if($uploadfile3 != null){
			if (move_uploaded_file($files['file_three']['tmp_name'], $uploadfile3)) {
			} else {
			    throw new RuntimeException('File is not uploaded');
			}
		}
		return ['file_1' => $uploadfile1, 'file_2' => $uploadfile2, 'file_3' => $uploadfile3];
		// $random_str = $this->getRandomString();
		// $target_file = $target_dir . $random_str . basename($_FILES["file_one"]["name"]);
		// $uploadOk = 1;
		// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// $check = getimagesize($_FILES["file_one"]["tmp_name"]);
	 //    if($check !== false) {
	 //        $uploadOk = 1;
	 //    } else {
	 //        $uploadOk = 0;
	 //    }
	 //    if ($_FILES["file_one"]["size"] > $file_max_size) {
	 //        $uploadOk = 0;
	 //    }
	 //    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	 //        $uploadOk = 0;
	 //    }
	 //    if ($uploadOk == 0) {
	 //        return false;
	 //    } else {
	 //        if (move_uploaded_file($_FILES["file_one"]["tmp_name"], $target_file)) {
	 //            $file_name = basename( $_FILES["file_one"]["name"]);
	 //            return $file_name;
	 //        } else {
	 //            return false;
	 //        }
	 //    }
	}

	/**
     * Generate random string
     *
     * @return Response
     */
	public function getRandomString($length = 32) {
		$str = "";
		$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		return $str;
	}
	
}