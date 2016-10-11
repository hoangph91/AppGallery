<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/home/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>
<div class="row" style="margin-top: 60px">
    	        <?php foreach ($info as $item):?>
                 <div class="col-sm-4">
    	               <a href="<?php echo base_url();?>index.php/home/showImage/<?php echo $item['id_album'];?>">
                      <div class="image-item text-center" style="background-image:url(<?php echo base_url(). 'uploads/'.$item['image']?>);  width: 370px; height:250px;">
                      </div>
                      </a>
                 </div>
    	       <?php endforeach ;?>  
</div>       
                   
</body>
</html>