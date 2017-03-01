<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
	public function getAll()
	{
		 
		$r = $this->db
			->order_by('nome')
			->get('usuarios');
		if ($r->num_rows() > 0) {
			return $r->result();
		}else{
			return array();
		}
	}
}