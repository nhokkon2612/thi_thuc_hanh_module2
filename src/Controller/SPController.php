<?php

namespace App\Controller;
use App\Model\SPModel;

class SPController
{
    public $spModel;

    public function __construct()
    {
        $this->spModel = new SPModel();
    }

    public function index(){
        $sps = $this->spModel->getALL();
        include 'src/View/SP/list.php';
    }

    public function add(){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            include 'src/View/SP/add.php';
        }else{
            $Ten = $_REQUEST['Ten'];
            $LoaiSP=$_REQUEST['LoaiSP'];
            $Gia=$_REQUEST['Gia'];
            $SoLuong=$_REQUEST['SoLuong'];
            $Ngay=$_REQUEST['Ngay'];
            $MoTa=$_REQUEST['MoTa'];
            $sps=$this->spModel->add($Ten,$LoaiSP,$Gia,$SoLuong,$Ngay,$MoTa);
        }
    }

}