<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    
    $connect = mysqli_connect("localhost", "korea", "ehdgus0314**", "korea"); #환경, 아이디, 비번, 사용할 DB 이름
    
    // #mysql 접속 중 에러가 발생했을 경우
    if(mysqli_connect_error()){
        echo "mysql 접속 중 오류가 발생했습니다.";
        echo mysqli_connect_error;
    }
?>