<?php
    #검색
    include "lib.php";
?>

<?php 
    $search = $_POST['search'];
	if (empty($search))
	{
	 	$query="SELECT * from cdh_board order by idx desc";
	 	$result=mysqli_query($connect,$query);

        echo $query;
        exit;
        // mysqli_query($connect, $query);

	 }
	else
	{
	 	$query="SELECT *
	 	       from `cdh_board`
	 	       where `subject` like '%{$search}%' order by idx";
	 	// $result=mysqli_query($conn,$query);

        echo $query;
        exit;
        // mysqli_query($connect, $query);

	 }
 ?>
