<?php
    #목록만 보여주는 파일
    include "lib.php";
?>

<table width=800 border="1">
    <tr>
        <th> Num </th>
        <th> 제목 </th>
        <th> 작성자 </th>
        <th> 작성일 </th>
    </tr>

<?php
    # 최신 게시글이 위로 오도록 가져와라.
    $query = "select * from cdh_board order by idx desc";
    $result = mysqli_query($connect, $query);

    while($data = mysqli_fetch_array($result)){
?>

    <tr>
        <td> <?php=$data['idx']?> </td>
        <td> <?php=$data['subject']?> </td>
        <td> <?php=$data['name']?> </td>
        <td> <?php=substr($data[regdate], 0, 10)?> </td>
    </tr>

<?php } ?>

</table>


<a href="write.php">글쓰기</a>
