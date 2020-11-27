<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

<?php include 'layout/navbar.php'; ?>

<section>
<div class="main-body">
    <div class="sidebr">
        <?php include 'layout/sidebr.php'?>
    </div>

    <div class="main-content">
        <div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Home </h3>
                </div>
                <div class="col-md-12">
                    <div class="card" style="border: none;border-radius: 0px;padding: 1px 8px;">
                        <div>
                            <p>Save User Data</p>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="" name="name">
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-1">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-11">
                                        <input type="text" class="form-control" placeholder="" name="name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-11">
                                        <input type="text" class="form-control" placeholder="" name="name">
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-sm">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</section>
<script src="app.js"></script>
</body>
</html>
