<?php

  class Tasks extends CI_Model {
      
      public function tasks_list()
      {
       $user_id =1;
       $query = $this ->db
                         -> select('*')
                         -> from('tasks')
                         -> where ('user_id',$user_id )
                         -> get();
                         
        
        // print_r($query->result()) ; exit;
        return $query->result();

      }

  }