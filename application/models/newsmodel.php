<?php if(! defined('BASEPATH')) exit ('No direct script allowed');

class newsModel extends CI_Model {
    public function showProduct(){
        $sql = "select * from produit";
        $query = $this->db->query($sql);
        $result = array();
        foreach($query->result_array() as $row){
            $result[] = $row;
        }
        return $result;
    }
}


?>