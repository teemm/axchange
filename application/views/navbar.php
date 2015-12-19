
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <?php foreach ($menus as $list): ?>
        <li><a href="<?php echo site_url('pages/'.$list['eng_name']); ?>"><span class="circle"></span><span data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" ><?php echo $list['name']; ?></span> </a></li>
      <?php endforeach; ?>
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