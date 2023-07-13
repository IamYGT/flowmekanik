    <!-- FOOTER START -->
        <footer class="site-footer footer-dark"> 
			<div class="footer-top bg-bottom-center bg-no-repeat" style="background-image:url(<?php echo $ayarlar["strURL"]; ?>/images/background/footer-map.png);">
                <div class="container">
                    <div class="row">
				
					   
                        <div class="col-lg-3 col-md-6">
							
                            <div class="widget widget_about">
                                <h3 class="widget-title">Hakkımızda</h3>
                                <p><?php echo $ayarlar["kisahakkimizda_tr"]; ?></p>
                                <ul class="social-icons">
                                        <li><a href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>" class="fa fa-facebook"></a></li>
                                        <li><a href="https://www.twitter.com/<?php echo $ayarlar["strTwitter"]; ?>" class="fa fa-twitter"></a></li>
                                        <li><a href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>" class="fa fa-instagram"></a></li>
                                        <li><a href="https://wa.me/<?php echo $ayarlar["strWhatsappPhone_tr"]; ?>?text=<?php echo $ayarlar["strWhatsappMessage_tr"]; ?>" class="fa fa-whatsapp"></a></li>
                                </ul>
                            </div>                            
                            
                        </div>                        
                     <div class="col-lg-3 col-md-6">
                            <div class="widget widget_services">
                                <h3 class="widget-title">Menü</h3>
                                <ul>
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                <li ><a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal">Kurumsal</a></li>                                                                
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/galeri">Galeri</a></li>  
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/haberler">Haberler</a></li>  
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a></li>  
                                </ul>
                            </div>
                        </div> 
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_services">
                                <h3 class="widget-title">Hizmetlerimiz</h3>
                                <ul>
<?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1  AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 5");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 	<li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>                                        
                                     <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>                                </ul>
                            </div>
                        </div>

                       
	 <div class="col-lg-3 col-md-6 justify-content-center align-self-center">  
                            <div class="widget widget_newsletter">
                                        <a href="<?php echo $ayarlar["strURL"]; ?>/index">
                                <img src="<?php echo $ayarlar["strURL"]; ?>/images/logo2.png" alt="Flow Mekanik">
                                </a>
                                                            
                             </div>
                                                                                     
                       </div> 
                    </div>
                    <div class="footer_blocks">
                        <div class="row justify-content-center no-gutters">

                            <!--Block 1-->
                            <div class="col-lg-4 col-md-4">
                                <div class="block-content">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="wt-icon-box-sm">
                                            <span class="icon-cell  site-text-primary"><i class="flaticon-call"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte">Telefon</h4>
                                            <p><a  style="color: white" href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <?php echo $ayarlar["strPhone"]; ?> </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Block 2-->
                            <div class="col-lg-4 col-md-4">
                                <div class="block-content">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="wt-icon-box-sm">
                                            <span class="icon-cell  site-text-primary"><i class="flaticon-email"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte">Eposta</h4>
                                            <p><a style="color: white" href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <?php echo $ayarlar["strMail"]; ?> </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Block 3-->
                            <div class="col-lg-4 col-md-4">
                                <div class="block-content">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="wt-icon-box-sm">
                                            <span class="icon-cell site-text-primary"><i class="flaticon-location"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte">Adres</h4>
                                            <p><?php echo $ayarlar["strAddress"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                        </div>
                    </div>

                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
                                
            <div class="footer-bottom">
                <div class="container">
                	<div class="footer-bottom-info">
                        <div class="footer-copy-right">
                            <span class="copyrights-text">Copyright © <?php echo date("Y"); ?> by <span class="site-text-primary">Flow Mekanik</span> | Design: <a style="    color: #fdb900;" href="https://www.memsidea.com" rel="dofollow" > Memsidea Digital Agency </a> </span>
                        </div>
                    </div>
                </div>   
            </div>   



        
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

 	</div>

    <!-- LOADING AREA START ===== -->
        <div class="loading-area">
            <div class="loading-box"></div>
            <div class="loading-pic">
                <div class="cssload-spinner"></div>
            </div>
        </div>
    <!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= --> 
<script src="<?php echo $ayarlar["strURL"]; ?>/js/jquery-3.5.1.min.js"></script><!-- JQUERY.MIN JS -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/bootstrap-select.min.js"></script><!-- Form js -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/lc_lightbox.lite.js"></script><!-- IMAGE POPUP -->
 <!-- REVOLUTION JS FILES -->

<script src="<?php echo $ayarlar["strURL"]; ?>/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script src="<?php echo $ayarlar["strURL"]; ?>/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script src="<?php echo $ayarlar["strURL"]; ?>/js/rev-script-2.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-221634613-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-221634613-1');
</script>