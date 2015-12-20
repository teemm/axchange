<section class="col-md-8 rightMenu rightContent">
    <div class="content-r">
  		<div class="addNews">
  			<h2>ახალი განცხადება</h2>
  			<form action="<?php echo site_url('main/addnewss'); ?>" method="POST" class="addnewsform" enctype="multipart/form-data">
  				<p><input type="text" name="nameofitem" placeholder="ნივთის სახელი"/></p>
  				<p>
					<select name="status">
	  					<option value="ახალი">ახალი</option>
	  					<option value="მეორადი">მეორადი</option>
	  				</select>  					
  				</p>
  				<p>
	  				<select name="city">
	  					<option value="tbilisi">tbilsi</option>
	  					<option value="tbilisi">Rustavi</option>
	  				</select>  					
  				</p>
          <p>
            <select name="cat">
              <option value="1">მარკები</option>
              <option value="2">იარაღები</option>
              <option value="3">სკულტურა</option>
              <option value="4">ლექსიკონი</option>
              <option value="5">საბავშვო ლიტერატურა</option>
            </select>           
          </p>
  				<p>
					<input type="text" class="whantstuff" name="wantstuff" placeholder="რაში გაცვლით"/>  					
  				</p>
          <p>
            <textarea name="desc" id="" cols="30" rows="10" placeholder="აღწერა"></textarea>
          </p>
          <p>აირჩიეთ ფოტო:</p>
          <p>
            <input type="file" accept="image/*" onchange="loadFile(event)" name="imagesname">
              <img style="width:300px;" id="output"/>
              <script>
                var loadFile = function(event) {
                  var output = document.getElementById('output');
                  output.src = URL.createObjectURL(event.target.files[0]);
                };
              </script>
          </p>
  				<p><input	type="submit" type="განცხადების დადება"  /></p>
  			</form>
  		</div>
    </div>
</section>	