<?php

Class Main_model extends CI_Controller{
    public function get($table_name){
        $this->db->get($table_name);
    }
    public function insert($table_name,$data){
       $this->db->insert($table_name, $data);
       $insert_return=$this->db->insert_id();
       return $insert_return ;
    }
    
    public function trigger(){
        $t_query= "CREATE TRIGGER print AFTER INSERT ON user ";
        $this->db->query("CREATE TRIGGER print");
    }
    
   public function retrive_database($table_name){
      $table_data=$this->db->query('select * from user_test');
        return $table_data->result();
   }
}
?>



