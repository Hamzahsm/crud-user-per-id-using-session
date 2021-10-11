<?php require_once "controllerUserData-reseller.php"; ?>
<?php 
// include auth_session.php file on all user panel pages
// $email = $_SESSION['email'] OR $_SESSION['name'];
// $password = $_SESSION['password'];
// if($email != false && $password != false){
//     $sql = "SELECT * FROM reseller WHERE email = '$email' OR name = '$email'";
//     $run_Sql = mysqli_query($con, $sql);
//     if($run_Sql){
//         $fetch_info = mysqli_fetch_assoc($run_Sql);
//         $status = $fetch_info['status'];
//         $code = $fetch_info['code'];  
//         if($status == "verified"){
//             if($code != 0){ 
//                 header('Location: reset-code-reseller.php');
//             } 
//         }else{
//             header('Location: user-otp-reseller.php');
//         }
//     }
// }else{
//     header('Location: super-admin.php');
// }

// $con = mysqli_connect("localhost","u705028021_loginsystem","Loginsystem321","u705028021_loginsystem");
// Check connection
// if (mysqli_connect_errno()){
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }
// function query($datas) {
//  global $con;
//  $result = mysqli_query($con, $datas); 
//  $datakosong = [];

//  while( $isidata = mysqli_fetch_assoc($result)) {
//      $datakosong[] = $isidata;
//  }

//  return $datakosong; 
// }

// $datas = query("SELECT * FROM reseller");
session_start();
$con = mysqli_connect("localhost","u705028021_loginsystem","Loginsystem321","u705028021_loginsystem");

$query = mysqli_query($con, "SELECT * FROM reseller");
$num_rows = mysqli_num_rows($query);
$row = mysqli_fetch_array($query)
$_SESSION["id"] = $row['id'];
if ($num_rows > 0) {
    echo "<script>Query Id Berhasil</script>"
}

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
    <h5 style="line-height: 70px;"> <a href="edit-profil-reseller.php" style="text-decoration: none;">KEMBALI</a></h5>
    </div>
</div>

</header>
<main>

    <div class="text-center mt-5">
        <h1 style="font-weight: bold;">Selamat Datang <?php echo $fetch_info['name'] ?></h1>
        <h3> Silahkan Edit Bio Anda Dibawah Sini</h3>
    </div>

<!-- table data start here -->

    <div class="row mt-5">
        <div class="col">
                
        </div>
        <div class="col-10">
        <table class="table" style="box-shadow: 5px 5px 5px silver;">
            <thead class="table-dark">
                <?php $i = 1; ?>
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
            <?php foreach($datas as $data) :?>
                <tr>
                <td><?= $i; ?></td>
                <td><?= $data["username"]; ?></td>
                <td><?= $data["email"]; ?></td> 
                <td><?= $data["name"];?></td>
                <td><?= $data["nomortelepon"];?></td>
                <td><?= $data["alamat"];?></td>
                </tr>
                <?php $i++;?>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
        <div class="col">

        </div>
    </div>
</main>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html> 