<?php
class  Promo_category extends CI_Model{
    protected $table = 'promo_categories';
    protected $table_category = 'category';
    protected $table_product = 'product';

    public function getAllList( $limit=null, $start = null ){
        $this->db->from( $this->table );
        $this->db->order_by('promo_id','DESC');
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

    public function search_product($term, $cat = null){
    $columns = array('product_id','title');
        $this->db->select($columns);
        $this->db->from( $this->table_product );
        $this->db->like('title',$term);
        if($cat != null){
        $this->db->where_in('category',$cat);
        }
        $q = $this->db->get();
        $data = array();
        foreach($q->result_array() as $item){
            $data[$item['product_id']] = $item['title'];
        }
        return json_encode($data, true);
    }

    public function getPromoInfo($id){
    $this->db->from( $this->table );
        $this->db->where('promo_id',$id);
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

    public function add($data){
            return $this->db->insert($this->table, $data);
    }

    public function update($data, $id){
        $this->db->where('promo_id', $id);
    return $this->db->update( $this->table, $data);
    }

    public function delete($id){
        $this->db->where('promo_id', $id);
        return $this->db->delete( $this->table );
    }

    public function countAllPromo(){
        return $this->db->count_all( $this->table );
    }

}