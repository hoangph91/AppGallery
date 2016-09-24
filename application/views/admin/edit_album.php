<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="<?php echo base_url()?>index.php/admin/editAlbum/<?php echo $info['id_album'] ?>" enctype="multipart/form-data">
    <?php
        echo "<div class='mess_error'>";
        echo "<ul>";
            if(validation_errors() != ''){
                echo "<li>".validation_errors()."</li>";
            }
        echo "</ul>";
        echo "</div>";
    ?>
	<label>Name Album:</label><br>
	<input type="text" name="name_album" value="<?php echo $info['name_album']?>"><br>

	<input type="submit" name="sub_album" value="Add Album">
</form>
</body>
</html>