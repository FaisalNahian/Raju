<?php 
session_start();
$_SESSION['gc_amount'] = $amount;
$_SESSION['shipping'] = $shippingcost;
include("includes/html-codes.php");
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>gift - Truth + Beauty Spa</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="humans.txt">
  
  <link rel="shortcut icon" href="../favicon.png" type="image/x-icon" />
  
  <!--Facebook Metadata /-->
  <meta property="fb:page_id" content="" />
	<meta property="og:image" content="http://truthandbeautyspa.com/img/truth-and-beauty-spa_social.png" />
	<meta property="og:description" content="Advanced Skin Solutions, Beauty Biology and Correct Maintenance. Truth + Beauty enables your skin to generate younger cells both inside and out."/>
	<meta property="og:title" content="Truth+Beauty Spa"/>
  
  <!--Google+ Metadata /-->
	<meta itemprop="name" content="Truth+Beauty Spa">
	<meta itemprop="description" content="Advanced Skin Solutions, Beauty Biology and Correct Maintenance. Truth + Beauty enables your skin to generate younger cells both inside and out.">
	<meta itemprop="image" content="http://truthandbeautyspa.com/img/truth-and-beauty_logo.png">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  <link rel="stylesheet" href="../css/trubu.css">
  <link rel="stylesheet" href="../css/socialize-bookmarks.css">
  
  <!--[if IE]>
	<link rel="stylesheet" type="text/css" href="css/trubu-all-ie.css" />
<![endif]-->
  
  <script src="../js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body id="gift">
	<div class="container">
    <header id="top-header">
            <a class="logo" href="index.php" title="Truth + Beauty - Skin Brilliance"><img src="img/truth-and-beauty_logo.png" alt="Truth + Beauty - Skin Brilliance"></a>
            
            <?php navCode(); ?>
            <div style="clear:both"></div>
       </header>
  	<div id="canvas">
       <img src="../img/blue.jpeg" class="bg" />
        <section class="row first-child">
            <div class="logobox columns">
                <a class="logo" href="../index.php" title="Truth + Beauty - Skin Brilliance">
                  <!-- <img src="../img/truth-and-beauty_logo.png" alt="Truth + Beauty - Skin Brilliance" width="" height=""> -->
                </a>
            </div> 
        </section>
        
        <section class="row"> 
            
             <div class="eight columns push_four">
                <h1>a true gift</h1>
             </div>
         </section>    
         
        
        <section class="row">
            <div class="four columns push_four">
            	
                
        		<h2>share the gift of beauty</h2>
              
					<p>Indulge the special people in your life with a gift they'll truly enjoy! Available in denominations starting at $25, Truth + Beauty Gift Cards can be redeemed for spa services or gift items from our boutique. Gift Cards come beautifully wrapped in our signature Truth + Beauty gift bag.  </p>
                    
                    <p>Simply select the amount and click "Continue" or call us at (516) 625-7000.</p>
                
                <form action="sim_gc.php" method="post" id="checkout">
                <input type="hidden" name="shipping" id="shipping" value="5.80">
                <select size="1" name="gc_amount" id="gc_amount" class="SizeText">
<option value="25">25 Dollars</option>
<option value="50">50 Dollars</option>
<option value="75">75 Dollars</option>
<option value="100">100 Dollars</option>
<option value="125">125 Dollars</option>
<option value="150">150 Dollars</option>
<option value="175">175 Dollars</option>
<option value="200">200 Dollars</option>
<option value="250">250 Dollars</option>
<option value="300">300 Dollars</option>
<option value="400">400 Dollars</option>
<option value="500">500 Dollars</option>
<option value="600">600 Dollars</option>
<option value="700">700 Dollars</option>
<option value="800">800 Dollars</option>
<option value="900">900 Dollars</option>
<option value="1000">1000 Dollars</option>
</select>
<div class="clearfix"> </div>
<!-- ################################### -->
				<input type='submit' class="primary button medium"  value="Contine to next step">
               
                </form>
                   

			</div>
            
            <div class="four columns">
            	<img src="../img/gift-cards_truth_and_beauty.jpg" alt="truth + beauty gift cards - Purchase now!" />
             

			</div>
            
            
            
      </section>
         
        <section class="row">
            <div class="eight columns push_four">
            	
            

			</div>
            
            
            
            
            
      </section>
        
  </div> <!--! end of #canvas -->
  </div> <!--! end of #container -->
	 <?php footerCode(); ?>
    
         
         
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>  <script src="../js/libs/gumby.js"></script>
  <script src="../js/plugins.js"></script>
  <script src="../js/main.js"></script>
  <!-- end scripts-->
	

  <!-- Prompt IE 6 users to install Chrome Frame. We suggest that you not support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
  <!-- Social Widget Rendering Javascript /-->
  <script src="http://platform.twitter.com/widgets.js"></script>
  <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
  
  <script type="text/javascript">
    (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = 'https://apis.google.com/js/plusone.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
  </script>
  <!-- End Social Widget Rendering Javascript /-->
  
 <script>
    var _gaq=[['_setAccount','UA-33673378-1'],['_setDomainName', 'truthandbeautyspa.com'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  
</body>
</html>
