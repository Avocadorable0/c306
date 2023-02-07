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

    public function listproduct(){
        $sql= "select utilisateur.idutilisateur,utilisateur.nom as proprietaire,produit.nom as produit, prix from EXCHANGE
                join produit on produit.idproduit=EXCHANGE.idproduit
                join utilisateur on utilisateur.idutilisateur=EXCHANGE.idutilisateur";
        $squery = $this->db->query($sql);
        $result = array();
        foreach($squery->result_array() as $row){
            $result[] = $row;
        }
        return $result;
    }
}


?>