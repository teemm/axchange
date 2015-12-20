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
    <div class="offerhidden">
        <p class="centerButtons">
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
              <div class="btn-group" role="group">
                <button type="button" id="new" class="btn btn-default">შექმენი შეთავაზება</button>
              </div>
              <div class="btn-group" role="group">
                <button type="button" id="this" class="btn btn-default">არსებულის შეთავაზება</button>
              </div>
            </div>


           <!--  <button class="newOffer"> შექმენი შეთავაზება </button>
            <button class="thisOffer"> არსებულის შეთავაზება </button> -->
        </p>
        <div class="new-of">
            <form action="" method="POST" id="form1">
                <p>
                    <label for="">ნივთის დასახელება:</label> 
                </p>
                <p>
                    <input type="text" placeholder="მიუთითეთ ნივთის დასახელება"/>
                </p>
                <p> 
                    <label for="">მდგომარეობა:</label>
                </p>
                <p>
                   <select name="" id="">
                        <option value=""> ახალი </option>
                        <option value=""> მეორადი </option>
                    </select>
                </p>
                <p>
                    <label for="">ფოტოს ატვირთვა:</label>
                    
                </p>
                <p>
                    <input type="file" id="imgInp" onchange="loadFile(event)"/>
                    
                </p>
                <p>
                </p>
                    <img style="width:100px;"/>
                </p>
                <p>
                    <button> შეთავაზების გაგზავნა </button>
                </p>
            </form>
        </div>

        <div class="my-of">
            <form action="" method="POST">
                <p> 
                    <label for="">მდგომარეობა:</label>
                </p>
                <p>
                   <select name="" id="">
                        <option value=""> ახალი </option>
                        <option value=""> მეორადი </option>
                    </select>
                </p>
                <p>
                    <button> შეთავაზების გაგზავნა </button>
                </p>
            </form>
        </div>
    </div>



                                    
                                   <div>
                                    <form action="" method="POST">
                                        <input class="comminput" name="coment" type="text" placeholder="კომენტარის დამატება">
                                        
                                        <button class="btn btn-primary">გაგზავნა</button>
                                    </form>
                                </div>


                                <section class="comments">
                               
                                  <article class="comment">
                                  <a class="comment-img" href="<?php echo base_url('assets/images/users/user.png'); ?>">
                                    <img src="" alt="" width="50" height="50">
                                  </a>
                                  <div class="comment-body">
                                    <div class="text">
                                      sadsadasdass
                                    </div>
                                    <p class="attribution">by temo at 20th</p>
                                  </div>

                                </article>

                                  <article class="comment">
                                  <a class="comment-img" href="<?php echo base_url('assets/images/users/user.png'); ?>">
                                    <img src="" alt="" width="50" height="50">
                                  </a>
                                  <div class="comment-body">
                                    <div class="text">
                                      sadsadasdass
                                    </div>
                                    <p class="attribution">by temo at 20th</p>
                                  </div>
                                  
                                </article>
                                
                            </section>​




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






<script>
 function readURL(input) {
        for(var i =0; i< input.files.length; i++){
        if (input.files[i]) {
            var reader = new FileReader();

            reader.onload = function (e) {
               var img = $('<img id="dynamic">');
               img.attr('src', e.target.result);
               img.appendTo('#form1');  
            }
            reader.readAsDataURL(input.files[i]);
           }
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
</script>
<script>
    $(document).ready(function(){
    $("#new").click(function(){
        $(".new-of").removeClass('my-of').toggle("slow");
    });
    $('#this').click(function(){
     $('.my-of').removeClass('new-of').toggle('slow');
    });
    $('.offer').click(function(){
     $('.offerhidden').removeClass('new-of').toggle('slow');
    });
});
</script>
