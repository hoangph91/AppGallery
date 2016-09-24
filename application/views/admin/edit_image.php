<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form action="<?php echo base_url()?>index.php/admin/editImage/<?php echo $info['id'] ?>" method="post" enctype="multipart/form-data">
 	<legend></legend>
 	<label>Choose Image:</label><br>
 	<input type="file"  name="file"><br>
 	<label>Choose Album</label>
 	<select name="name_album">

 		<?php foreach($album as $item):?>
 			<option  value="<?php echo $item['name_album']?>" <?php if($item['id_album'] == $info['id_album']) echo'selected';?>>
 			<?php echo $item["name_album"];?>
 			</option>
 		<?php endforeach ?>		 	

 	</select>
 	<br>
 	<input type="submit" name="submit" value="Add Image" class="btn">
 </form>
</body>
</html>