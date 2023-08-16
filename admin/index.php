
<?php

include "header.php";




$ERROR__  = "";
$ERROR___ = "";


?>

<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<?php if($ERROR__ !==""){ ?>
<div class="col-md-12">

<div class="alert alert-danger alert-dismissible show fade">
<div class="alert-body">
<button class="close" data-dismiss="alert">
<span>&times;</span>
</button>
<?php echo $ERROR__; ?>
</div>
</div>
</div>

<?php }else if($ERROR___ !==""){ ?>
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
<?php } else{ ?>
<h4>الطلبة</h4>



<div class="card-header-action">
<a href="Add_Student.php" class="btn btn-danger">اضافة طالب <i class="fas fa-chevron-right"></i></a>
</div>
<?php } ?>
</div>



<div class="card-body p-0">
<div class="table-responsive table-invoice">
<table class="table table-striped">
<tr>
<th>#</th>
<th>اسم الطالب</th>
<th>رقم الهاتف</th>
<th> الايميل</th>
<th> العنوان</th>
<th>اسم ولي الامر</th>
<th>وقت الاضافة</th>
<th>اكثر</th>
</tr>

<tr>
<?php




error_reporting(0);
if (isset($_GET['pageno'])) {
$pageno = $_GET['pageno'];
} else {
$pageno = 1;
}
$no_of_records_per_page = 25;
$offset = ($pageno-1) * $no_of_records_per_page;


$total_pages_sql = "SELECT COUNT(*) FROM Students_List  ";

$result = mysqli_query($link,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql = "SELECT * FROM Students_List LIMIT $offset, $no_of_records_per_page";
$res_data = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res_data)){



?>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["Full_Name"]; ?></td>
<td><?php echo $row["Number"]; ?></td>
<td><?php echo $row["Email"]; ?></td>
<td><?php echo $row["Address"]; ?></td>
<td><?php echo $row["Name_Father"]; ?></td>
<td><?php echo $row["Time_Add"]; ?></td>


<form method="POST">
<td>

<a class="" data-toggle="tooltip" title="Delete"  data-original-title="Delete">
<button name="Delete"  type="submit" value="<?php echo $row["id"]; ?>" class="btn btn-danger btn-action trigger--fire-modal-1"> <i class="fas fa-trash"></i></button>

</a>


</td>
</form>
</tr>
<?php

}
mysqli_close($link);
?>

</table>
</div>
<div class="float-right">
<nav>

<style>
    ul.pagination li {
    background: #6777ef;
    color: #fff;
    padding: 7px 17px;
    border-radius: 10px;
    margin: 10px;
}
ul.pagination a {
    color: #fff;
}
</style>
<ul class="pagination">
<li><a href="?pageno=1">First</a></li>
<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
<a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
</li>
<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
<a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
</li>
<li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
</ul>


</nav>
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
