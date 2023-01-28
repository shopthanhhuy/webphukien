<div id="main">
        <?php
            include("sidebar/sidebar.php");
        ?>
            <div class="main_content">
        <?php
            if(isset($_GET['quanly']))
            {
                $click= $_GET['quanly'];
            }
            else{
                $click= '';
            }
            if($click=='danhmucsanpham'){
                include('main/danhmuc.php');
            }
            elseif($click=='giohang'){
                include('main/giohang.php');
            }
            elseif($click=='tintuc'){
                include('main/tintuc.php');
            }
            elseif($click=='lienhe'){
                include('main/lienhe.php');
            }
            else{
                include('main/index.php');
            }
        ?>
            </div>
            <div class="clear"></div>
        </div>