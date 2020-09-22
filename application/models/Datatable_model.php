<?php
class Datatable_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }


    public function dataOutput($params){
        $columns = array( 
            0 => 'title',
            1 => 'content',
            2 => 'date',
            3 => "CONCAT(last_name,' ',first_name)",
            4 => 'email'
        );
        $select="title,content,date,CONCAT(last_name,' ',first_name) as name,email";
        $this->db->select($select);
        $this->db->from('posts');
        $this->db->join('authors', 'author_id= authors.id');
        
       
        if( !empty($params['search']['value']) ) {
            $search=$params['search']['value'];
            $this->db->group_start();
            foreach ($columns as $c) {
                $this->db->or_like($c,$search);
            }
            $this->db->group_end();
        }
        
        $this->db->order_by($columns[$params['order'][0]['column']], $params['order'][0]['dir']);
        $this->db->limit($params['length'],$params['start']);
        
        $query=$this->db->get();
        return $query;
    }

    public function totalDataOutputFiltered($params){
        $columns = array( 
            0 => 'title',
            1 => 'content',
            2 => 'date',
            3 => "CONCAT(last_name,' ',first_name)",
            4 => 'email'
        );
        $this->db->select("COUNT(1) as total");
        $this->db->from('posts');
        $this->db->join('authors', 'author_id= authors.id');
         if( !empty($params['search']['value']) ) {
            $search=$params['search']['value'];
            $this->db->group_start();
            foreach ($columns as $c) {
                $this->db->or_like($c,$search);
            }
            $this->db->group_end();
        }
        
        $query=$this->db->get();
        //print_r($query->row());
        return $query->row()->total;
    }

    public function totalDataOutput(){
        return $this->db->from("posts")->join('authors', 'author_id= authors.id')->count_all_results();
    }

    


}