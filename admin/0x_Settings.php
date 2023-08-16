<?php include "int.php"; ?>
<?php

include "header.php";

$ERROR____ = "";
$ERROR___ = "";

if(isset($_POST["Info_Login"])){

$Username = $_POST["username"];
$Password = $_POST["password"];
$Password_Update =  password_hash($Password, PASSWORD_DEFAULT);

$sql = "UPDATE Users SET username='$Username', password='$Password_Update' WHERE `id`='1'";

if ($link->query($sql) === TRUE) {
$ERROR____ =  "The Info Login has been successfully updated.";
} else {
$ERROR____ =  "Error updating record: " . $link->error;
}

$link->close();


}

if(isset($_POST["submit"])){

$Title_Update = $_POST["Title"];
$Description_Update = $_POST["Description"];



$sql = "UPDATE Settings SET Title='$Title_Update', Description='$Description_Update' WHERE `id`='1'";

if ($link->query($sql) === TRUE) {
$ERROR___ =  "The Settings has been successfully updated.";
} else {
$ERROR__ =  "Error updating record: " . $link->error;
}

$link->close();



}
?>
<div class="row">
<div class="col-md-6">
<div class="card">
<div class="card-header">
<?php if($ERROR____ !==""){ ?>
<div class="col-md-12">
<div class="alert alert-success alert-dismissible show fade">
<div class="alert-body">
<button class="close" data-dismiss="alert">
<span>&times;</span>

</button>
<?php echo $ERROR____; ?>
</div>
</div>
</div>

<?php }  else { ?>
<h4>Info Login</h4>
<?php } ?>
</div>
<div class="card">

<div class="card-body">

<form method="POST">




<div class="form-group">
<label>Username</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text">
<i class="fas fa-text-width"></i>
</div>
</div>

<input name="username" value="<?php echo htmlspecialchars($_SESSION["username"]); ?>"  type="text" class="form-control daterange-cus">
</div>
</div>

<div class="form-group">
<label>Password</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text">
<i class="fas fa-database"></i>
</div>
</div>
<input name="password"  type="Password" class="form-control daterange-cus">
</div>
</div>




<button class="btn btn-icon icon-left btn-primary" type="submit" name="Info_Login">   <i class="far fa-edit"></i> Update</a></button>

</form>
</div>
</div>
</div>
</div>

<div class="col-md-6">
<div class="card">
<div class="card-header">
<?php if($ERROR___ !==""){ ?>
<div class="col-md-12">
<div class="alert alert-success alert-dismissible show fade">
<div class="alert-body">
<button class="close" data-dismiss="alert">
<span>&times;</span>

</button>
<?php echo $ERROR___; ?>
</div>
</div>
</div>

<?php }  else { ?>
<h4>Site Settings</h4>
<?php } ?>
</div>
<div class="card">

<div class="card-body">

<form method="POST">




<div class="form-group">
<label>Title</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text">
<i class="fas fa-text-width"></i>
</div>
</div>
<input name="Title" value="<?php echo $Title; ?>" type="text" class="form-control daterange-cus">
</div>
</div>

<div class="form-group">
<label>Description</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text">
<i class="fas fa-database"></i>
</div>
</div>
<input name="Description" value="<?php echo $Description; ?>" type="text" class="form-control daterange-cus">
</div>
</div>




<button class="btn btn-icon icon-left btn-primary" type="submit" name="submit">   <i class="far fa-edit"></i> Update</a></button>

</form>
</div>
</div>
</div>
</div>

</div>
</section>
</div>
<?php
include "Footer.php";
 ?>
