<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta carset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/reset.css'); ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?> ">
  <script src="<?php echo base_url('/assets/js/jquery-2.1.4.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"> <span class="circle"></span> მთავარი გვერდი </a></li>
        <li><a href="#"> <span class="circle"></span> კლნტაქტი </a></li>
        <li><a href="#"> <span class="circle"></span> რეკლამა </a></li>
        <li><a href="#"> <span class="circle"></span> რეგისტრაცია </a></li>
        <li><a href="#"> <span class="circle"></span> შესვლა </a></li>
        <li><a href="#"> <span class="circle"></span> ახალი </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <li>

         <span class="seachspan"><i class="fa fa-search fa-lg"></i></span><input class="searchin" type="text" placeholder="საძიებო სიტყვა">

      </li>
        <li> 
          <div class="dropdown">
            <button class="dropdown-toggle md-select" type="button" data-toggle="dropdown">მდევარეობა
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">თბილისი</a></li>
              <li><a href="#">თბილისი</a></li>
              <li><a href="#">თბილისი</a></li>
            </ul>
          </div>
        </li>
        <li class="divider-vertical"></li>
        <li><a href="#"> გაფართოებული ძიება </a></li>

      </ul>

    </div>
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-4 navigation">
     <section class="container leftMenu">
        <ul>
          <li><i class="fa fa-book"></i><a href="">წიგნები</a></li>
          <li><i class="fa fa-book"></i><a href="">ტანსაცმელი</a></li>
          <li><i class="fa fa-book"></i><a href="">კომპ.აქსესუარები</a></li>
          <li><i class="fa fa-diamond"></i><a href="">ძვირფასი ნივთები</a></li>
          <li><i class="fa fa-gamepad"></i><a href="">ვიდეო თამაშები</a></li>
          <li><i class="fa fa-book"></i><a href="">ავეჯი ჭურჭელი</a></li>
          <li><i class="fa fa-book"></i><a href="">ანტიკვარიატი</a></li>
          <li><i class="fa fa-book"></i><a href="">მანქანები</a></li>
        </ul>
      </div>
    </section>
    <section class="col-md-8 rightMenu rightContent">
      <div class="content-r">
        <h1 class="text-center">VIP განცხადებები</h1>
        <div class="vip-cl">
          
        </div>
        <h1 class="text-center">ახალი დამატებულები</h1>
        <div class="new-cl">
        </div>
      </div>  
         </div>
       </div>
    </section>
  </div>
</div>
</body>
</html>