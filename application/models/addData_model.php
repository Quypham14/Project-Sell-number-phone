<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($s, $g, $l)
	{
		$dulieu = array('so' => $s,'gia'=> $g, 'loai'=>	$l);
		$this->db->insert('so_sim', $dulieu);
		return $this->db->insert_id();// tra ve 1 gia tri la id cua phan tu do
	}


}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */