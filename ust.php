  <!-- HEADER START -->
        <header class="site-header header-style-4 mobile-sider-drawer-menu">
            
            <div class="top-bar site-bg-gray-light d-none d-sm-block">
                <div class="container-fluid">

                        <div class="wt-topbar-outer d-flex justify-content-between">
                           
                            <div class="wt-topbar-right d-flex flex-wrap align-content-center">
							 <ul class="wt-topbar-left-info">
                                    <li><a href="tel:<?php echo $ayarlar["strPhone"]; ?>">  <i class="fa fa-phone-square"></i><span>Telefon :</span> <?php echo $ayarlar["strPhone"]; ?> </a></li>
                                    <li> <a href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <i class="fa fa-envelope-square"></i><span>E-posta :</span> <?php echo $ayarlar["strMail"]; ?> </a></li>
                                </ul>
                               
                            </div>

                            <div class="wt-topbar-left d-flex flex-wrap align-content-start">
                                <div class="wt-topbar-right-info">
                                    <ul class="social-icons">
                                        <li><a href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>" class="fa fa-facebook"></a></li>
                                        <li><a href="https://www.twitter.com/<?php echo $ayarlar["strTwitter"]; ?>" class="fa fa-twitter"></a></li>
                                        <li><a href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>" class="fa fa-instagram"></a></li>
                                        <li><a href="https://wa.me/<?php echo $ayarlar["strWhatsappPhone_tr"]; ?>?text=<?php echo $ayarlar["strWhatsappMessage_tr"]; ?>" class="fa fa-whatsapp"></a></li>
                                    </ul>
                                </div> 
                            </div>                            
                        </div>
                       

                </div>
            </div>  
                    

            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">  
                                    
                    <div class="container-fluid clearfix"> 
                
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="<?php echo $ayarlar["strURL"]; ?>/index">
                                <img src="<?php echo $ayarlar["strURL"]; ?>/images/logo-7.png" alt="Flow Mekanik">
                                </a>
                            </div>
                        </div>  
                        
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Menü</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button> 

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                    
                            <ul class=" nav navbar-nav">
                                <li class="active has-child"><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a>                                                                  
                                </li>
                                
                                <li class="has-child">
                                    <a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal">Kurumsal</a> 
                                                                 
                                </li>                                    
                                <li class="has-child"><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz">Hizmetlerimiz</a><div class="fa fa-angle-right submenu-toogle"></div>
                                    <ul class="sub-menu">
									<?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 	<li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>                                        
                                     <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
									 </ul>                                
                                </li>
                        
                                <li ><a href="<?php echo $ayarlar["strURL"]; ?>/referanslar">Referanslar</a></li>                                                                
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/galeri">Galeri</a></li>  
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/haberler">Haberler</a></li>  
                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a></li>  
                        
                            </ul>

                        </div>
                        
                        <!-- Header Right Section-->
                        <div class="extra-nav header-1-nav">
                           
                            <div class="extra-cell two">
                                <div class="header-search">
                                    <a href="https://wa.me/<?php echo $ayarlar["strWhatsappPhone_tr"]; ?>?text=<?php echo $ayarlar["strWhatsappMessage_tr"]; ?>" class="header-search-icon"><i style="     padding-top: 7px;   font-size: 21px;" class="fa fa-whatsapp"></i></a>
                                </div>                              
                            </div>  
							<div style="    border-left: none;" class="extra-cell two d-none d-sm-block">
                                    <div class="ap-btn-outer">
                                        <a href="<?php echo $ayarlar["strURL"]; ?>/iletisim" class="ap-btn contact-slide-show">Teklif İsteyin <i class="fa fa-angle-double-right slide-right"></i></a>
                                    </div>                                
                                </div>								
                        </div> 
                       
                                                        
                        
                    </div>    
                
                
                </div>
            </div>
		</header>
        <!-- HEADER END -->