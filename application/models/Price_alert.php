<?php
class Price_alert extends CI_Model{
    protected $table = 'sale_price';
    protected $table_category = 'category';
    protected $table_vendor = 'vendor';


    public function getAllList( $limit=null, $start = null ){
        $this->db->from( $this->table );
        $this->db->order_by('sp_id','DESC');
        $this->db->limit($limit,$start);
        $q = $this->db->get();
        return $q->result_array();
    }

    public function getCategoryList(){
        $columns = array('category_id','category_name');
        $this->db->select($columns);
        $this->db->from( $this->table_category );
        $q = $this->db->get();
        return $q->result_array();
    }


    public function countList(){
        return $this->db->count_all( $this->table );
    }

    public function add($data){
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $id){
        $this->db->where('sp_id', $id);
        return $this->db->update( $this->table, $data);
    }

    public function delete($id){
        $this->db->where('sp_id', $id);
        return $this->db->delete( $this->table );
    }

    public function truncate(){
        return $this->db->truncate( $this->table );
    }


    public function getVendorList(){
        $columns = array('vendor_id','display_name');
        $this->db->select($columns);
        $this->db->from($this->table_vendor);
        $q = $this->db->get();
        return $q->result_array();
    }
}