<?php ($this->session->flashdata('error_signin'))?$error='1':$error=''; ?>
<section class="col-md-8 rightMenu rightContent">
  <div class="content-r">
		<div class="formblock ">
			<form action="<?php echo base_url('Registration/Chackregister'); ?>" method="post" class="loginform registerform">
				<p><span class="fa fa-user"></span><input type="text" name="flnames" class="flnames textinpt" placeholder="სახელი და გვარი"/></p>
				<p><span class="fa fa-envelope-o"></span><input type="email" name="email" class="email textinpt" placeholder="ელ-ფოსტა" /></p>
				<p><span class="fa fa-lock"></span><input type="password" name="password" placeholder="პაროლი" class="password textinpt" /></p>
				<p><span class="fa fa-lock"></span><input type="password" name="repeatpassword" placeholder="გაიმეორეთ პაროლი" class="repeatpassword textinpt" /></p>
				<p><span class="fa fa-mobile"></span><input type="text" name="mobilenumber" class="mobilenumber textinpt" placeholder="მობილურის ნომერი" /></p>
				<p><input type="submit" class="submitSend submitbutton transition" value="რეგისტრაცია" /></p>
			</form>
		</div>
    </div>  
</section>		