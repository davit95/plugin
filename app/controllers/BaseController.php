<?php

class BaseController {

	private $view_path;

	/**
     * Render
     *
     * @return Response
     */
	public function render($string, $variables = array()) {

		extract($variables);
		ob_start();
		$file_params = explode('.', $string);
		$view_folder = $file_params[0];
		$view_file_name = $file_params[1];
		$file = $this->view_path = APP_PATH.DS.'resources'.DS.'views'.DS.$view_folder.DS.$view_file_name.'.php';
		if(!is_dir(APP_PATH.DS.'resources'.DS.'views'.DS.$view_folder)) {
			throw new Exception("Folder doesn't exists");
		}
		if(!file_exists($file)) {
			throw new Exception("File doesn't exists");
		}
		include $file;
		$ret = ob_get_contents();
		ob_end_clean();
		echo $ret;	
    }

    /**
     * Return Model
     *
     * @return Response
     */
    public function model($model){
        $path= APP_PATH.DS.'models'.DS.$model.'.php';
        require $path;
    }
}