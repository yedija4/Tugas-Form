<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
 
<div class="container p-3 my-3 border">
<h1>Form Pendaftaran Mahasiswa</h1>

    <form action="simpan-pendaftaran.php" class="was-validated" method="post">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan Username" required/>
            <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
        </div>
  <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />
             
        </div>

  <div class="form-group">
       <label>Alamat:</label>
       <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" required></textarea>
  </div> 
  <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" required="" />
            <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Email not valid</div>
        </div>
  <div class="form-group">
            <label>No HP:</label>
            <input type="number" name="no_hp" class="form-control" placeholder="Masukan No HP" required="" />
        </div>
  <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Masukan Password" required="" />
            <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>


</div>
</body>
</html>