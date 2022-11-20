<?php
    #글쓰기
    include "lib.php";
?>

<form action="writepost.php" method="post">
    <table width=800 border="1" cellpadding=5>
        <tr>
            <th> 이름 </th>
            <td> <input type="text" name="name"> </td>
        </tr>

        <tr>
            <th> 제목 </th>
            <td> <input type="text" name="subject" style="width:100%;"> </td>
        </tr>

        <tr>
            <th> 내용 </th>
            <td> 
                <input type="text" name="memo" style="width:100%; height:300px;">
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div style="text-align:center;">
                    <input type="submit" value="저장">
                </div>
            </td>
        </tr>
    </table>
</form>