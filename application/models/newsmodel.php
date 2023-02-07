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
        $sql = "select utilisateur.idutilisateur,utilisateur.nom as proprietaire,produit.nom as produit, prix from EXCHANGE
                join produit on produit.idproduit=EXCHANGE.idproduit
                join utilisateur on utilisateur.idutilisateur=EXCHANGE.idutilisateur";
        $squery = $this->db->query($sql);
        foreach($squery->result_array() as $row){
            $result[] = $row;
        }
        return $result;
    }

    public function conekta($Email,$Mdp){
        $sql="select * from utilisateur where gmail=%s and mdp = %s";
        $sql1=sprintf($sql,$this->db->escape($Email),$this->db->escape($Mdp));
        $query=$this->db->query($sql1);
        $result=$query->row_array();
        return $result;
    }
}


?>