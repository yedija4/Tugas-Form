<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id_anggota = $_POST['id_anggota'];
	
	$username=$_POST['username'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $no_hp=$_POST['no_hp'];
    $password=$_POST['password'];
		
	// update user data
	$result = mysqli_query($kon, "UPDATE anggota SET username='$username',nama='$nama',alamat='$alamat',
    email='$email',no_hp='$no_hp',password='$password' WHERE id_anggota=$id_anggota");
	
	// Redirect to homepage to display updated user in list
	header("Location: riwayat.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_anggota = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($kon, "SELECT * FROM anggota WHERE id_anggota=$id_anggota");
 
while($user_data = mysqli_fetch_array($result))
{

    $username=$user_data['username'];
	$nama=$user_data['nama'];
	$alamat=$user_data['alamat'];
    $email=$user_data['email'];
    $no_hp=$user_data['no_hp'];
    $password=$user_data['password'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="form.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>username</td>
				<td><input type="text" name="username" value=<?php echo $username;?>></td>
			</tr>
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
            <tr> 
				<td>email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
            <tr> 
				<td>no_hp</td>
				<td><input type="text" name="no_hp" value=<?php echo $no_hp;?>></td>
			</tr>
            <tr> 
				<td>password</td>
				<td><input type="text" name="password" value=></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_anggota" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>