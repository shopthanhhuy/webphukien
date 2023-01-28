<div class="clear">
</div>
<div class="main">
    <?php
        if(isset($_GET['action']))
        {
            $click= $_GET['action'];
        }
        else{
            $click= '';
        }
        if($click=='quanlydanhmucsanpham'){
            include('modules/quanlydanhmucsp/them.php');
            include('modules/quanlydanhmucsp/lietke.php');
        }
        else{
            include('modules/dashboard.php');
        }
    ?>
</div>