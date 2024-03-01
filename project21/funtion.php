<?php

function getAllCategories() {

    //b1 kết nối database server
    $conn=mysqli_connect('localhost','root','','testt');
    if(!$conn){
        die('khong the ket noi');
    }
//b2:viết câu truy vấn
    $sql="SELECT * from categories";
//b3:thực hiện câu sql
    $result=mysqli_query($conn,$sql);
//b4:tạo mảng chứa kết quả
    $categories=[];
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $categories[]=$row;
        }
    }
//b5 đóng kết nối sql
    mysqli_close($conn);

    return $categories;
}

function getAllNews(){
    $conn=mysqli_connect('localhost','root','','testt');
    if(!$conn){
        die('khong the ket noi');
    }

    $sql="SElECT * FROM News order by news_id asc ";

    $resuilt=mysqli_query($conn,$sql);

    $news=[];
    if(mysqli_num_rows($resuilt)>0){
        while($row=mysqli_fetch_assoc($resuilt)){
            $news[]=$row;
        }
    }
    mysqli_close($conn);
    return $news;
}