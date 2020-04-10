<?php 

class Main_model extends CI_model
{
    function test_main()
    {
        echo 'this is model function';
    }

    function insert_data($data){
        $this->db->insert('demo', $data);
    }

    function fetch_data(){
        //$query = $this->db->get("demo"); //select * from demo db table

        //$query = $this->db->query("SELECT * FROM demo ORDER BY ID ASC")
        
        $this->db->select('*'); //select * 
        $this->db->from('demo'); //from 'demo' table
        $query = $this->db->get(); //get query

        return $query;
    }

    function delete_data($id){
        $this->db->where('id', $id);
        $this->db->delete('demo');

        //DELETE FROM demo WHERE id = $id
    }

    function fetch_single_data($id){
        $this->db->where('id', $id);
        $query = $this->db->get('demo');
        return $query;

        //Select * FROM demo where id = '$id'
    }

    function update_data($data, $id){
        $this->db->where('id', $id);
        $this->db->update('demo', $data);

        //UPDATE demo SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'
    }

    //Database operation function write here
    
}


?>