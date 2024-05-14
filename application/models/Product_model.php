<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product_model extends CI_Model {
    private $_table = 'product';

    public $product_id;
    public $product_name;
    public $product_price;
    public $product_amount;
    public $product_description;
    public $category_id;

    public function rules(){
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' =>'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' =>'required'],
            
            ['field' => 'amount',
            'label' => 'Amount',
            'rules' =>'required'],

            ['field' => 'description',
            'label' => 'description',
            'rules' =>'required'],

            ['field' => 'category',
            'label' => 'Category',
            'rules' =>'required'],
        ];
    }
    public function getAll() {
        return $this->db->from('product')->join('category', 'category.category_id=product.category_id')->get()->result();
    }
    public function getById($id) {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }
    public function save(){
        $post = $this->input->post();
        $this->product_name = $post["name"];
        $this->product_price = $post["price"];
        $this->product_amount = $post["amount"];
        $this->product_description = $post["description"];
        $this->category_id = $post["category"];
        $this->db->insert($this->_table, $this);
    }
    public function update() {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->product_name = $post["name"];
        $this->product_price = $post["price"];
        $this->product_amount = $post["amount"];
        $this->product_description = $post["description"];
        $this->category_id = $post["category"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }
    public function delete($id) {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}