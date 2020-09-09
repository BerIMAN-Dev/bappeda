<?php
include 'inc/koneksi.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

// login
if (isset($_POST['login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $login  = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and password='$password'");
    $cek    = mysqli_num_rows($login);
    $data   = mysqli_fetch_assoc($login);

    $_SESSION['id_user']    = $data['id_user'];
    $_SESSION['nama']       = $data['nama'];
    $_SESSION['username']   = $data['username'];
    $_SESSION['password']   = $data['password'];

    if($cek > 0){
    
        if($data['level']=="admin"){
            $_SESSION['level']="admin";
            header('location:admin');
        }else if($data['level']=="kepala"){
            $_SESSION['level']="kepala";
            header('location:kepala');
        }else{
    
        }	
    }else{
    
    } 
}

if($_SESSION['level']=="admin"){
    header('location:admin');
}else if($_SESSION['level']=="kepala"){
    header('location:kepala');
}else{

}
?>