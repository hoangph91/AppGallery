<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titlePage;?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/home/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="padding: 0px; max-width: 1170px;">
<!--Start header-->
<header class="header-page">
<!-- Form search Album-->
<div class="form-search">
	<form method="post" action="">
		<a href="#">
			<span class="glyphicon glyphicon-search" id="icon-search"></span>
		</a>
		<input type="text" name="search"  size="37" id="search" height="10"  placeholder="Search">
			
	</form>
</div>	
<!--end form search-->
</header>
<!--End header-->
<h1 class="logo">
    <a href="#" target="_blank" style="text-decoration: none;">LEEKAPHOTO
    </a>
</h1>
<div class="content">
	<?php $this->load->view($subview);?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!--Start Footer-->
<footer class="footer">
  <p class="copy-right">© LEEKAPHOTO</p>
  <p class="power-by">
  	Powered by 
  	<a href="#" target="_blank" rel="noopener noreferrer" class="link-pix" style="text-decoration: none;">Pixieset</a>
  </p>
</footer>
<!--End footer-->
<script type="text/javascript">
	$(document).ready(function(){
    $("#icon-search").click(function(){
        $("#search").show();
    })
});
</script>
</div>
</body>
</html>