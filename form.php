<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Form Pendaftaran Mahasiswa</h2>
    <form action="simpan-pendaftaran.php" method="post">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan Username" />
        </div>
	<div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
        </div>
	<div class="form-group">
	     <label>Alamat:</label>
	     <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" ></textarea>
	</div> 
	<div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
        </div>
	<div class="form-group">
            <label>No HP:</label>
            <input type="number" name="no_hp" class="form-control" placeholder="Masukan No HP" />
        </div>
	<div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Masukan Password" />
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</body>
</html>