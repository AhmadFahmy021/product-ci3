<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['category'] = $this->Category_model->getData()->result();
        $data['page'] = 'category';
        $this->load->view('admin/category/index.php', $data);
    }

    public function create() {
        $category = $this->Category_model;
        $validation = $this->form_validation;
        $validation->set_rules($category->rules());

        if ($validation->run()) {
            $category->save();
            $this->session->set_flashdata('success', 'Create Data Successfully');
            redirect(site_url('admin/category'));
        }
        $data['page'] = 'category'; 
        $this->load->view('admin/category/create', $data);
    }

    public function edit($id = null) {
        if (!isset($id)) redirect('admin/category');
        $category = $this->Category_model;
        $validation = $this->form_validation;
        $validation->set_rules($category->rules());

        if ($validation->run()) {
            $category->update();
            $this->session->set_flashdata('success', 'Edit Successfully');
            redirect(site_url('admin/category'));
        }

        $data['category'] = $category->getDataById($id);
        $data['page'] = 'category';
        $this->load->view('admin/category/edit', $data);
    }
     public function delete($id = null) {
        if (!isset($id)) redirect('admin/category');
        $this->Category_model->delete($id);
        $this->session->set_flashdata('success', 'Category deleted successfully');
        redirect('admin/category');
     }
}