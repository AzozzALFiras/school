
<?php include "int.php";?>
<?php



$sql = "SELECT * FROM  Settings  WHERE `id`='1'";
$result = $link->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$Title = $row["Title"];
$Description = $row["Description"];

}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title><?php echo $Title; ?></title>

<!-- General CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
<!-- CSS Libraries -->
<link rel="stylesheet" href="node_modules/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="node_modules/summernote/dist/summernote-bs4.css">
<link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/components.css">
</head>

<body style="font-family: 'Cairo';">
<div id="app">
<div class="main-wrapper">
<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
<form class="form-inline mr-auto">
<ul class="navbar-nav mr-3">
<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
</ul>

</form>
<ul class="navbar-nav navbar-right">


<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
<img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
<div class="d-sm-none d-lg-inline-block">Hi, <?php echo htmlspecialchars($_SESSION["Email"]); ?></div></a>
<div class="dropdown-menu dropdown-menu-right">

<a href="0x_Settings.php" class="dropdown-item has-icon">
<i class="fas fa-cog"></i> الاعدادات
</a>
<div class="dropdown-divider"></div>
<a href="0x_Logout.php" class="dropdown-item has-icon text-danger">
<i class="fas fa-sign-out-alt"></i> تسجيل الخروج
</a>
</div>
</li>
</ul>
</nav>
<div class="main-sidebar">
<aside id="sidebar-wrapper">
<div class="sidebar-brand">
<a href="index.php"><?php echo $Title; ?></a>
</div>
<div class="sidebar-brand sidebar-brand-sm">
<a href="index.php">AH</a>
</div>
<ul class="sidebar-menu">


<li class="menu-header">الخيارات</li>

<li><a class="nav-link" href="index.php"><i class="fa fa-inbox"></i> <span>كل الطلبة</span></a></li>
<li><a class="nav-link" href="Add_Student.php"><i class="fa fa-plus-square"></i> <span>اضافة طالب</span></a></li>
<li><a class="nav-link" href="Add_Teacher.php"><i class="fa fa-plus-square"></i> <span>اضافة مدرس</span></a></li>
<li><a class="nav-link" href="Add_Article.php"><i class="fa fa-plus-square"></i> <span>اضافة مادة</span></a></li>


</ul>



</aside>
</div>

<!-- Main Content -->
<div class="main-content">
<section class="section">
