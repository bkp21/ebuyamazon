<?php
class Bulk_operation extends CI_model{
    protected $table_product = 'product';
    protected $table_category = 'category';
    protected $table_sub_category = 'sub_category';
    protected $table_vendor = 'vendor';
    public function __construct(){
        parent::__construct();
        $this->load->library("PHPExcel");

    }

    public function getCategoryList(){
        $columns = array('category_id','category_name');
        $this->db->select($columns);
        $this->db->from( $this->table_category );
        $q = $this->db->get();
        return $q->result_array();
    }

    public function getVendorList(){
        $columns = array('vendor_id','display_name');
        $this->db->select($columns);
        $this->db->from($this->table_vendor);
        $q = $this->db->get();
        return $q->result_array();
    }

    public function getCategoryDetail($id, $columns){
        $this->db->select($columns);
        $this->db->from(    $this->table_category   );
        $this->db->where("category_id", $id);
        $q = $this->db->get();
        return $q->row();

    }

    public function readSpreadSheet($file, $offsetCol = A, $limitCol = F){
        try {
            $inputFileType = PHPExcel_IOFactory::identify($file);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($file);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($file,PATHINFO_BASENAME).'": '.$e->getMessage());
        }

//  Get worksheet dimensions
        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();
        $rowData = array();
//  Loop through each row of the worksheet in turn
        for ($row = 1; $row <= $highestRow; $row++){
            //  Read a row of data into an array
            // $rowData[] = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
            $rowData[] = $sheet->rangeToArray($offsetCol . $row . ':' . $limitCol . $row,

                NULL,
                TRUE,
                FALSE);
            //  Insert row data array into your database of choice here
        }

        return $rowData;
    }

    public function pushToProduct($data,$update_rule_id){
        $this->db->select("COUNT(*) as cnt");
        $this->db->from('product');
        $this->db->where('category',$data['category']);
        $this->db->where('title',$data['title']);
        $query = $this->db->get();
        $row=$query->row();
        if($row->cnt >0){
            if($update_rule_id==1 || $update_rule_id==4){
                $this->db->where('category',$data['category']);
                $this->db->where('title',$data['title']);
                $this->db->update($this->table_product, $data);
            }
            if($update_rule_id==3){
                $this->db->where('category',$data['category']);
                $this->db->where('title',$data['title']);
                $this->db->delete($this->table_product);
                //$this->db->insert($this->table_category, $data);
            }
        }else{
             if($update_rule_id==1 || $update_rule_id==2 || $update_rule_id==3){
                $this->db->insert($this->table_product, $data);
            }
        }  

    }


     public function pushToCategory($data,$update_rule_id){
         $this->db->select("COUNT(*) as cnt");
        $this->db->from('category');
        $this->db->where('parentid',$data['parentid']);
        $this->db->where('category_name',$data['category_name']);
        $query = $this->db->get();
        $row=$query->row();
        if($row->cnt >0){
            if($update_rule_id==1 || $update_rule_id==4){
                $this->db->where('parentid',$data['parentid']);
                $this->db->where('category_name',$data['category_name']);
                $this->db->update($this->table_category, $data);
            }
            if($update_rule_id==3){
                $this->db->where('parentid',$data['parentid']);
                $this->db->where('category_name',$data['category_name']);
                $this->db->delete($this->table_category);
                //$this->db->insert($this->table_category, $data);
            }
        }else{
             if($update_rule_id==1 || $update_rule_id==2 || $update_rule_id==3){
                $this->db->insert($this->table_category, $data);
            }
        }            
    }
    
    public function pushToSubCategory($data){
        return $this->db->insert($this->table_sub_category, $data);
    }

    public function checkProductExistence($id){
        $this->db->from($this->table_product);
        $this->db->where('product_id',$id);
        $q = $this->db->get();
        return $q->num_rows();
    }

    public function updateProductPhoto($id, $data){
        $this->db->where('product_id',$id);
       return  $this->db->update($this->table_product, $data);
    }

    public function checkCategoryExistence($id){
        $this->db->from($this->table_category);
        $this->db->where('category_id',$id);
        $q = $this->db->get();
        return $q->num_rows();
    }

    public function updateCategoryPhoto($id, $data){
        $this->db->where('category_id',$id);
        return  $this->db->update($this->table_category, $data);
    }


}