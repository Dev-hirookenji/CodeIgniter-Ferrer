<?php

class Posts_model extends CI_Model{

    public function __construct(){

        $this->load->database();

    }

    public function get_posts(){

        $query = $this->db->get('post');
        return $query->result_array();

    }

    public function get_posts_single($param){

        $this->db->where('slug', $param);
        $result = $this->db->get('post');
        
        return $result->row_array();
    }

    public function insert_post($user_id, $title, $body){
        $slug = url_title($title, 'dash', true); // creates the slug
        $data = array(
            'user_id' => $user_id,
            'title' => $title,
            'slug' => $slug, // add the slug to the data array
            'body' => $body
        );
    
        return $this->db->insert('post', $data);
    }
    
    
    public function get_posts_edit($id){
        $this->db->where('id', $id);
        $result = $this->db->get('post');
            
        return $result->row_array();
    }
    
    public function update_post(){
        
        $id = $this->input->post('id');
        $data = array(
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body'),
        );

        $this->db->where('id', $id);
        return $this->db->update('post', $data);
    }

    public function delete_post(){

        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('post');

        return true;

    }

    public function login(){

        $this->db->where('email', $this->input->post('username', true));
        $this->db->where('password', $this->input->post('password', true));
        $result = $this->db->get('user');

        if($result->num_rows() == 1){

            return $result->row_array();

        }else{
            
            return false;
        }

    }

    public function get_posts_search($param){

        $this->db->like('title', $param);
        $query = $this->db->get('post');
        return $query->result_array();
    }
}