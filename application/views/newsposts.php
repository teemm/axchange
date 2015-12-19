       <h1 class="text-center">ახალი დამატებულები</h1>
        <div class="new-cl">
	        <div class="new-images">
	        	<?php foreach ($newswaps as $value):?>
		        <div class="inline1">
					<p class="fix1">
						<a href="<?php echo base_url('swap/'.$value['swapId']); ?>"><img src="<?php echo base_url('assets/images/swaps/'.$value['image']); ?>" alt="..." class="img-thumbnail"></a>
					</p>
					<h2 class="newTitle"><?php echo $value['title']; ?></h2>
					<p class="vipPar"><?php echo $value['wantstuff']; ?></p>
				</div>
				<?php endforeach; ?>
			</div>
        </div>
  </div>
</section>