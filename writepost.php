<?php
    #글 post
    include "lib.php";
    error_reporting (E_ALL ^ E_NOTICE);

    // $idx = mq("alter table board auto_increment =1"); //auto_increment 값 초기화
    $idx = $_POST['idx'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $memo = $_POST['memo'];
    $regdate = date("Y-m-d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];

    // $idx = mysqli_real_escape_string($connect, $idx); 
    $idx = mysqli_real_escape_string($connect, $idx);
    $name = mysqli_real_escape_string($connect, $name);
    $subject = mysqli_real_escape_string($connect, $subject);
    $memo = mysqli_real_escape_string($connect, $memo);
    $regdate = mysqli_real_escape_string($connect, $regdate);
    $ip = mysqli_real_escape_string($connect, $ip);
 

    if($idx){
        $query = "UPDATE cdh_board set 'name'='$name',
        'subject'='$subject',
        'memo'='$memo',
        where 'idx'='$idx' ";

        // echo $query;
        // exit;
        mysqli_query($connect, $query);

    }
    else{

        
    
        // $query = "INSERT INTO cdh_board(name, subject, memo, regdate, ip)
        //     VALUES ($name, $subject, $memo, $regdate, $ip)";
    
        $query = "INSERT INTO cdh_board(name, subject, memo, regdate, ip)
            VALUES ('$name', '$subject', '$memo', '$regdate', '$ip')";
        
        // echo $query;
        // exit;
        mysqli_query($connect, $query);
    }
?>

<script>
    //저장버튼으로 writepost가 실행되고 나면, 다시 list 페이지로 돌아가라.
    location.href='list.php'
</script>