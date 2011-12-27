<?php
//If BASEPATH is not defined, simply exit.
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cf_module_model extends MY_Model
{

    function get()
    {
		$data = array();
		$query = $this->db->order_by('sort')->where('parent', 'top')->get('module');
		$modules_db = $query->result_array();
		foreach($modules_db as $k => $v)
		{
			$data[$v['url']] = unserialize($v['menu']);
		}
		
		return $data;
    }

    function get_ids()
    {
		$data = array();
		$query = $this->db->select('module_id,url')->get('module');
		$modules_db = $query->result_array();
		foreach($modules_db as $k => $v)
		{
			$data[$v['url']] = $v['module_id'];
		}
		
		return $data;
    }

    function get_raw()
    {
		// $data = array();
		$query = $this->db->order_by('parent')->get('module');
		// $modules_db = 
		return $query->result_array();
		/*
		foreach($modules_db as $k => $v)
		{
			$data[$v['module_id']] = $v;
		}
		
		return $data;
		*/
    }
}

?>