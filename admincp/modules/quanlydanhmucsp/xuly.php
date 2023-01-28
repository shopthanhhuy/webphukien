<?php 
include('../../config/config.php');
$tenloaisp =$_POST['tendanhmuc'];
$thutu =$_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    $sql_them= "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) value ('".$tenloaisp."','".$thutu."')";
    mysqli_query($mysqli,$sql_them);
    header('location:../../index.php?action=quanlydanhmucsanpham');
}elseif(isset($_POST['suadanhmuc'])){
}else{
    $id=$_GET['iddanhmuc'];
    $sql_xoa="DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header("location:../../index.php?action=quanlydanhmucsanpham");
}
?>