<?php


use App\Controller\SPController;

require __DIR__. '/vendor/autoload.php';
$page= isset($_REQUEST['page'])? $_REQUEST['page']: '';
echo 'den day r';
$spController = new SPController();
var_dump($spController) ;
?>

<a href="admin.php?page=list-sp">Danh Sach nguoi thue </a><br>
<a href="admin.php?page=add-sp">Them </a><br>
<?php
switch ($page){
    case 'list-sp':
        $spController->index();
        break;
    case 'add-sp':
        $spController->add();
        break;
    default;
}
?>

//<?php echo" vao roi"?>