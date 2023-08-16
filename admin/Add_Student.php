
<?php

include "header.php";

$ERROR__ = "";

if(isset($_POST["submit"])){
$Full_Name   = $_POST["Full_Name"];
$Number      = $_POST["Number"];
$Email       = $_POST["Email"];
$Address     = $_POST["Address"];
$Name_Father = $_POST["Name_Father"];

$ERROR__ = $School_Class->Insert_Student($Full_Name,$Number,$Email,$Address,$Name_Father,$link);

}







?>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<?php if($ERROR__ !==""){ ?>
<div class="col-md-12">
<div class="alert alert-success alert-dismissible show fade">
<div class="alert-body">
<button class="close" data-dismiss="alert">
<span>&times;</span>

</button>
<?php echo $ERROR__; ?>
</div>
</div>
</div>

<?php }  else { ?>
<h4>اضافة طالب</h4>
<?php } ?>
</div>
<div class="card">

<div class="card-body">
<form method="POST">

<div class="form-group">
<label>اسم الطالب</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text">
<i class="fas fa-text-width"></i>
</div>
</div>
<input name="Full_Name" type="text" class="form-control daterange-cus">
</div>
</div>

<div class="form-group">
<label>رقم الهاتف</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text">
<i class="fas fa-text-width"></i>
</div>
</div>
<input name="Number" type="number" class="form-control daterange-cus">
</div>
</div>


<div class="form-group">
<label>الايميل</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text">
<i class="fas fa-text-width"></i>
</div>
</div>
<input name="Email" type="email" class="form-control daterange-cus">
</div>
</div>


<div class="form-group">
<label> العنوان</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text">
<i class="fas fa-text-width"></i>
</div>
</div>
<input name="Address" type="text" class="form-control daterange-cus">
</div>
</div>


<div class="form-group">
<label>اسم ولي الامر</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text">
<i class="fas fa-text-width"></i>
</div>
</div>
<input name="Name_Father" type="text" class="form-control daterange-cus">
</div>
</div>


<button class="btn btn-icon icon-left btn-primary" type="submit" name="submit">   <i class="far fa-edit"></i> اضافة طالب</a></button>

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
