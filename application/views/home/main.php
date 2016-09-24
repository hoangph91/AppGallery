<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titlePage;?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/home/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
		<?php $this->load->view($subview);?>

	<footer>
		Copyright © toanhvh.com
	</footer>
</div>
</body>
</html>