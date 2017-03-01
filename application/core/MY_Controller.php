<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
	public $data = array();
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->render();
	}
	protected function render($view = '')
	{
		$this->data['title'] = ucwords($this->router->fetch_class());
		$this->load->view('layout/head', $this->data);
		$this->load->view('layout/menu', array('menu' => $this->router->fetch_class()));
		$this->load->view($view !== '' ? $view : $this->router->fetch_class(), $this->data);
		$this->load->view('layout/footer');
	}
}