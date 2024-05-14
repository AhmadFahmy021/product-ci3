<?php $this->load->view('layout/topbar.php') ?>
<?php $this->load->view('layout/sidebar.php') ?>




<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Product</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW-1 -->
<div class="row">
    <div class="col-md-12">
        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mb-0">Product</h3>
                <div class="ms-auto">
                    <a href="<?= base_url() ?>admin/products/create" class="btn btn-primary btn-sm">Add Product</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatable" class="table table-bordered text-nowarp mb-0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Product</th>
                                <th>Price Product</th>
                                <th>Amount Product</th>
                                <th>Category Product</th>
                                <th>Description Product</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($product as $item) :  ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $item->product_name ?></td>
                                    <td><?= $item->product_price ?></td>
                                    <td><?= $item->product_amount ?></td>
                                    <td><?= $item->category_name ?></td>
                                    <td><?= $item->product_description ?></td>
                                    <td>
                                        <a href="<?= base_url() . 'admin/products/edit/' . $item->product_id ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?= base_url() . 'admin/products/delete/' . $item->product_id ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                <?php endforeach; ?>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ROW-1 END -->

<!--app-content close-->
<?php $this->load->view('layout/footer.php') ?>