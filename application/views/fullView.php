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
                    <h2> შექმენით ახალი შეთავაზება </h2>
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
                    <input type="file" accept="image/*" onchange="loadFile(event)"/>
                </p>
                <p>
                </p>
                    <img style="width:300px;" id="output"/>
                </p>
                <p>
                    <button> შეთავაზების გაგზავნა </button>
                </p>
            </form>
        </div>

        <div class="my-of">
            <form action="" method="POST">
            <h2> შესთავაზე უკვე არსებული </h2>
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
  </div>  
</section>
<input type="file" >
<img id="output"/>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>

<script>
    $(document).ready(function(){
    $("#new").click(function(){
        $(".new-of").toggle("slow");
        $('.my-of').hide('slow');
    });
    $('#this').click(function(){
     $('.my-of').toggle('slow');
     $('.new-of').hide('slow');
    });
     $('.offer').click(function(){
     $('.offerhidden').toggle('slow');

    });
});
</script>
