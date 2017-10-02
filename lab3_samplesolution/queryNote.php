<?php
	$conn=mysqli_connect('sophia.cs.hku.hk','yxbao','30366400') or die ('Failed to Connect '.mysqli_error($conn));
	
	mysqli_select_db($conn, 'yxbao') or die ('Failed to Access DB'.mysqli_error($conn));
	
	$query = 'select * from checklist limit '.$_GET['lastRecord'].', 3';
	
	$result = mysqli_query($conn, $query) or die ('Failed to query '.mysqli_error($conn));
	
	while($row = mysqli_fetch_array($result)) {
        print "<div class=\"note\" id=".$row['id'].">";
	    print "<span onclick=\"changeState(this)\">".$row['doneOrNot']."</span><h3>".$row['title']."</h3><br><h4>(".$row['datetime'].")</h4>";
	    print "<p>".$row['taskdescription']."</p>";
	    print "</div>";
	}
?>