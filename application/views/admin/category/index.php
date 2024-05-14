<?php $this->load->View('layout/topbar.php') ?>
<?php $this->load->View('layout/sidebar.php') ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Category</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row">
    <div class="col-md-12">
    <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Category</h4>
                <div class="ms-auto">
                    <a href="<?= site_url('admin/category/create') ?>" class="btn btn-sm btn-primary">Add Category</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name category</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;?>
                            <?php foreach ($category as $cat) :?>
                                <tr>
                                    <td><?php echo $no++?></td>
                                    <td><?php echo $cat->category_name?></td>
                                    <td>
                                        <a href="<?= site_url('admin/category/edit/'.$cat->category_id) ?>" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="<?= site_url('admin/category/delete/'.$cat->category_id) ?>" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->View('layout/footer.php') ?>