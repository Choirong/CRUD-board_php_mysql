<?php
    #글 post
    include "lib.php";

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $memo = $_POST['memo'];

    $name = mysqli_real_escape_string($connect, $name);
    $subject = mysqli_real_escape_string($connect, $subject);
    $memo = mysqli_real_escape_string($connect, $memo);

    $regdate = date("Y-m-d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];

    $query = "insert into cdh_board(name, subject, memo, regdate, ip)
        values('$name', '$subject', '$memo', '$regdate', '$ip')";

    // echo $query;
    mysqli_query($connect, $query)
?>

<script>
    //저장버튼으로 writepost가 실행되고 나면, 다시 list 페이지로 돌아가라.
    location.href='list.php'
</script>