<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");

$row_info = $db->query("SELECT * FROM galeriler WHERE galeri_seo = '1' ")->fetch(PDO::FETCH_ASSOC);
$ustid = $row_info["galeri_ust_id"];

 ?>
<!DOCTYPE html>
<html lang="tr"> 
<head>
    <title>Galeri - Flow Mekanik</title>
<?php include("css.php")?>    
</head> 
<body> 
	<div class="page-wraper">
    <?php include("ust.php")?>
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(<?php echo $ayarlar["strURL"]; ?>/images/banner/1.jpg);">
            	<div class="overlay-main site-bg-black opacity-06"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="wt-title">Galeri</h2>
                            </div>
                        </div> 
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                    <li>Galeri</li>
                                </ul>
                            </div>                      
                    </div>
                </div>
            </div> 
               
			<div class="section-full p-t120 p-b90 bg-white">
            <div class="container"> 
                <div class="masonry-wrap row clearfix d-flex justify-content-center flex-wrap">
				
				<!-- COLUMNS 2 -->
                    	<?php 

			$list = $db->query("SELECT * FROM files WHERE ustid = 1 AND itable = 1");
				foreach($list as $row){
?>		  
				   <div class="masonry-item cat-2 col-xl-4 col-lg-4 col-md-6">
                        <div class="project-outer2">

                            <div class="project-style-2">
                                <div class="project-media">
                                    <img src="<?php echo $ayarlar["strURL"]; ?>//uploads/files/<?php echo $row["name"]?>" alt="Galeri">
                                </div>
                                <div class="wt-info">
                                     <a style="    border-radius: 67px;    width: 50px;    height: 50px; line-height: 50px;" class="elem pic-small" href="<?php echo $ayarlar["strURL"]; ?>//uploads/files/<?php echo $row["name"]?>"  data-lcl-thumb="<?php echo $ayarlar["strURL"]; ?>//uploads/files/<?php echo $row["name"]?>">
                                    <i class="fa fa-search-plus"></i>
                                    </a>                                                                       
                                </div>                              
                            </div>

                            
                        </div>                            
                    </div>                    
                          <?php 
				} 
				?>
					                                                                            
                </div>
                <!-- PROJECT CONTENT END --> 
            </div>
        </div>   
        <!-- Project 2 SECTION END -->  

        </div>
      <?php include("alt.php")?>
</body>

</html>
