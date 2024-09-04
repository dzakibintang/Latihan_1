<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>REGISTER</h3>
    <form action="proses_register.php" method="post">
        Nama :
        <input type="varchar" name="Nama" value="" class="form-control">
        Nik : 
        <input type="varchar" name="Nik" value="" class="form-control">
        Alamat : 
        <textarea name="Alamat" class="form-control" rows="4"></textarea>
        Jenis_kelamin : 
        <select name="Jenis_kelamin" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        No_telp :
        <input type="varchar" name="No_tlp" value="" class="form-control">
        Jabatan :
        <select name="Jabatan_id" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_kelas=mysqli_query($config,"SELECT * FROM `Jabatan`");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';    
            }
            ?>
        </select>
        <input type="submit" name="simpan" value="Tambah Jabatan" class="btn btn-primary">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>