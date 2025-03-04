<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model{
    private $_table = 'category';

    public $category_id;
    public $category_name;

    public function rules() {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' =>'required']
        ];
    }

    public function getData() {
        return $this->db->get($this->_table);
    }
     public function getDataById($id) {
        return $this->db->get_where($this->_table, ["category_id" => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->category_name = $post["name"];
        $this->db->insert($this->_table, $this);
    }

    public function update() {
        $post = $this->input->post();
        $this->category_id = $post["id"];
        $this->category_name = $post["name"];
        $this->db->update($this->_table, $this, array('category_id' => $post['id']));
    }

    public function delete($id) {
        return $this->db->delete($this->_table, array("category_id" => $id));
    }

}