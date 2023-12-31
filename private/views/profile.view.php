<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>


<div class="container-fluid p-4 shadow max-auto" style="max-width: 1000px;">
    <?php $this->view('includes/crumbs') ?>

    <h4>Profile</h4>
    <div class="row">
        <div class="col-sm-4 col-md-3">
            <img src="<?= ASSETS ?>/images/female.jpg" class="border border-primary d-block mx-auto rounded-circle"
                style="width: 100px">
            <h3 class="text-center">Mary Doe</h3>
        </div>
        <div class="col-sm-8 col-md-9 bg-light p-2">
            <table class="table table-hover table-striped table-boarded">
                <tr>
                    <th>Firstname:</th>
                    <td>Mary</td>
                </tr>
                <tr>
                    <th>Lastname:</th>
                    <td>Doe</td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td>Female</td>
                </tr>
                <tr>
                    <th>Date Created:</th>
                    <td>25-11-2023</td>
            </table>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Classes </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tests</a>
            </li>

        </ul>
        <nav class="navbar bg-body-tertiary">
            <form class="container-fluid">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</span>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                        aria-describedby="basic-addon1">
                </div>
            </form>
        </nav>
    </div>
</div>

<?php $this->view('includes/footer') ?>