<?php
  class Blog_model extends CI_MODEL {
    
    function getquote()
    {
    	$age = $this->post('age')
    	$feeling = $this->post('feeling')
    	$query = $this -> get_where ('data2', array('age' => $age, 'feeling' => $feeling))
    }
  }
?>