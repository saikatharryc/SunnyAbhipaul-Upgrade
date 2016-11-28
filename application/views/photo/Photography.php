<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Sunny and abhi paul Photography is a joint venture of two person sunny and abhi, and who are the photographers.">
    <meta name="keywords" content="Photo,Photography,Sunny,abhi paul,Sunny and abhi paul photography,photoshoot,BIT,Event photoshoot,Nature photo,Abstract photo,model photoshoot,new born baby photoshoot">
<title font-family: Galada, Roboto;>Sunny & Abhi Paul Photography</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->

<?= link_tag('assets/bootstrap/css/bootstrap.min.css')?>
<!-- animate.css -->
<?= link_tag('assets/animate/animate.css')?>
<?= link_tag('assets/animate/set.css')?>

<!-- gallery -->
<?= link_tag('assets/gallery/blueimp-gallery.min.css')?>
<!-- favicon -->
<?= link_tag('images/bg1.jpg')?>
<link rel="icon" href="images/bg1.jpg" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="<?= base_url('images/logo.png') ?>" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#home">Home</a></li>
                 <li ><a href="#about">About</a></li>
                 <li ><a href="#works">Works</a></li>
                 <li ><a href="#contact">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->




<div id="home">
<!-- Slider Starts -->
<div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">     
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
    <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'back1'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic1 = $row['userPic'];
      
     
    } 
    $u1 = $userpic1;
    ?>
          <img src="<?= base_url(); ?>images/<?= $u1 ?>" alt="banner">
          </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
           <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'back2'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic2 = $row['userPic'];
      
     
    } 
    $u2 = $userpic2;
    ?>
          <img src="<?= base_url(); ?>images/<?= $u2 ?>" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
            <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'back3'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic3 = $row['userPic'];
      
     
    } 
    $u3 = $userpic3;
    ?>
         <img src="<?= base_url(); ?>images/<?= $u3 ?>" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
                   <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'back4'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic4 = $row['userPic'];
      
     
    } 
    $u4 = $userpic4;
    ?>
          <img src="<?= base_url(); ?>images/<?= $u4 ?>" alt="banner">
        </div>
       </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left"></i></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon-chevron-right"><i class="fa fa-angle-right"></i></span></a>
    </div>
<!-- #Slider Ends -->
</div>









<!-- Cirlce Starts -->
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Sunny & Abhi Paul Photography</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa fa-camera-retro"></i> Introduction </h4>
    <p>We are Born to shoot. OOps... Nope..its not what you are thinking.
      its nothing but a photoshoot. we provide outdoor photoshoot as well as indoor shoot.
        and in other hand weadding,Events,Baby ,Family photo ETC.<mark>Sometime we organise popular photoshoot contest too. So keep following our facebook page for newest update. When the contest will be organised we will just put up notice on our page and also in this website.</mark><br>We Thanking you! for your kind attention.</p>
    

  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4><i class="fa fa-coffee"></i> Passion</h4>
 <mark><abbr> <p>This photography is our love. and we fall into it wehenevr we capture the odd,abstruct,Beauty,Crazy.<br>
     its Becomes our passion. and the photography is our Blood.</p> </abbr>  </mark> 
  </div>
  </div>

  <div class="services">
  <h3 class="text-center wowload fadeInUp">Services</h3>
	<ul class="row text-center list-inline  wowload bounceInUp">
   		<li>
            <span><i class="fa fa-camera-retro"></i><b>Photography</b></span>
        </li>
        <li>
            <span><i class="fa fa-umbrella"></i><b>Travel | Nature</b></span>
        </li>        
        <li>
            <span><i class="fa fa-heart-o"></i><b>Wedding</b></span>
        </li>
        <li>
            <span><i class="fa fa-child"></i><b>Baby</b></span>
        </li>  
  	</ul>
  </div>
</div>
<!-- #Cirlce Ends -->

<!-- works -->
<div id="works"  class=" clearfix grid"> 
    <figure class="effect-oscar  wowload fadeInUp">
         <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port1'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic11 = $row['userPic'];
      
     
    } 
    $u11 = $userpic11;
    ?>
        <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port12'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic112 = $row['userPic'];
      
     
    } 
    $u112 = $userpic112;
    ?>
        <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port13'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic113 = $row['userPic'];
      
     
    } 
    $u113 = $userpic113;
    ?>
        <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port14'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic114 = $row['userPic'];
      
     
    } 
    $u114 = $userpic114;
    ?>
        <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port15'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic115 = $row['userPic'];
      
     
    } 
    $u115 = $userpic115;
    ?>
        
        
        <img src="<?= base_url(); ?>images/<?= $u11 ?>" alt="img01"/>
        <figcaption>
            <h2>Nature</h2>
            <p>Love Nature Love yourself<br>
            <a href="<?= base_url(); ?>images/<?= $u11 ?>" title="Its Nature" data-gallery>view full size</a>
                <a href="<?= base_url(); ?>images/<?= $u112 ?>" title="Its Nature" data-gallery />
                 <a href="<?= base_url(); ?>images/<?= $u113 ?>" title="Its Nature" data-gallery />
                 <a href="<?= base_url(); ?>images/<?= $u114 ?>" title="Its Nature" data-gallery />
                <a href="<?= base_url(); ?>images/<?= $u115 ?>" title="Its Nature" data-gallery ></a>
            </p>
        </figcaption>
    </figure>
    
     <figure class="effect-oscar  wowload fadeInUp">
                <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port2'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic12 = $row['userPic'];
      
     
    } 
    $u12 = $userpic12;
    ?>
                     <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port22'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic122 = $row['userPic'];
      
     
    } 
    $u122 = $userpic122;
    ?>
                     <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port23'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic123 = $row['userPic'];
      
     
    } 
    $u123 = $userpic123;
    ?>
                     <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port24'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic124 = $row['userPic'];
      
     
    } 
    $u124 = $userpic124;
    ?>
                     <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port25'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic125 = $row['userPic'];
      
     
    } 
    $u125 = $userpic125;
    ?>
         
         
         
        <img src="<?= base_url(); ?>images/<?= $u12 ?>" alt="img01"/>
        <figcaption>
            <h2>Events</h2>
            <p>Events are memorable, Capture it for future.<br>
            <a href="<?= base_url(); ?>images/<?= $u12 ?>" title="Events/Wedding/Baby/Family etc." data-gallery>view full size</a>
            <a href="<?= base_url(); ?>images/<?= $u122 ?>" title="Events/Wedding/Baby/Family etc." data-gallery />
                <a href="<?= base_url(); ?>images/<?= $u123 ?>" title="Events/Wedding/Baby/Family etc." data-gallery />
                <a href="<?= base_url(); ?>images/<?= $u124 ?>" title="Events/Wedding/Baby/Family etc." data-gallery />
                <a href="<?= base_url(); ?>images/<?= $u125 ?>" title="Events/Wedding/Baby/Family etc." data-gallery></a>
            </p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
         
             <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port3'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic13 = $row['userPic'];
      
     
    } 
    $u13 = $userpic13;
    ?>
         
   <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port32'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic132 = $row['userPic'];
      
     
    } 
    $u132 = $userpic132;
    ?>
          <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port33'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic133 = $row['userPic'];
      
     
    } 
    $u133 = $userpic133;
    ?>
          <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port34'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic134 = $row['userPic'];
      
     
    } 
    $u134 = $userpic134;
    ?>
          <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port35'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic135 = $row['userPic'];
      
     
    } 
    $u135 = $userpic135;
    ?>
         
         
        <img src="<?= base_url(); ?>images/<?= $u13 ?>" alt="img01"/>
        <figcaption>
            <h2>Street Photoshoot</h2>
            <p>The actual Image of Nation<br>
            <a href="<?= base_url(); ?>images/<?= $u13 ?>" title="Street Photos" data-gallery>view full size</a>
                <a href="<?= base_url(); ?>images/<?= $u132 ?>" title="Street Photos" data-gallery />
             <a href="<?= base_url(); ?>images/<?= $u133 ?>" title="Street Photos" data-gallery />
                                <a href="<?= base_url(); ?>images/<?= $u134 ?>" title="Street Photos" data-gallery />
                <a href="<?= base_url(); ?>images/<?= $u135 ?>" title="Street Photos" data-gallery></a>
            
            
            </p>            

                      
        </figcaption>
    </figure>
    
    
     <figure class="effect-oscar  wowload fadeInUp">
         
         
                  <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port4'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic14 = $row['userPic'];
      
     
    } 
    $u14 = $userpic14;
    ?>
                         <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port42'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic142 = $row['userPic'];
      
     
    } 
    $u142 = $userpic142;
    ?>
                          <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port43'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic143 = $row['userPic'];
      
     
    } 
    $u143 = $userpic143;
    ?>
                          <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port44'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic144 = $row['userPic'];
      
     
    } 
    $u144 = $userpic144;
    ?>
                          <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port45'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic145 = $row['userPic'];
      
     
    } 
    $u145 = $userpic145;
    ?>
         
        <img src="<?= base_url(); ?>images/<?= $u14 ?>" alt="img01"/>
        <figcaption>
            <h2>Abstract</h2>
            <p>This reveals Visual language<br>
            <a href="<?= base_url(); ?>images/<?= $u14 ?>" title="Abstract" data-gallery>view full size</a>
                 <a href="<?= base_url(); ?>images/<?= $u142 ?>" title="Abstract" data-gallery />
             <a href="<?= base_url(); ?>images/<?= $u143 ?>" title="Abstract" data-gallery />
             <a href="<?= base_url(); ?>images/<?= $u144 ?>" title="Abstract" data-gallery />
                 <a href="<?= base_url(); ?>images/<?= $u145 ?>" title="Abstract" data-gallery></a>
            </p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
         
         
                       <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port5'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic15 = $row['userPic'];
      
     
    } 
    $u15 = $userpic15;
    ?>
                        <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port51'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic151 = $row['userPic'];
      
     
    } 
    $u151 = $userpic151;
    ?>     
         <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port52'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic152 = $row['userPic'];
      
     
    } 
    $u152 = $userpic152;
    ?>     
         <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port53'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic153 = $row['userPic'];
      
     
    } 
    $u153 = $userpic153;
    ?>     
         <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port54'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic154 = $row['userPic'];
      
     
    } 
    $u154 = $userpic154;
    ?>     
         
         
        <img src="<?= base_url(); ?>images/<?= $u15 ?>" alt="img01"/>
        <figcaption>
            <h2>Model</h2>
            <p>Representing . . .<br>
            <a href="<?= base_url(); ?>images/<?= $u15 ?>" title="Model" data-gallery>
                view full size</a> 
                <a href="<?= base_url(); ?>images/<?= $u151 ?>" title="Model" data-gallery />
                <a href="<?= base_url(); ?>images/<?= $u152 ?>" title="Model" data-gallery />
                <a href="<?= base_url(); ?>images/<?= $u153 ?>" title="Model" data-gallery />
                <a href="<?= base_url(); ?>images/<?= $u154 ?>" title="Model" data-gallery></a>
                     
                  </p>

        </figcaption>
    </figure>
     
     <figure class="effect-oscar  wowload fadeInUp">
         
          <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port6'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic16 = $row['userPic'];
      
     
    } 
    $u16 = $userpic16;
    ?>
          <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port62'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic162 = $row['userPic'];
      
     
    } 
    $u162 = $userpic162;
    ?>
          <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port63'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic163 = $row['userPic'];
      
     
    } 
    $u163 = $userpic163;
    ?>
          <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port64'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic164 = $row['userPic'];
      
     
    } 
    $u164= $userpic164;
    ?>
          <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'port65'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic165 = $row['userPic'];
      
     
    } 
    $u165 = $userpic165;
    ?>
         
         
         
        <img src="<?= base_url(); ?>images/<?= $u16 ?>" alt="img01"/>
        <figcaption>
            <h2>Vintage</h2>
            <p>Vintage style is the Best, It teaches Many things<br>
            <a href="<?= base_url(); ?>images/<?= $u16 ?>" title="Vintage" data-gallery>view full size</a>
            <a href="<?= base_url(); ?>images/<?= $u162 ?>" title="Vintage" data-gallery />
                <a href="<?= base_url(); ?>images/<?= $u163 ?>" title="Vintage" data-gallery />
                <a href="<?= base_url(); ?>images/<?= $u164 ?>" title="Vintage" data-gallery />
                <a href="<?= base_url(); ?>images/<?= $u165 ?>" title="Vintage" data-gallery></a>
            </p>            
        </figcaption>
    </figure>
 
    

     
</div> 

    <div>
    
<!-- team -->
<h3 class="text-center  wowload fadeInUp">Our team</h3>
<p class="text-center  wowload fadeInLeft">Our creative team that is making everything possible</p>
<div class="row grid team  wowload fadeInUpBig">	
     <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        
        <img src=""  class="img-rounded"/>
        
    </figure>
    </div>
    
    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'avi'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic21 = $row['userPic'];
      
     
    } 
    $u21 = $userpic21;
    ?>
        <img src="<?= base_url(); ?>images/<?= $u21 ?>" alt="avi" class="img-rounded"/>
        <figcaption>
            <p><b>Abhishek Paul</b><br>PhotoGrapher<br><br><a href="https://www.facebook.com/abhishek.paul.5076"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>            
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
          <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'laha'");
       

    foreach ($query->result_array() as $row)
{
    
  
   $userpic22 = $row['userPic'];
      
     
    } 
    $u22 = $userpic22;
    ?>
        <img src="<?= base_url(); ?>images/<?= $u22 ?>" alt="sunny" class="img-rounded"/>
        <figcaption>            
            <p><b>Sayantan Laha Sunny</b><br>PhotoGrapher & Designer<br><br><a href="https://www.facebook.com/sayantan.laha.14"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>            
        </figcaption>
    </figure>
    </div>

    
 
</div>
<!-- team -->

</div>













<!--Contact Starts-->
<!-- <div id="contact" class="spacer">

<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">Get in touch to start your PhotoShoot</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Company">
        <textarea rows="5" placeholder="Message"></textarea>
        <button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
      </div>
  </div>



</div>
</div>   -->
<!--Contact Ends-->
    
    <div id="contact" class="spacer" >  
        <div class="text-center"><abbr><mark>Hello Visitor!<p>This Site is Still Under Development.</p>
            <p>&</p><p>For any type of Enquiry & Photoshooting</p>Reach to us as follows:</mark>
        
            <mark><p>abhi @ 9679771062 and Sunny - 7384446536</p></mark></abbr>
        </div>
    </div>



<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="https://www.facebook.com/abhiandsunnyphotography/"><i class="fa fa-facebook fa-2x"></i></a>  </p>
Copyright 2016 sunnyabhipaulphotography All rights reserved.<p><a href="http://saikat.cf">Developed by Saikat</a></p>
<!-- BEGIN: Powered by Supercounters.com -->
<center><script type="text/javascript" src="http://widget.supercounters.com/online_i.js"></script><script type="text/javascript">sc_online_i(1284378,"ffffff","121111");</script><br><noscript><a href="http://www.supercounters.com/">Free Online Counter</a></noscript>
</center>
<!-- END: Powered by Supercounters.com -->
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="<?=base_url('assets/jquery.js'); ?>"></script>

<!-- wow script -->
<script src="<?= base_url('assets/wow/wow.min.js'); ?>"></script>


<!-- boostrap -->
<script src="<?= base_url('assets/bootstrap/js/bootstrap.js'); ?>"></script>

<!-- jquery mobile -->
<script src="<?= base_url('assets/mobile/touchSwipe.min.js'); ?>"></script>
<script src="<?= base_url('assets/respond/respond.js'); ?>"></script>

<!-- gallery -->
<script src="<?= base_url('assets/gallery/jquery.blueimp-gallery.min.js'); ?>"></script>

<!-- custom script -->
<script src="<?= base_url('assets/script.js'); ?>"></script>

</body>
</html>