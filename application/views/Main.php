
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
            if($this->uri->segment(2)=='register'){
              $this->load->view('register');
            }
            else if($this->uri->segment(2)=='login'){
              $this->load->view('login');
            }
            else{
              $this->load->view('vip');
              $this->load->view('newsposts');              
            }
           ?>
      </div>  
    </section>
  </div>
</div>
