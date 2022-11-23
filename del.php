<?php
    #글 post
    include "lib.php";

    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx);

    $query = "delete from cdh_board where idx='$idx' ";
    
    // echo $query;
    // exit;


    mysqli_query($connect, $query)
?>

<script>
    //저장버튼으로 writepost가 실행되고 나면, 다시 list 페이지로 돌아가라.
    location.href='list.php'
</script>