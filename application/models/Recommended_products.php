<?php
class Recommended_products extends CI_Model{
    protected $table = 'recommended_porducts';
    protected $table_product = 'product';

    public function getAllList( $limit=null, $start = null ){
        $this->db->from( $this->table );
        $this->db->order_by('rp_id','DESC');
        $this->db->limit($limit,$start);
        $q = $this->db->get();
        return $q->result_array();
    }

    public function getRecommendedProductsInfo($id){
        $this->db->from( $this->table );
        $this->db->where('rp_id',$id);
        $q = $this->db->get();
        return $q->row();
    }

    public function getProductListByIds($ids){
        $columns = array('product_id','title');
        $this->db->select($columns);
        $this->db->from( $this->table_product );
        $this->db->where_in("product_id", $ids);
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
        $this->db->where('rp_id', $id);
        return $this->db->update( $this->table, $data);
    }

    public function delete($id){
        $this->db->where('rp_id', $id);
        return $this->db->delete( $this->table );
    }

}