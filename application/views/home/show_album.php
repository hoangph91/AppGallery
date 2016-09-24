<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/home/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<h1 align="center">Albums</h1>
<div class="content">
        <div id="collection-list">
	        <?php foreach ($info as $item):?>
	            <a href="<?php echo base_url();?>index.php/home/showImage/<?php echo $item['id_album'];?>""><div class="image-item text-center" style="background-image:url(<?php echo base_url(). 'uploads/'.$item['image']?>);  width: 300px; height:300px;"> </div> </a>
	       <?php endforeach ;?>
       </div>
</div>
</body>
</html>