<?php

class Product_model extends CI_Model
{
    public $tableName = "products";

    public function __construct()
    {
        parent::__construct();

    }


    // veritabanından bütün kayıtları getirecek olan fonksiyon.
    public function  get_all(){

        return $this-> db -> get($this->tableName)->result();

    }

    public function add($data = array()){

        // insert nereye , neyi kaydedeceğini söylüyor
        return $this->db->insert($this->tableName, $data );
    }

}