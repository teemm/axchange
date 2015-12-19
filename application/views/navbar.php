
<nav class="navbar navbar-default">
  <div class="container">
   
      <a class="navbar-brand" href="<?php echo base_url(''); ?>">
        <img alt="Brand" src="<?php echo base_url('assets/images/svg/logo.svg'); ?>">
      </a>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <?php foreach ($menus as $list): ?>
          <?php if($this->session->userSwap && ($list['eng_name']=='register' || $list['eng_name']=='login'))continue; ?>
            <li><a href="<?php echo base_url('pages/'.$list['eng_name']); ?>"><span class="circle"></span> <?php echo $list['name']; ?> </a></li>     
          <?php endforeach; ?>
          <?php if($this->session->userSwap): ?>
            <li>
              <button class="dropdown-toggle md-select" type="button" data-toggle="dropdown"><span class="circle"></span>ჩემი პროფილი
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('myprofile'); ?>">ჩემი პროფილი</a></li>
                <li><a href="<?php echo base_url('Registration/logout') ?>">გამოსვლა</a></li>
              </ul>
            </li>
          <?php endif; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <li>
        <form action="<?php echo site_url('main/search'); ?>" method="post">
            <span class="seachspan"><i class="fa fa-search fa-lg"></i></span><input class="searchin" type="text" placeholder="საძიებო სიტყვა" name="search">
        </form>
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