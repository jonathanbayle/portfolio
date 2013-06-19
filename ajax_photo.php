<?php
  // $link = mysql_connect('----base----', '----username----', '----pwd----');
  // $db = mysql_select_db('----db-----') OR die('Error while selecting the database');
  // $sql = mysql_query("SELECT * FROM PHOTOS WHERE ID_PHOTO < ".mysql_real_escape_string($_GET['last'])." ORDER BY ID_PHOTO DESC LIMIT 5");
  
  // while($data=mysql_fetch_assoc($sql))
  // {
  
  // This line replaces, for the github repository, the code commented below
  $data = array('ID_BG' => '3', 'ID_PHOTO' => '6', 'APERTURE' => '1.8');
  
?>
	<div class="bottom-menu bottom-menu-large bg<?php echo $data['ID_BG']; ?>" id="<?php echo $data['ID_PHOTO']; ?>">
      <div class="container">
        <div class="row">
          <div class="span2 brand">
            <h3 class="demo-panel-title"><span class="fui-photo"></span> f/<?php echo $data['APERTURE']; ?></h3>
          </div>

          <div class="span9">
	        <a href="#myModal" role="button" data-toggle="modal">
          	  <img src="images/photos/<?php echo $data['ID_PHOTO']; ?>.jpg" alt="photo<?php echo $data['ID_PHOTO']; ?>" class="img" exif="true"/>
          	</a>
          </div>
        </div>
      </div>
    </div>
    <script>$(".img").exifLoad();</script>
<?php
  // To decomment if used with sql query
  // }
?>