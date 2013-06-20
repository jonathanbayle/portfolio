<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lissot.info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Personnal Photography Gallery"/>
    <meta name="keywords" content="photography, flat, lissot"/>

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"/>

    <!-- Loading Flat UI & personnal css -->
    <link href="css/flat-ui.css" rel="stylesheet"/>
	<link href="css/component.css" rel="stylesheet"/>
    <link href="css/lissot.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body class="cbp-spmenu-push">

    <h1 class="demo-headline">lissot.info</h1>
    
    <!-- Top -->
    <div class="container">
      
      <a href="http://twitter.com/2is0" title="Follow me maybe">
	    <span class="fui-twitter">2is0</span>
	  </a>
	  
	  <button id="showRightPush" class="btn btn-primary"><span class="fui-list"></span></button>
  
    </div>
    <!-- /.container -->
    
    <!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">EXIF DATAS</h3>
	  </div>
	  <div class="modal-body">
	      <p>Taken with a <span id="Model"></span> on <span id="DateTimeOriginal"></span>.</p>
	      <p>Shot at <span id="FNumber"></span> during <span id="ExposureTime"></span>.</p>
	      <p>What about the ISO? <span id="ISOSpeedRatings"></span>!</p>
	      <p>Where? Well my camera doesn't have any gps…</p>
	  </div>
	  <div class="modal-footer">
	    <button class="btn btn-wide" data-dismiss="modal" aria-hidden="true">OK</button>
	    <a href="https://twitter.com/share?url=&text=I+just+visited+http%3A%2F%2Flissot.info+cc+@2is0" target="_blank" class="btn btn-info"><i class="fui-twitter"></i> Share on twitter</a>
	  </div>
	</div>
    <!-- /.modal -->
    
    <!-- Photos (with DB : to decomment if used with sql query) -->
    <!--
//    <?php
//     $link = mysql_connect('----base----', '----username----', '----pwd----');
//     $db = mysql_select_db('----db-----') OR die('Error while selecting the database');
//     $sql = mysql_query("SELECT * FROM PHOTOS WHERE ID_PHOTO < ".mysql_real_escape_string($_GET['last'])." ORDER BY ID_PHOTO DESC LIMIT 5");
//	 while($data=mysql_fetch_assoc($sql))
//	 { 
//	 ?>
//		 <div class="bottom-menu bottom-menu-large bg<?php echo $data['ID_BG']; ?>" id="<?php echo $data['ID_PHOTO']; ?>">
//	     <div class="container">
//	       <div class="row">
//	         <div class="span2 brand">
//	           <h3 class="demo-panel-title"><span class="fui-photo"></span> f/<?php echo $data['APERTURE']; ?></h3>
//	         </div>
//	
//	         <div class="span9">
//	           <a href="#myModal" role="button" data-toggle="modal">
//	             <img src="images/photos/<?php echo $data['ID_PHOTO']; ?>.jpg" alt="photo<?php echo $data['ID_PHOTO']; ?>" class="img" exif="true"/>
//	           </a>
//	         </div>
//	       </div>
//	     </div>
//	   </div>
//	<?php
//	}
//	?>
	-->
	<!-- /.photos (with DB) -->
    
    <!-- Photos (with DB : Github example) -->

	<div class="bottom-menu bottom-menu-large bg2" id="1">
     <div class="container">
       <div class="row">
         <div class="span2 brand">
           <h3 class="demo-panel-title"><span class="fui-photo"></span> f/1.8</h3>
         </div>

         <div class="span9">
           <a href="#myModal" role="button" data-toggle="modal">
             <img src="images/photos/1.jpg" alt="photo1" class="img" exif="true"/>
           </a>
         </div>
       </div>
     </div>
    </div>

	<div class="bottom-menu bottom-menu-large bg4" id="2">
     <div class="container">
       <div class="row">
         <div class="span2 brand">
           <h3 class="demo-panel-title"><span class="fui-photo"></span> f/4.5</h3>
         </div>

         <div class="span9">
           <a href="#myModal" role="button" data-toggle="modal">
             <img src="images/photos/2.jpg" alt="photo2" class="img" exif="true"/>
           </a>
         </div>
       </div>
     </div>
    </div>

	<div class="bottom-menu bottom-menu-large bg5" id="3">
     <div class="container">
       <div class="row">
         <div class="span2 brand">
           <h3 class="demo-panel-title"><span class="fui-photo"></span> f/8</h3>
         </div>

         <div class="span9">
           <a href="#myModal" role="button" data-toggle="modal">
             <img src="images/photos/3.jpg" alt="photo3" class="img" exif="true"/>
           </a>
         </div>
       </div>
     </div>
    </div>

	<div class="bottom-menu bottom-menu-large bg4" id="4">
     <div class="container">
       <div class="row">
         <div class="span2 brand">
           <h3 class="demo-panel-title"><span class="fui-photo"></span> f/1.4</h3>
         </div>

         <div class="span9">
           <a href="#myModal" role="button" data-toggle="modal">
             <img src="images/photos/4.jpg" alt="photo4" class="img" exif="true"/>
           </a>
         </div>
       </div>
     </div>
    </div>

	<div class="bottom-menu bottom-menu-large bg1" id="5">
     <div class="container">
       <div class="row">
         <div class="span2 brand">
           <h3 class="demo-panel-title"><span class="fui-photo"></span> f/8</h3>
         </div>

         <div class="span9">
           <a href="#myModal" role="button" data-toggle="modal">
             <img src="images/photos/5.jpg" alt="photo5" class="img" exif="true"/>
           </a>
         </div>
       </div>
     </div>
    </div>
	
	<!-- /.photos (without DB : Github example) -->
	
	<div class="loadmore">
		<div><img src="images/icons/Spaceship@2x.png" alt=""></div>
	</div>
	
	<div class="nb_photos">6</div>

	<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
		<h3>Menu</h3>
		<a href="http://lissot.info"><span class="fui-photo"></span> Home</a>
		<a href="#" class="disabled"><span class="fui-chat"></span> Post: Fitbit Flex</a>
		<a href="http://florian.lissot.info"><span class="fui-user"></span> About me</a>
	</nav>

    <!-- JS loads ==============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.exif.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/classie.js"></script>
	<script>
		//Menu
		var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
			showRightPush = document.getElementById( 'showRightPush' ),
			body = document.body;

		showRightPush.onclick = function() {
			classie.toggle( this, 'active' );
			classie.toggle( body, 'cbp-spmenu-push-toleft' );
			classie.toggle( menuRight, 'cbp-spmenu-open' );
			disableOther( 'showRightPush' );
		};

		function disableOther( button ) {
			if( button !== 'showRightPush' ) {
				classie.toggle( showRightPush, 'disabled' );
			}
		}

    	//Photos request
		$(document).ready(function(){
			var load = false;
			var offset = $('.bottom-menu:last').offset(); 
			$(window).scroll(function(){
				if((offset.top-$(window).height() <= $(window).scrollTop()) 
				&& load==false && ($('.bottom-menu').size()>=5) && 
				($('.bottom-menu').size()!=$('.nb_photos').text())){
					load = true;
					var last_id = $('.bottom-menu:last').attr('id');
					$('.loadmore').show();
					$.ajax({
						url: './ajax_photo.php',
						type: 'get',
						data: 'last='+last_id,
						dataType: 'html',
						success: function(data) {
							$('.loadmore').fadeOut(500);
							$('.bottom-menu:last').after(data);
							offset = $('.bottom-menu:last').offset();
							load = false;
						}
					});
				}
			});
		});
		
		//Modal exif infos
		$(document).on("click", ".img", function() {
			document.getElementById('Model').innerHTML = $(this).exif("Model");
			document.getElementById('DateTimeOriginal').innerHTML = $(this).exif("DateTimeOriginal");
			document.getElementById('ExposureTime').innerHTML = "1/"+(1/$(this).exif("ExposureTime"))+"s";
			document.getElementById('FNumber').innerHTML = "f/"+$(this).exif("FNumber");
			document.getElementById('ISOSpeedRatings').innerHTML = "ISO"+$(this).exif("ISOSpeedRatings");
		});
	</script>
  </body>
</html>
