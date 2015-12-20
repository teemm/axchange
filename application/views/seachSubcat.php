<section class="col-md-8 rightMenu rightContent">
  <div class="content-r">
  <?php if(count($seachSubcat)>1): ?>
   <h1 class="text-center">
   		<?php if(isset($seachSubcat[0]['nwtitle']))echo $seachSubcat[0]['nwtitle'];
   		else echo $seachSubcat[0]['CatName']; ?>
   	</h1>
    <div class="new-cl">
        <div class="new-images">
        	<?php foreach ($seachSubcat as $value):?>
	        <div class="inline1">
				<p class="fix1">
					<a href="<?php echo base_url('swap/'.$value['swapsId']); ?>"><img src="<?php echo base_url('assets/images/swaps/'.$value['image']); ?>" alt="..." class="img-thumbnail"></a>
				</p>
				<h2 class="newTitle"><?php echo $value['title']; ?></h2>
				<p class="vipPar"><?php echo $value['wantstuff']; ?></p>
			</div>
			<?php endforeach; ?>
		</div>
    </div>
	<?php 
	else:?>
		<h1 class="text-center">არ მოძებნა სიახლე</h1>
	<?php endif; ?>
  </div>
</section>	