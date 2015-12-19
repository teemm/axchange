 <div class="leftMenu">
        <ul>
          <?php foreach ($categories as $list):?>
          <li>
            <span class="book-sp"></span><a class="navs" href="<?php echo site_url('cat/'.$list['catId']); ?>"><?php echo $list['catName']; ?></a><i class="fa fa-chevron-down down"></i>
            <?php if(isset($list['children'])>0): ?>
            <ul class="hidelist">
            <?php foreach ($list['children'] as $child):?>
              <li><a href="<?php echo site_url('subcat/'.$child['subId']); ?>"><?php echo $child['subcatName']; ?></a></li>
             <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          </li> 
          <?php endforeach; ?>      
        </ul>
      </div>