<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($kon,"SELECT * FROM anggota ORDER BY id_anggota DESC");
?>
 
<html>
<head>    
  
</head>
 
<body>
<a href="form.php">kembali</a><br/><br/>
    <?php if(isset($_GET['success'])){ 
        echo 'Berhasil menyimpan data';
    } ?>
    <table width='80%' border=1>
 
    <tr>
        <th>Username</th>
         <th>nama</th> 
         <th>alamat</th> 
         <th>email</th> 
         <th>no_hp</th> 
         <th>password</th>
          <th>update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['alamat']."</td>"; 
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['no_hp']."</td>";
        echo "<td>".$user_data['password']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id_anggota]'>Edit</a> |
         <a href='delete.php?id=$user_data[id_anggota]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>