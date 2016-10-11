<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/home/css/style.css">
	
    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
   <script language="javascript" src="<?php echo base_url();?>Jquery/app.js"></script>
  <style type="text/css">
    .nav .open>a, .nav .open>a:focus, .nav .open>a:hover{
          background-color: white;
    }
    .affix {
          top: 0;
          width: 100%;
           z-index:1;
    }

    .affix + .container-fluid {
          padding-top: 70px;
    }
  </style>
</head>
<body>

<!--start cover image-->
<div class="container-fluid" style="height: 665px; padding:0;">
  <div class="cover">
  	<?php
  	$count = 0; 
  	foreach($info as $item):
  	?>
  		<div id="image-cover" style="background-image:url(<?php echo base_url(). 'uploads/'.$item['image']?>); width: 1349px; height: 665px;">

  			<div class="text-cover">
  				<div class="back-home">
  					<a href="#" id="back-link">
  						LEEKAPHOTO
  					</a>
  				</div>
  				<div class="name-album">
  					<h1 class="name">LITTLE VENICE</h1>
  				</div>
  				<div class="view-photto">
  					<a href="#" style="padding: 5px 0; letter-spacing: 2px; text-decoration: none;" id="link-view">
  						VIEW PHOTOS
  					</a>
  				</div>
  			</div>
  		</div>

  	<?php 
  		$count++;
  		if($count < 2){
  			break;
  		}
  		endforeach;
  		?>
  </div>
</div>


<!--end cover-->
<!--Start Menu-->
<div class="container-fluid"  style="padding:0; background-color: white;" data-spy="affix" data-offset-top="700" id="menu"> 
  <nav class="navbar" >
  <div class="container-fluid">
    <div class="navbar-header " >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a id="link-album" href="#">
        <h1 class="link-name">LITTLE VENICE</h1>
      </a>
      <a  href="#" id="link-leek">LEEKAPHOTO</a>
    </div>

    <div class="collapse navbar-collapse" >
      <ul class="nav navbar-nav navbar-right" >
         <li>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Favorites" id="heart">
              <span class="glyphicon glyphicon-heart" style="font-size: 18px;"></span>
            </a>
          </li>
        <li>
         <a href="#" data-toggle="tooltip" data-placement="bottom" title="Download" id="download">
          <span class="glyphicon glyphicon-download-alt" style="font-size: 18px;">
            
          </span>
         </a>
        </li>
         <li class="dropdown">
           <a  href="#" class="dropdown-toggle" data-toggle="dropdown" id="share-menu">
             SHARE
             <span class="caret"></span>
           </a>
           <ul class="dropdown-menu" id="share-world">
              <li>
                  <a href="#" class="active" id="share-facebook"> 
                     <i class="fa fa-facebook-square fa-lg"></i>                Facebook
                  </a>
              </li>
              <li>
                  <a href="#" id="share-twitter">
                      <i class="fa fa-twitter-square fa-lg"></i>  
                      Twitter
                  </a>
              </li>
              <li>
                  <a href="#" id="share-print">
                      <i class="fa fa-pinterest-square fa-lg"></i>
                      Pinterest
                  </a>
              </li>
              <li>
                    <a href="#" id="share-google">
                      <i class="fa fa-google-plus-square fa-lg"></i>
                      Google+
                    </a>
              </li>

              <li>
                    <a href="#" id="share-email">
                      <i class="fa fa-envelope-square fa-lg"></i>
                      Email
                    </a>
              </li>
           </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<!-- End menu-->
<!--Start show image-->
<div class="container-fluid" style=" margin-right: 25px; position: relative;" id="demo">
  <div class="row">
     <?php foreach ($info as $item):?>
                 <div class="col-sm-3" class="text-center">
                      <div   class="image-item text-center" style="background-image:url(<?php echo base_url(). 'uploads/'.$item['image']?>);  width: 321px; height:214px;">

                        <a href="#"  class="btn-heart">
                               <i class="fa fa-heart fa-fw"></i>
                        </a>
                        <div class="share-hover">
                            <a href="#" class="btn-share">
                              <i class="fa fa-share fa-fw"></i>
                            </a>


                            <div class="share-list">
                            <a href="#" class="btn-face">
                              <i class="fa fa-fw fa-facebook-square"></i>
                            </a>

                            <a href="#" class="btn-twitter">
                              <i class="fa fa-fw fa-twitter-square"></i>
                            </a>

                            <a href="#" class="btn-print">
                              <i class="fa fa-fw fa-pinterest-square"></i>
                            </a>

                            <a href="#" class="btn-google">
                             <i class="fa fa-fw fa-google-plus-square"></i>
                            </a>

                            <a href="#" class="btn-email">
                              <i class="fa fa-fw fa-envelope-square"></i>
                            </a>
                        </div>
                        </div>
                        
                      </div>
                 </div>
             <?php endforeach ;?>  
</div>
<!--End show image-->
<!--show full Images-->
<div id="divShow" style="max-width:100%">
    <div class="after-show">
       <nav class="navbar" style="left: 40%;">
          <div class="menu">
            <ul class="nav navbar-nav">
              <li class="dropdown">
               <a  href="#" class="dropdown-toggle" data-toggle="dropdown" id="share-show">
                <i class="fa fa-share fa-fw"></i>
                 <span>Share</span>
                 <span class="caret"></span>
               </a>
               <ul class="dropdown-menu" id="share-world">
                  <li>
                      <a href="#" class="active" id="share-facebook"> 
                         <i class="fa fa-facebook-square fa-lg"></i>                Facebook
                      </a>
                  </li>
                  <li>
                      <a href="#" id="share-twitter">
                          <i class="fa fa-twitter-square fa-lg"></i>  
                          Twitter
                      </a>
                  </li>
                  <li>
                      <a href="#" id="share-print">
                          <i class="fa fa-pinterest-square fa-lg"></i>
                          Pinterest
                      </a>
                  </li>
                  <li>
                        <a href="#" id="share-google">
                          <i class="fa fa-google-plus-square fa-lg"></i>
                          Google+
                        </a>
                  </li>

                  <li>
                        <a href="#" id="share-email">
                          <i class="fa fa-envelope-square fa-lg"></i>
                          Email
                        </a>
                  </li>
               </ul>
              </li>
              
              <li>
                <a href="#" id="slide-show">
                   <i class="fa fa-play"></i>
                   <span>Slideshow</span>
                </a>
              </li>
              <li>
                <a href="#" id="like-show">
                <i class="fa fa-heart"></i>
                <span>Favorite</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
    <i id="btn-close" class="material-icons" style="font-size:30px;">close</i>
    <i id="btn-left" class="fa fa-angle-left" style="font-size:48px;"></i>
    <i id="btn-right" class="fa fa-angle-right" style="font-size:48px;"></i>
    <div id="showImage" style="max-width:100%"></div>
</div>
<!--End show full images-->    
<script type="text/javascript">
    $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip();
    });
    //back to top
    $(document).ready(function(){
        $(".btn-back").click(function(){
            $("body").animate(
              {scrollTop: $("#demo").position().top},600);
            //return false;
        });
    });
</script>
<!--Back to top-->
<div class="back-top">
  <a href="#" class="btn-back" style="text-decoration: none; color: white;">
    BACK TO TOP
  </a>
</div>
<!--End back to top-->
<!--Start Footer-->
<footer class="footer">
  <p class="power-by">
    Powered by 
    <a href="#" target="_blank" rel="noopener noreferrer" class="link-pix" style="text-decoration: none;">Pixieset</a>
  </p>
</footer>
<!--End Footer-->
</div>
</body>
</html>