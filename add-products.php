
<?php
session_start();
error_reporting(1);
if(empty($_SESSION['email'])){
    header('Location:login.php');
}

include('database/admin_confi.php');
if(isset($_POST['add']))
{
    $name=$_POST['name'];
    $url=$_POST['url'];
    $pic=$_POST['pic'];
    $date=date("dd:mm:yy");
    $time=date("h:i:sa");
    $status="0";

    $sql = "INSERT INTO `ilearnr_db`.`tbl_tasks` (`id`, `name`, `date`, `time`, `status`, `url`, `img_path`) VALUES (NULL, '$name', '$date', '$time', '$status', '$url', '$pic');";
    $result=$mysqli->query($sql);
    if ($result) {
        echo "<script>alert('Add url successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN:: CNC Bakery</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" type="text/css" href="tcal.css"/>
    <script type="text/javascript" src="tcal.js"></script>
    <style>
        tr, td {
            padding: 10px;
        }
		.modal-dialog {
  height: 80% !important;
  padding-top:10%;
}

.modal-content {
  height: 100% !important;
  overflow:visible;
}

.modal-body {
  height: 80%;
  overflow: auto;
}
    </style>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">
    <?php include("header.php"); ?>
    <?php include("leftsidebar.php"); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- general form elements -->
            <div class="box">
                <div class="box-header" style="text-align: center;">
                    <h3 class="box-title"><b>Manage Products</b></h3>
                </div>
                <div class="container">
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <div class="add-bar">
                <form method="post">
                <div class="pro-bar">
                <input type="text" name="title" placeholder="Title" >
                </div>
                <div class="pro-bar">
                <input type="text" name="subcategory" placeholder="Sub Category" >
                </div>
                <div class="pro-bar">
                <input type="text" name="title" placeholder="Title" >
                </div>
                <div class="pro-bar">
                <input type="text" name="title" placeholder="Title" >
                </div>
                <div class="pro-bar">
                <input type="text" name="title" placeholder="Title" >
                </div>
                <div class="pro-bar">
                <input type="text" name="title" placeholder="Title" >
                </div>
                <div class="pro-bar">
                <input type="text" name="title" placeholder="Title" >
                </div>
                <div class="pro-bar">
                <input type="text" name="title" placeholder="Title" >
                </div>
                
                <div class="btn_redmor">
                <input type="submit" name="submit" value="Submit" >
                </div>
                </form>
                </div>
                </div>
                <div class="col-md-3"></div>
                </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.row -->
    <!-- /.content -->
</div>
<!-- Trigger/Open The Modal -->

<div id="myModal" class="modal modal-lg" role="dialog" style="width: 100%;">
</div>


<div id="myModal1" class="modal modal-lg" role="dialog" style="width: 100%;">
</div>

<!-- jQuery 2.1.4 -->

<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<!--<script src="plugins/fastclick/fastclick.min.js"></script>-->
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->


</body>
</html>