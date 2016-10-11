<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/home/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script language="javascript" src="<?php echo base_url();?>Jquery/app.js"></script>
    
</head>
<body>
<div id="collection-list">
            <?php foreach ($info as $item):?>
                <div class="" style="background-image:url(<?php echo base_url(). 'uploads/'.$item['image']?>);  width: 300px; height:300px;">
                 </div>
           <?php endforeach ;?>
</div>
<!--show full Images-->
    <div id="divShow" style="max-width:100%">
                <i id="btn-close" class="material-icons" style="font-size:30px;">close</i>
                <i id="btn-left" class="fa fa-angle-left" style="font-size:48px;"></i>
                <i id="btn-right" class="fa fa-angle-right" style="font-size:48px;"></i>
                <div id="showImage" style="max-width:100%"></div>
    </div>

</body>
</html>