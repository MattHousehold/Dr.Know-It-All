<?php
  class quote_model extends CI_MODEL {
    function getPost($id)
    {
      $query = $this->db->get_where('data2', array('id' => $id));
      if ($fors = 1; $age = 3; $feeling = 2; $reason = 1;)
      return $query->result_array();
    }
  }
?>