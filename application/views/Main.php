
<div class="container">
  <div class="row">
    <section class="col-md-4 navigation">
      <?php 
        $data['categories']=$categories;
        $this->load->view('categories',$data);
      ?>
    </section>
    <section class="col-md-8 rightMenu rightContent">
      <div class="content-r">
          <?php 
              $this->load->view('vip');
              $this->load->view('newsposts');
           ?>
      </div>  
    </section>
  </div>
</div>
