<?php

/**
* 
*/
class BaseRepository
{
	public $image = null;
    public $output = null;

    private $width = null;
    private $height = null;
    private $tmp = null;
    private $methods = array();

	public function getimagesize($filenames)
	{
		$sizes = [];
		if($filenames['file_1']) {
			$sizes[] = getimagesize($filenames['file_1']);
		}
		if($filenames['file_2']) {
			$sizes[] = getimagesize($filenames['file_2']);
		}
		if($filenames['file_3']) {
			$sizes[] = getimagesize($filenames['file_3']);
		}
		return $sizes;
	}

	public function resize($filenames, $params)
	{
		//
	}

	public function blur($filenames, $params)
	{
		//header('Content-type: image/png');

		if($filenames['file_1']) {
			$image_1 = $this->getImagickObject($filenames['file_1']);
			$image_1->blurImage($params['blur_1']);
		}
		if($filenames['file_2']) {
			$image_2 = $this->getImagickObject($filenames['file_2']);
			$image_2->blurImage($params['blur_2']);
		}
		if($filenames['file_3']) {
			$image_3 = $this->getImagickObject($filenames['file_3']);
			$image_3->blurImage($params['blur_3']);
		}
		return true;	
		
	}

	private function getImagickObject($file)
	{
		$imagick = new Imagick($file);
		return $imagick;
	}

	public function radius($range1 = null, $range2 = null, $range3 = null)
	{
		//
	}

	public function size($file_names, $size1 = null, $size2 = null, $size3 = null)
	{
		//
	}
}