<?php  
 class Main_model extends CI_Model  
 {  
      function can_login($username, $password)  
      {  
           $this->db->where('email', $username);  
           $this->db->where('pass', $password);  
           $query = $this->db->get('user');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }

      function test()  
      { 
        $query = $this->db->get('user');
        $result = $query->result();
        return $query->result();
      } 
 }    