<?php $this->load->View('layout/topbar.php') ?>
<?php $this->load->View('layout/sidebar.php') ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Dashboard 01</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<!-- PAGE ROW -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url() ?>admin/products/actionadd" method="post">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name Product</label>
                        <input type="text" name="name" id="name" required class="form-control  <?= form_error('name') ? 'is-invalid':''; ?>">
                        <div class="inlvaid-feedback">
                            <?= form_error('name') ?>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="price" class="form-label">Price Product</label>
                        <input type="number" name="price" id="price" required class="form-control  <?= form_error('price') ? 'is-invalid':''; ?>">
                        <div class="invalid-feedback">
                            <?= form_error('price')?>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="amount" class="form-label">Amount Product</label>
                        <input type="number" required name="amount" id="amount" class="form-control  <?= form_error('amount') ? 'is-invalid':''; ?>">
                        <div class="invalid-feedback">
                            <?= form_error('amount')?>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description Product</label>
                        <textarea class="form-control  <?= form_error('description') ? 'is-invalid':''; ?>" required name="description" id="description"></textarea>
                        <div class="invalid-feedback">
                            <?= form_error('description')?>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="category" class="form-label">Category Product</label>

                        <select name="category" class="form-select  <?= form_error('category') ? 'is-invalid':''; ?>" required id="category">
                            <?php foreach ($category as $itemCategory) :  ?>
                                <option value="<?= $itemCategory->category_id ?>"><?= $itemCategory->category_name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                                <?= form_error('category') ?>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- PAGE ROW END -->
<?php $this->load->View('layout/footer.php') ?>