<?php

class Images extends CI_Model {

	// constructor (a good practice_
	function __construct()
	{
		parent::__contruct();
	}

	// return all images, descending order by post date
	function all()
	{
		$this->db->order_by("id", "desc");
		$query = $this->db->get('images');
		return $query->result_array();
	}
}