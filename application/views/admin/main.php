<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titlePage;?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/admin/css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script language="javascript">
            function xacnhan() {
                if (!window.confirm('You want delete user ?')) {
                    return false;
                }
            }
        </script>
</head>
<body>
<div class="container">
	<header>
		<h1> Admin System </h1>
	</header>

	<nav>
		<ul>
			<li><a href="<?php echo base_url(); ?>index.php/admin/add_image">Add Images</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/admin/add_album">Add Album</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/admin/list_album">List Album</a></li>
			<li><a href="#">Add User</a></li>
			<li><a href="#"></a></li>
		</ul>
	</nav>
	<article>
		<h2><?php $this->load->view($subview);?></h2>
	</article>
	<footer>Copyright © toanhvh.com</footer>
</div>
</body>
</html>