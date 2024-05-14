<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load model
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['product'] = $this->Product_model->getAll();
        $data['page'] = 'product';
        $this->load->view('admin/product/index.php', $data);
    }

    public function create()
    {
        $data['category'] = $this->Category_model->getData()->result();
        $data['page'] = 'product';
        // var_dump($data);
        // die;
        $this->load->view('admin/product/create.php', $data);
    }
    public function actionadd()
    {
        $product = $this->Product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Product saved successfully');
        }
        redirect('admin/products/');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products');
        $product = $this->Product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Edit Berhasil Di Simpan');
            redirect('admin/products');
        }

        $data['category'] = $this->Category_model->getData()->result();
        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        $data['page'] = 'product';

        $this->load->view("admin/product/edit", $data);
    }

    public function delete($id = null) {
        if (!isset($id)) show_404();
        $this->Product_model->delete($id);
        $this->session->set_flashdata('success', 'Product deleted successfully');
        return redirect('admin/products');
    }
}
