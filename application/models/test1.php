<?php
  class quote_model extends CI_MODEL {
    function getPost($id)
    {
      $query = $this->db->get_where('data2', array('id' => $id));
     
      return $query->result_array();
    }

    functrion get_quote()
    {
    	$age = $this->post('age')
    	$feeliung = $this->post('feeliung')
    	query = thdfgdfg get_where ('data2', array('age' => $age, 'feeling' => $feeling))
    }
  }
?>