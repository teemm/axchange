<section class="col-md-8 rightMenu rightContent">
  <div class="content-r">
	<h1 class="text-center viH">VIP განცხადებები</h1>
	<div class="vip-cl">
			<div class="vip-images">
				<?php foreach ($vipswaps as $value):?>
				<div class="inline">
					<p class="fix">
						<a href="<?php echo base_url('swap/'.$value['swapId']); ?>"><img class="vipimg" src="<?php echo base_url('assets/images/swaps/'.$value['image']); ?>" alt="..." class="img-thumbnail"></a>
					</p>
					<h2 class="vipTitle"><?php echo $value['title'];?></h2>
					<p class="vipPar"> <?php echo $value['wantstuff'];?> </p>
				</div>
				<?php endforeach; ?>
			</div>
	</div>