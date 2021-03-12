<?php


namespace App\Model;
use PDO;

class SPModel
{
    public $database;

    public function __construct()
    {
        /*        var_dump(123);*/
        $db = new DBConnect();
        $this->database = $db->connect();
    }
// hien thi danh sach
    public function getALL(){
        $sql= " SELECT * FROM `indexSP` ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
// them sp
    public function add($Ten,$LoaiSP,$Gia,$SoLuong,$Ngay,$MoTa){
        $sql="INSERT INTO indexSP(TenSP,LoaiSP,Gia,SoLuong,Ngay,MoTa) VALUES (:Ten,:Loai,:Gia,:SL,:Ngay,:MoTa)";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':Ten',$Ten );
        $stmt->bindParam(':Loai',$LoaiSP );
        $stmt->bindParam(':Gia',$Gia );
        $stmt->bindParam(':SoLuong',$SoLuong );
        $stmt->bindParam(':Ngay',$Ngay );
        $stmt->bindParam(':MoTa',$MoTa );
        $stmt->execute();
        var_dump($stmt->execute());
    }

//tim kiem theo id
    public function findByID($id){
        $sql="SELECT * FROM indexSP WHERE ID=:id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetchAll();

    }
// xoa sp
    public function delete($id){
        $sql="DELETE FROM `indexSP` WHERE `indexSP`.`ID` = :id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        var_dump($stmt->execute());
    }



}