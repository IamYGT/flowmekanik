<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr"> 
<head>
    <title>Anasayfa - Flow Mekanik</title>
<?php include("css.php")?>    
</head>

<body>

	<div class="page-wraper">
     <?php include("ust.php")?>    
        <div class="page-content">

            <!-- SLIDER START --> 
         <div class="slider-outer">
                        
                <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
                    <div id="webmax-two" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
                        <ul>	
                          <?php
				$veri_cek = $db->query("SELECT * FROM slayt WHERE slayt_durum = 1");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
                            <li data-index="rs-901" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                
                                <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>" alt="" data-lazyload="<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Power1.easeOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina="">
                                    
                                
                                <!-- LAYER NR. 0 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-901-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                                </div>
 
                                <!-- LAYERS 1 Black Circle -->
                                <div class="tp-caption  tp-resizeme slider-block-2" id="slide-901-layer-1" data-x="['left','left','center','center']" data-hoffset="['-120','-120','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                    {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]' data-textalign="['left','left','left','left']" data-paddingtop="[285,285,285,200]" data-paddingright="[285,285,285,200]" data-paddingbottom="[285,285,285,200]" data-paddingleft="[285,285,285,200]" style="z-index: 2;">
                                    <div class="rs-wave" data-speed="1" data-angle="0" data-radius="2px"></div>
                                </div>                                  
                            
                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-901-layer-2" data-x="['left','left','center','center']" data-hoffset="[60','60','0','0']" data-y="['middle','middle','top','top']" data-voffset="['-120','-120','160','240']" data-fontsize="['20','20','20','14']" data-lineheight="['20','20','20','14']" data-width="['600','500','85%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textalign="['left','left','center','center']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 2; 
                                    white-space: normal; 
                                    font-weight: 600;
                                    color:#fff;
                                    border-width:0px; font-family: 'Poppins', sans-serif; text-transform:uppercase">
                                    <div class="site-text-white"><?php echo 	$veri_listele["slayt_baslik"]; ?></div>
                                </div>
                                
                                <!-- LAYER NR. 3 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-901-layer-3" data-x="['left','left','center','center']" data-hoffset="[60','60','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-40','-40']" data-fontsize="['80','70','60','30']" data-lineheight="['90','80','70','40']" data-width="['750','750','85%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textalign="['left','left','center','center']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 2; 
                                    white-space: normal; 
                                    font-weight: 700;
                                    color:#fff;
                                    border-width:0px; font-family: 'Poppins', sans-serif;">
                                    <div class="site-text-white"><?php echo 	$veri_listele["slayt_aciklama"]; ?></div>
                                </div>                                
                                                    
                                <!-- LAYER NR. 5 [ for botton ] -->
                                <div class="tp-caption tp-resizeme rev-btn" id="slide-901-layer-5" data-x="['left','left','center','center']" data-hoffset="['60','60','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','150','120','60']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textalign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:2;">
                                <div><a href="<?php echo 	$veri_listele["slayt-butonlink"]; ?>" class="site-button-secondry"><?php echo $veri_listele["slayt_buton"]; ?></a></div>
                                </div>
             

                            </li>
                              
							 <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
 
							  </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
                    </div>
                </div>

            </div>
            <!-- SLIDER END -->            

            <!-- ABOUT ONE SECTION START -->
            <div class="section-full p-t120 bg-no-repeat bg-center bg-gray-light">
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
 

  <div class="section-full" >
                 <div class="container">
                    <div class="help-blocks m-t50 m-b30">
                        <div class="row justify-content-center no-gutters">

                            <!--Block 1-->
                            <div class="col-lg-4 col-md-6 site-bg-primary">
                                <div class="help-block-content  white">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="wt-icon-box-sm">
                                            <span class="icon-cell site-bg-dark"><i class="flaticon-lightbulb"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte">Uygun Maliyetli</h4>
                                            <p>En ekonomik ve uygun maliyetlerle projelendirme.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Block 2-->
                            <div class="col-lg-4 col-md-6 site-bg-gray">
                                <div class="help-block-content ">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="wt-icon-box-sm">
                                            <span class="icon-cell site-bg-dark"><i class="flaticon-customer-service"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte">Hızlı Hizmet</h4>
                                            <p>Zamanında, emniyetten ödün vermeden hizmet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Block 3-->
                            <div class="col-lg-4 col-md-6  site-bg-black">
                                <div class="help-block-content white">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="wt-icon-box-sm">
                                            <span class="icon-cell site-bg-dark"><i class="flaticon-antivirus"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte">Profesyonel Hizmet</h4>
                                            <p>Tecrübeli ekipler ve profesyonel hizmet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                        </div>
                    </div>
                </div>
            </div>
            <!-- CLIENT LOGO  SECTION End -->
  

  
 <div class="section-full half-section-outer-1  bg-white">
                <div class="half-section-top p-t120 site-bg-primary" style="background-image:url(images/background/bg-dott3.png);">
                    <div class="container">
                        <div class="wt-separator-two-part when-bg-dark">
                            <div class="row wt-separator-two-part-row">
                                <div class="col-lg-6 col-md-12 wt-separator-two-part-left">
                                    <!-- TITLE START-->
                                    <div class="section-head left wt-small-separator-outer">
                                        <div class="wt-small-separator">
                                            <div class="sep-leaf-left"></div>
                                            <div>Flow Mekanik</div>
                                        </div>
                                        <h2 class="wt-title">Hizmetlerimiz</h2>
                                    </div>
                                    <!-- TITLE END-->
                                </div>

                                
                                <div class="col-lg-6 col-md-12 wt-separator-two-part-right">
                                    <p class="p_discription">Isıtma-Soğutma Sistemleri
Yangından Korunma Sistemleri
Havalandırma Sistemleri
Doğalgaz Sistemleri
Endüstriyel Mekanik
Sıhhi Tesisat
Gibi sistemlerin uzman kadroyla projelendirilmesi, uygulanması ve periyodik bakım onarım faaliyetlerini gerçekleştirerek sektördeki boşluğu doldurarak önemli bir fark yaratmıştır.</p>
                                    <a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz" class="site-button-secondry sb-bdr-light">Hizmetlerimiz</a>
                                </div>
                                                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="half-section-bottom">
                    <div class="container">
                        <div class="section-content">     
                            <div class="owl-carousel service-slider-one m-b30">
                                <!-- COLUMNS 1 --> 
									
									
									    <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 	<div class="item">
                                <div class="project-box-style1">
                                    <div class="project-content">
                                        <div class="project-title">
                                            Flow mekanik 
                                        </div>
                                        <h4 class="project-title-large"><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h4>
                                    </div>
                                    <div class="project-media">
                                        <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                                    </div>
                                    <div class="project-view">
                                        <a class="  pic-long project-view-btn" href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"  >
                                        <i></i>    
                                        </a> 
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
              
            </div>   
           <!-- SERVICES SECTION END -->              


     
            <!-- OUR BLOG START -->
            <div class="section-full   p-b90 bg-white" style="    padding-bottom: 0px;" >
                <div class="half-section-top2 p-t120 site-bg-black bg-cover" style="background-image:url(images/background/map-bg-dark.png);">
                    <div class="container">
                        <div class="section-head center wt-small-separator-outer when-bg-dark">
                            <div class="wt-small-separator site-text-primary">
                                <div class="sep-leaf-left"></div>
                                <div>Flow Mekanik</div>                                
                            </div>
                            <h2 class="wt-title">Haberler</h2>
                        </div>
                    </div>
                </div>
                <div class="half-section-bottom2">
                    <div class="container">
                        <div class="section-content">
                            <div class="row d-flex justify-content-center">
                               
  <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 3");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                    <!--Block one-->
                                    <div class="blog-post blog-post-4-outer">
                                        <div class="wt-post-media wt-img-effect zoom-slow">
                                            <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt=""></a>
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
            </div>   
            <!-- OUR BLOG END -->

            <!-- CLIENT LOGO SECTION START -->
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
   <?php include("alt.php")?>    


</body>

</html>
