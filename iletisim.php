<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr"> 
<head>
    <title>İletişim - Flow Mekanik</title>
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
                        		<h2 class="wt-title">İletişim</h2>
                            </div>
                        </div> 
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                    <li>İletişim</li>
                                </ul>
                            </div>                      
                    </div>
                </div>
            </div> 
        <div class="section-full  p-t120 p-b120">   
            <div class="section-content">
                <div class="container">
                    <div class="contact-one">
                        <!-- CONTACT FORM-->
                        <div class="row no-gutters d-flex justify-content-center flex-wrap align-items-center">
                            
                            <div class="col-lg-7 col-md-12">
                                <div class="contact-form-outer site-bg-gray">
                                    <form class="cons-contact-form" method="post" action="form-handler2.php">

                                        
                                        <!-- TITLE START-->
                                        <div class="section-head left wt-small-separator-outer">
                                            <h3 class="wt-title m-b30">İletişim Formu</h3>
                                            <p>İletişim Formundan bizlere ulaşabilir, görüş veya önerilerinizi bize iletebilirsiniz.</p>
                                        </div>
                                        <!-- TITLE END-->                                        
                                                                                
                                        <div class="row">

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="İsminiz">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                <input name="email" type="text" class="form-control" required="" placeholder="Eposta">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Telefon">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <input name="subject" type="text" class="form-control" required="" placeholder="Konu">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                <textarea name="message" class="form-control" rows="4" placeholder="Mesajınız"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button sb-bdr-dark">Gönder</button>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div> 

                            <div class="col-lg-5 col-md-12">
                                <div class="contact-info site-bg-black" style="background-image: url(images/background/footer-map.png);">
                                    <!-- TITLE START-->
                                    <div class="section-head left wt-small-separator-outer when-bg-dark">
                                        <h3 class="wt-title">İletişim Bilgileri</h3>
                                    </div>
                                    <!-- TITLE END--> 
                                    
                                    <div class="contact-info-section">  
                                            
                                            <div class="c-info-column">
                                                <span class="m-t0">Adres</span>
                                                <p><?php echo $ayarlar["strAddress"]; ?></p>
                                            </div>  

                                            <div class="c-info-column">
                                                <span class="m-t0">Telefon</span>
                                                <a href="tel:<?php echo $ayarlar["strPhone"]; ?>" style="color:#fff;"> <p> <?php echo $ayarlar["strPhone"]; ?></p> </a>
                                            </div>

                                            <div class="c-info-column">
                                                <span class="m-t0">Eposta</span>
                                                 <a href="mailto:<?php echo $ayarlar["strMail"]; ?>" style="color:#fff;">   <p><?php echo $ayarlar["strMail"]; ?></p> </a>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </div>
            </div>
        </div>

        <!-- GOOGLE MAP -->
        <div class="section-full">
            <div class="container-fluid">   
                <div class="gmap-outline">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12732.871401154971!2d37.3677114!3d37.076118!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2848bda141d6271e!2zRkxPVyBNRUtBTsSwSyDEsE7FnkFBVCBTQU4uIFTEsEMuIExURC4gxZ5UxLAu!5e0!3m2!1str!2str!4v1627131267468!5m2!1str!2str" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                </div>
            </div>
        </div>         

        </div>
      <?php include("alt.php")?>
</body>

</html>
