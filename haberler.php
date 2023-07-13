<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr"> 
<head>
    <title>Haberler - Flow Mekanik</title>
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
                        		<h2 class="wt-title">Haberler</h2>
                            </div>
                        </div> 
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                    <li>Haberler</li>
                                </ul>
                            </div>                      
                    </div>
                </div>
            </div> 
            <div class="section-full p-t120  p-b90 bg-white">
                <div class="container">
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div class="sep-leaf-left"></div>
                            <div>Flow Mekanik</div>                                
                        </div>
                        <h2 class="wt-title">Haberler</h2>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                          
						  
    <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 

						  <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <!--Block one-->
                                <div class="blog-post blog-post-4-outer">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"></a>
                                    </div>                                    
                                    <div class="wt-post-info">                                
                                        <div class="wt-post-title ">
                                            <h4 class="post-title"><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h4>
                                        </div>
                                        <div class="wt-post-text ">
                                                <p><?php echo 	$veri_listele["haber_kisaaciklama"]; ?></p>
                                            </div>  
                                        <div class="wt-post-readmore ">
                                            <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>" class="site-button-link black">Devamını Oku</a>
                                        </div>                                        
                                    </div>                                
                                </div>
                            </div>
                                <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
    
									
                        </div>
                        
                    </div>
                </div>
            </div>   
            <!-- OUR BLOG END -->
          
            
     
        </div>
   <?php include("alt.php")?>
</body>

</html>
