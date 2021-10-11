<?php require_once "controllerUserData-reseller.php"; ?>
<?php 
    $con = mysqli_connect("localhost","u705028021_loginsystem","Loginsystem321","u705028021_loginsystem");
//   session_start();
//     $id=$_SESSION['id'];
    $id=$_GET['id'];
    $query=mysqli_query($db,"SELECT * FROM reseller where id='$id'")or die(mysqli_error());
    $row=mysqli_fetch_array($query); 

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Edit Bio Reseller</title>
  </head>
  <body>
<header>
<div class="row" style="padding: 10px; box-shadow: 0 5px 5px silver;">
    <div class="col bg-green" style="padding: 10px;">
    <img src="https://oesman.id/wp-content/uploads/2020/08/OESMAN_logo-4.png" width="200px;" height="60px;">
    </div>
    <div class="col-8">
    </div>
    <div class="col text-center">
    <h5 style="line-height: 70px;"> <a href="edit-profil-reseller-test.php" style="text-decoration: none;">KEMBALI</a></h5>
    </div>
</div>

</header>
<main>

    <div class="text-center mt-5">
        <h1 style="font-weight: bold;">Selamat Datang <?php echo $fetch_info['name'] ?></h1>
        <h3> Silahkan Edit Bio Anda Dibawah Sini</h3>
    </div>

<div class="">
    <form action="" method="POST">
        <label for="">Username : </label>
        <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>">

        <label for="">Email : </label>
        <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">

        <label for="">Nama Lengkap : </label>
        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">

        <label for="">Nomor Telepon : </label>
        <input type="text" class="form-control" name="nomortelepon" value="<?php echo $row['nomortelepon'] ?>">

        <label for="">Alamat : </label>
        <input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat'] ?>">

        <button type="submit" name="submit">Update</button>

    </form>
</div>




<!-- table data start here --> 

    <!-- <div class="row mt-5">
        <div class="col">
                
        </div>
        <div class="col-10">
        <table class="table" style="box-shadow: 5px 5px 5px silver;">
            <thead class="table-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><?= $row["username"]; ?></td>
                <td><?= $row["email"]; ?></td> 
                <td><?= $row["name"];?></td>
                <td><?= $row["nomortelepon"];?></td>
                <td><?= $row["alamat"];?></td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="col">

        </div>
    </div> -->
</main>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html> 

<?php 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $nomortelepon = $_POST['nomortelepon'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE reseller SET username = '$username', email = '$email', name = '$name', nomortelepon = '$nomortelepon', alamat = '$alamat'";

    $result = mysqli_query($con, $query) or die (mysqli_error($con));

}





?>