<<<<<<< HEAD
<?php ($this->session->flashdata('error_signin'))?$error='1':$error=''; ?>
<div class="registration">
	<form action="<?php echo base_url('Registration/Chackregister'); ?>" method="post">
		<p><input type="text" name="flnames" class="flnames" placeholder="სახელი და გვარი"/></p>
		<p><input type="email" name="email" class="email" placeholder="ელ-ფოსტა" /></p>
		<p><input type="password" name="password" class="password" /></p>
		<p><input type="password" name="repeatpassword" class="repeatpassword" /></p>
		<p><input type="text" name="mobilenumber" class="mobilenumber" placeholder="მობილურის ნომერი" /></p>
		<p><input type="submit" class="submitSend" value="რეგისტრაცია" /></p>
	</form>
</div>
=======
<form action="<?php echo site_url('Main/'); ?>"</form>
>>>>>>> 176f00fcb41ff16aaa8674465a2e2245f50a4493
