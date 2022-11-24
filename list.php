<?php
    #목록만 보여주는 파일
    include "lib.php";
?>
<!-- <form method="get" action="search.php">
    <div id="logo" style="width:100%; text-align:center"><h1>최동현's To Do list</h1></div>

    <input type="text" name="search"style="border: 3px solid rgb(0, 0, 0); padding: 10px;">
    <input type="submit" value="검색">
</form> -->

<!-- <form method="get" action="search.php">
    <div id="logo" style="width:100%; text-align:center"><h1>최동현's To Do list</h1></div>
	<select name="cate" id="search_opt" onchange="info()">
            <option value=title>제목</option>
            <option value=content>내용</option>
            <option value=name>작성자</option>
	</select>
	<input class=textform type=text name=search id="search_box" autocomplete="off" placeholder="제목을 입력하세요." required>
	<input class=submit type=submit value=검색>
        <p>
            <input type=date name=date1>
            ~
            <input type=date name=date2>
        </p>
</form> -->

<!-- <form method="post" action="search.php">
    검색 키워드 입력<input type="text" name="c1"><br>
    <input type="submit" value="확인">
</form> -->


<form name='search' method='post' action='search.php'>
    <div id="logo" style="width:100%; text-align:center"><h1>최동현's 할일 Web</h1></div>
        검색창(아직 미완성) &nbsp;<input type='text' name='search'>
		<input type='submit' name='확인' value='확인'>
</form>

<a href="write.php" >새로운 할일 추가</a>

<table width=800 border="1">
    <tr>
        <th width=50 > Num </th>
        <th> 제목 </th>
        <th width=100 > 작성자 </th>
        <th width=100 > 작성일 </th>
    </tr>

    <?php
        if(array_key_exists('page', $_POST)){
            printpage($_POST['page']);
        }
        else{
        	printpage(1);
        }
        function printpage(int $page){
            $start_data = ($page - 1) * 10;
            if(array_key_exists('board_search', $_POST)){
                board();
            }
            else{
                $connect = mysqli_connect("localhost", "korea", "ehdgus0314**", "korea");
                $query = "SELECT * FROM cdh_board order by idx desc limit $start_data, 10;";
                $result = mysqli_query($connect, $query);
                while($data = mysqli_fetch_array($result)){
    ?>
                    <tr>
                        <td> <?=$data['idx']?> </td>
                        <td> <a href="view.php?idx=<?=$data['idx']?>"><?=$data['subject']?></a> </td>
                        <td> <?=$data['name']?> </td>
                        <td> <?=substr($data['regdate'], 0, 10)?> </td>
                    </tr>
    <?php
                }
                mysqli_close($connect);
            }
        }
    ?>
</table>

<div class = "pagination">
    <?php
        $query = "SELECT * FROM cdh_board;";
        $result = mysqli_query($connect, $query);

        $data_num = mysqli_num_rows($result);
        $page_num = ceil($data_num / 10);
    ?>
        <form method = "post">
            <?php
                for($i = 1; $i <= $page_num; $i = $i+1){
                    echo "<input type = 'submit' name = 'page' value = '$i'/>";
                }
            ?>
        </form>
</div>
