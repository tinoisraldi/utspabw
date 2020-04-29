<?php

session_start();

include_once("koneksi.php");


if(isset($_POST['registrasi'])){
    $con = koneksi::connect();
    $username =sanitizeString($_POST['username']);
    $email =sanitizeString($_POST['email']);
    $password =sanitizePassword($_POST['password']);

    if($username == "" || $email == "" || $password == ""){

        return;
    }

    if(!checkUserNameExists($con,$username)){
        echo "Username Already Exists";
        return;
    }

    if(!checkEmailExists($con,$email)){
        echo "Email Already Exists";
        return;
    }

    if(insertDetails($con,$username,$email,$password));
    {
        $_SESSION['username'] = $username;
        header("Location: indexsensus.php");
    }

}


function insertDetails($con,$username,$email,$password){

    $query = $con->prepare("
    
    INSERT INTO user (username,email,password)

    VALUES(:username,:email,:password)

    ");

    $query->bindParam(":username",$username);
    $query->bindParam(":email",$email);
    $query->bindParam(":password",$password);

    return $query->execute();

}





if(isset($_POST['login'])){
    $con = koneksi::connect();
    $username =sanitizeString($_POST['username']);
    $password =sanitizePassword($_POST['password']);

    if($username == "" || $password == ""){

        return;
    }


    if(checkLogin($con, $username, $password))
    {
        $_SESSION['username'] = $username;
        header("Location: indexsensus.php");
    }
    else{
        echo "username atau password salah";
    }
}

function checkLogin($con,$username,$password){

    $query = $con->prepare("
    
    SELECT * FROM user WHERE username=:username AND password=:password

    ");

    $query->bindParam(":username",$username);
    $query->bindParam(":password",$password);

    $query->execute();


    if($query->rowCount() == 1){
        return true;
    }else{
        return false;
    }
}






if(isset($_POST['tambah'])){
    $con = koneksi::connect();
    $kodebuku = $_POST['kodebuku'];
    $judulbuku =$_POST['judulbuku'];
    $pengarang =$_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahunterbit =$_POST['tahunterbit'];
    $tglpinjam =$_POST['tglpinjam'];
    
    $sql= "INSERT INTO buku (kodebuku,judulbuku,pengarang,penerbit,tahunterbit,tglpinjam) 
    
    VALUES(:kodebuku,:judulbuku,:pengarang,:penerbit,:tahunterbit,:tglpinjam)";

    $query = $con->prepare($sql);

    $query->bindParam(":kodebuku",$kodebuku);
    $query->bindParam(":judulbuku",$judulbuku);
    $query->bindParam(":pengarang",$pengarang);
    $query->bindParam(":penerbit",$penerbit);
    $query->bindParam(":tahunterbit",$tahunterbit);
    $query->bindParam(":tglpinjam",$tglpinjam);

    $query->execute();

    $lastInsertId = $con->lastInsertId();

    if($lastInsertId){

        echo "<script>alert('Data berhasil ditambahkan');</script>";

        echo "<script>window.location.href='tambahdata.php'</script>";

    }else{

        echo "<script>alert('penambahan gagal, silakan ulang lagi');</script>";

        echo "<script>window.location.href='tambahdata.php'</script>";

    }
}


// if(isset($_POST['edit'])){
//     $con = koneksi::connect();
//     $id = intval($_GET['id']);
//     $nama = $_POST['nama'];
//     $kodebuku = $_POST['kodebuku'];
//     $judulbuku =$_POST['judulbuku'];
//     $pengarang =$_POST['pengarang'];
//     $penerbit = $_POST['penerbit'];
//     $tahunterbit =$_POST['tahunterbit'];
//     $tglpinjam =$_POST['tglpinjam'];
//     $tglkembali =$_POST['tglkembali'];
    
//     $sql= "UPDATE buku SET nama= '$nama',kodebuku= '$kodebuku',judulbuku= '$judulbuku',pengarang= '$pengarang',
//     penerbit= '$penerbit',tahunterbit= '$tahunterbit',tglpinjam= '$tglpinjam',tglkembali= '$tglkembali'    
//     WHERE id='$id";

//     $query = $con->prepare($sql);

//     $query->bindParam(":nama",$nama);
//     $query->bindParam(":kodebuku",$kodebuku);
//     $query->bindParam(":judulbuku",$judulbuku);
//     $query->bindParam(":pengarang",$pengarang);
//     $query->bindParam(":penerbit",$penerbit);
//     $query->bindParam(":tahunterbit",$tahunterbit);
//     $query->bindParam(":tglpinjam",$tglpinjam);
//     $query->bindParam(":tglkembali",$tglkembali);
//     $query->bindParam(":id",$id);

//     $query->execute();

//     echo "<script>alert('Edit Berhasil');</script>";

//     echo "<script>window.location.href='databuku.php'</script>";
// }





function sanitizeString($string){

    $string = strip_tags($string);

    $string = str_replace(" "," ",$string);

    return $string;
}

function sanitizePassword($string){

    $string = md5($string);

    return $string;
}





function checkUserNameExists($con,$username){

    $query = $con-> prepare("
    
    SELECT * FROM user WHERE username=:username

    ");

    $query->bindParam(":username",$username);

    $query->execute();

    if($query->rowCount() == 1){
        return false;
    }else{
        return true;
    }
}

function checkEmailExists($con, $email){

    $query = $con-> prepare("
    
    SELECT * FROM user WHERE email=:email

    ");

    $query->bindParam(":email",$email);

    $query->execute();

    if($query->rowCount() == 1){
        return false;
    }else{
        return true;
    }
}

?>