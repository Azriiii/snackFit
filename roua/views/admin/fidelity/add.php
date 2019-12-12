<?php
include dirname(__FILE__) . '/../baseBack.php';

if (isset($_POST['id'])) {
    $fidelity  = new Fidelity();
    $fidelity->setId($_POST["id"]);
    $fidelity->setName($_POST["name"]);
    $fidelity->setCode($_POST["code"]);
    $fidelity->setValue($_POST["value"]);
    $result = $fidelityController->addFidelity($fidelity);
    //var_dump($result);
    if ($result === true) {
        ?>
        <script>
            window.location.replace("<?php echo curPageURL() . '/views/admin/fidelity' ?>");
        </script>
<?php
    }
}
?>

<?php startblock("content"); ?>
<!-- top tiles -->
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Fidelity Management</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active"><a href="#">Simple Tables</a></li>
        </ul>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add new
                        <small>
                            Fidelity
                        </small>
                    </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form action="add.php" method="post" id="demo-form2" novalidate="">
                        <input type="hidden" name="id">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Code <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="address" name="code" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Value</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="number" name="value">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>


<?php endblock(); ?>