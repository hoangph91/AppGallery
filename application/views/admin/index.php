<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
            table {
               // border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color:#f2f2f2}

            th {
                background-color: #778899;
                color: white;
            }
            img{
                width: 200px;
                height:150px; 
            }
    </style>
</head>
<body>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="list_cate" class="list">
    <tr>
         <td colspan="6" align="center"><a href="<?php echo base_url(); ?>index.php/user/add">List Images</a><br /></td>
     </tr>
    <tr>
        <th width="20">STT</th>
        <th width="30">Name Album</th>
        <th width="80">Image</th>
        <th width="10">Add</th>
        <th width="10">Edit</th>
        <th width="10">Delete</th>
    </tr>
     
    <tr>
        <?php
            $stt=0;
            foreach($info as $item){
                $stt++;
                echo "<tr>";
                    echo "<td>$stt</td>";
                    echo "<td>". $item["name_album"]."</td>";
                    echo "<td>" . "<img src=" .base_url()."uploads/". $item["image"] .">". "</td>";
                    echo "<td><a href=".base_url()."index.php/admin/add_image>Add</a></td>";
                    echo "<td><a href=".base_url()."index.php/admin/editImage/$item[id]>Edit</a></td>";
                    echo "<td><a href=".base_url()."index.php/admin/deleteImage/$item[id]  onclick='return xacnhan();'>Delete</a></td>";
                echo "</tr>";
                     
            }
        ?>
    </tr>
     <tr>
         <td colspan="6" align="center">Có tổng cộng <?php echo $total_image; ?> Image<br /></td>
     </tr>
      
     
</table>

</body>
</html>
