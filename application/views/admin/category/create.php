<?php $this->load->view('layout/topbar.php') ?>
<?php $this->load->view('layout/sidebar.php') ?>
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
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name Category</label>
                        <input type="text" name="name" id="name" required class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('layout/footer.php') ?>