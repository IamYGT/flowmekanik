<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr"> 
<head>
    <title>Kurumsal - Flow Mekanik</title>
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
                        		<h2 class="wt-title">Kurumsal</h2>
                            </div>
                        </div> 
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                    <li>Kurumsal</li>
                                </ul>
                            </div>                      
                    </div>
                </div>
            </div> 
            <div class="section-full p-t120 p-b90 bg-no-repeat bg-center bg-gray-light">
            	<div class="about-section-one">
                    <div class="container">
                        <div class="section-content">                 
                            <div class="row justify-content-center d-flex">
                            
                                <div class="col-lg-6 col-md-12 m-b30">
                                    <div class="about-max-one">
                                        <div class="about-max-one-media"><img src="images/intro-pic.jpg" alt=""></div>
                                    </div>
                                </div>  
                                                      
                                <div class="col-lg-6 col-md-12 m-b30">
                                    <div class="about-section-one-right">
                                    <!-- TITLE START-->
                                    <div class="section-head left wt-small-separator-outer">
                                        <div class="wt-small-separator site-text-primary">
                                            <div class="sep-leaf-left"></div>
                                            <div>Flow Mekanik</div>
                                            
                                        </div>
                                        <h2>Hakkımızda</h2>
                                    </div>
                                    <!-- TITLE END-->

                                     <div class="about-one">
                                         <div class="about-year"> 
                                           <?php echo $ayarlar["hakkimizda_tr"]; ?>
                                         </div> 
                                    </div>                                                                
                                </div>
                                                                                     
    
                            </div>
                        </div>
                    </div> 
                </div>
                </div>
            </div>   
            <!-- ABOUT ONE SECTION END -->

            <!-- SOME FACTS START -->
            <div class="section-full p-b90 site-bg-primary">
                <div class="container">
                    <div class="section-content"> 
                        <div class="c-section-two">
                            

                            <div class="video-with-content m-b30">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="video-left-content">
                                            <h3 class="wt-title site-text-white">
                                                Flow Mekanik, geçmişten gelen deneyim ve sektörel birikimleri bir araya getirmek için kurulan; kalite ve çözüm odaklı bir firmadır.
                                            </h3>
                                            <p><?php echo $ayarlar["strPhone"]; ?></p> 
                                            <p><?php echo $ayarlar["strMail"]; ?></p>
                                            <i class="flaticon-customer-service"></i>
                                        </div>
                                    </div>
                                     
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>     
        </div>
        <!-- CONTENT END -->
<?php include("alt.php")?>
</body>

</html>
