<?php

require_once 'BaseController.php';
require_once APP_PATH.DS.'models'.DS.'ImageModel.php';
require_once APP_PATH.DS.'repositories'.DS.'ImageRepository.php';
/**
* 
*/
class PluginController extends BaseController
{
	protected $image_model;

	/**
     * Make ImageRepository Object
     *
     * @return Response
     */
	public function __construct()
	{
		$this->image_model = new ImageRepository();
		return $this->image_model;
	}

	/**
     * Return View
     *
     * @return Response
     */
	public function index()
	{
		return $this->render('plugin.index');
	}

	/**
     * Image Upload
     *
     * @return Response
     */
	public function upload()
	{
		if(null != $image = $this->image_model->process($_POST, $_FILES)) {
			echo 'Image has been successfully created';
		}
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

}