<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model
{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function add($data){
        $insert = $this->db->insert('lanzadas',$data);
        $id = $this->db->insert_id(); 
        $this->db->close(); 
        return $id;
    }
    
    public function load(){
        $query = $this->db->query("select * from lanzadas order by id desc");
        $this->db->close();
        
        return $query->result(); 
    }
    
    public function update(){
        $update = [  
            'status' => 1
        ];
        $this->db->where('status', 0);
        $reply = $this->db->update('lanzadas', $update);
        $this->db->close(); 
        return $reply;
    }
    
    public function clear(){
        $query = $this->db->simple_query("delete from lanzadas");
        $this->db->close();
        return $query;
    }
    
    
}