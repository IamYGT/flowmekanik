<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 

	 $tekil_veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); 

?>
<!DOCTYPE html>
<html lang="tr"> 
<head>
    <title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - Flow Mekanik</title>
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
                        		<h2 class="wt-title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h2>
                            </div>
                        </div> 
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/haberler">Haberler</a></li>
                                    <li><?php echo $tekil_veri_cek["haber_baslik"]; ?></li>
                                </ul>
                            </div>                      
                    </div>
                </div>
            </div> 
			 
        <div class="section-full  p-t120 p-b90 bg-white">
            <div class="container">
            
                <!-- BLOG SECTION START -->
                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                    
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 m-b30">
                            <!-- BLOG START -->
                            <div class="blog-post-single-outer">
                                <div class="blog-post-style-2 blog-post-single bg-white p-b30">                                    

                                    <div class="wt-post-media">
                                        <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="">
                                    </div>                                        

                                    <div class="wt-post-info">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><?php echo $tekil_veri_cek["haber_tarih"]; ?></li>
                                                <li class="post-author"><a href="javascript:void(0);">Yazan: <span>Flow Mekanik</span></a> </li>
                                             </ul>
                                        </div>                           
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h3>
                                        </div>

                                        <div class="wt-post-discription">
								<?php echo $tekil_veri_cek["haber_aciklama"]; ?>

                                        </div>                                            
                                    </div>

                                </div>
 
                                
                               </div>                             
                        </div> 
                        
                        <!-- SIDE BAR START -->
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 rightSidebar  m-b30">
                        
                            <aside class="side-bar"> 
                                <div class="widget recent-posts-entry p-a20">
                                    <div class="text-left m-b30">
                                        <h4 class="widget-title">Son Haberler</h4>
                                    </div>
                                    <div class="section-content">
                                        <div class="widget-post-bx">
                                            <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 3");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> <div class="widget-post clearfix">
                                                <div class="wt-post-media">
                                                    <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                                                </div>
                                                <div class="wt-post-info">
                                                    <div class="wt-post-header">
                                                        <span class="post-date"><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></span>
                                                        <span class="post-title"> <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></span>
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
                                    
                              
                                <div class="widget widget_services p-a20">
                                        <div class="text-left m-b10">
                                            <h4 class="widget-title">Hizmetlerimiz</h4>
                                            
                                        </div>
                                        <ul>
                                           <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>  <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
 <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
									</ul>
                                </div>                 
                            </aside> 
                        </div>                 
                    </div>
                                            
                </div>
                
            </div>
            
        </div>   
        <!-- OUR BLOG END -->          
            
     
        </div>
        <!-- CONTENT END -->
<?php include("alt.php")?>
</body>

</html>
