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

    public function listproduct($Id){
        $sql = "select utilisateur.idutilisateur,utilisateur.nom as proprietaire,produit.nom as produit, prix from EXCHANGE
                join produit on produit.idproduit=EXCHANGE.idproduit
                join utilisateur on utilisateur.idutilisateur=EXCHANGE.idutilisateur where utilisateur.idutilisateur=$Id";
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
    public function inscri($Nom,$Email,$Mdp){
        $sql="insert into utilisateur values(null,%s,%s,%s,0)";
        $sql1=sprintf($sql,$this->db->escape($Nom),$this->db->escape($Email),$this->db->escape($Mdp));
        $this->db->query($sql1);
        echo $this->db->affected_rows();
    }
}


?>