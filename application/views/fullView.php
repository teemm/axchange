<section class="col-md-8 rightMenu rightContent">
  <div class="content-r">
    <div class="fullview btnBlock nomargin">
    	<div class="swapDesc ">
    		<p class="imgswap nomargin"><img src="<?php echo base_url('assets/images/swaps/'.$fullswap['firstimage']) ?>" /></p>
    	</div>
    </div>
    <div class="swapInfo btnBlock nomargin">
    	<ul class="swapinfoLists">
    		<li><strong class="infotitle">მომხმარებელი: </strong><strongstrong class="infovalue"><?php echo $fullswap['fname']; ?></strong></li>
    		<li><strong class="infotitle">კონტაქტი: </strong><strong class="infovalue"><?php echo $fullswap['contact']; ?></strong></li>
    		<li><strong class="infotitle">ნივთის დასახელება: </strong><strong class="infovalue"><?php echo $fullswap['title']; ?></strong></li>
    		<li><strong class="infotitle">ნივთის მდგომარეობა: </strong><strong class="infovalue"><?php echo $fullswap['status']; ?></strong></li>
    		<li><strong class="infotitle">მდებარეობა: </strong><strong class="infovalue"><?php echo $fullswap['state']; ?></strong></li>
    		<li><strong class="infotitle">რაში გაიცვლება: </strong><strong class="infovalue"><?php echo $fullswap['wantstuff']; ?></strong></li>
    	</ul>
    </div>
    <div class="cls"></div>
    <div class="footerpanel">
    	<div class="moreImage">
    		<?php if(isset($fullswap['swapImages'])):
    			foreach ($fullswap['swapImages'] as $value):?>
    			<p class="smallpic"><img src="<?php echo base_url('assets/images/swaps/'.$value); ?>"></p>
    			<?php endforeach; ?>
    		<?php endif; ?>
    	</div>
    	<div class="offer transition"><span>შესთავაზე</span></div>
    </div>
    <div class="notifications">
    	<p class="comment">კომენტარები</p>
    	<ul class="commentLists">
    		<li>
    			<p><span>თემო ფხალაძე</span></p>
    			<p><span>კომენტარის ტექსი</span></p>
    		</li>
    	</ul>
    </div>
  </div>  
</section>