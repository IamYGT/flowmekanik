<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 

	 $tekil_veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); 

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
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz">Hizmetlerimiz</a></li>
                                    <li><?php echo $tekil_veri_cek["haber_baslik"]; ?></li>
                                </ul>
                            </div>                      
                    </div>
                </div>
            </div> 
			
            <!-- SERVICE DETAIL SECTION START -->
            <div class="section-full p-t120 p-b90 bg-white">
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                        
                            <div class="col-lg-3 col-md-12 rightSidebar">
                                <div class="all_services m-b30">
                                    <ul>
									 <?php
				$countActive = 1;
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 9999999999");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>   <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>" class="<?php echo ($countActive == 1 ? ' ' : null); ?>"><?php echo $veri_listele["haber_baslik"]; ?></a></li> 
										<?php 
				 $countActive++;
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
                                    </ul>
                                </div> 
                                
                                <div class="service-side-btn m-b30 site-bg-primary text-white p-a20">
                                <h4 style="color:#fff; text-align:center;" class="wt-title m-b10">İletişime Geçin</h4>
                                    <p>Telefon numaramızı arayarak bizimle iletişime geçebilirsiniz.</p>
                                    
                                    
                                    <div class="wt-icon-box-wraper left ">
                                        <a href="tel:<?php echo $ayarlar["strPhone"]; ?>" class="btn-block  p-a10 m-tb5">
                                            <span class="text-black m-r10"><i class="fa fa-phone"></i></span>
                                            <strong class="text-black"><?php echo $ayarlar["strPhone"]; ?></strong>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-lg-9 col-md-12">
                                <div class="section-content service-full-info"> 
                                    <div class="services-etc m-b30">
                                        <div class="wt-media m-b30">
                                            <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $tekil_veri_cek["haber_description"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>"> 
                                        </div>                                        
                                        <div class="text-left">
                                            <h4 class="wt-title m-b20"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h4>
                                        </div>
  <?php echo $tekil_veri_cek["haber_aciklama"]; ?>
                                    </div> 
                                </div>
                            </div>
                        </div>                            
                    </div>                                 
                </div>
            </div>   
            <!-- SERVICE DETAIL SECTION END --> 

     
        </div>
       <?php include("alt.php")?>
</body>

</html>
