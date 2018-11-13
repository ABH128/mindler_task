<?php
  require 'config.php';
  error_reporting(0);


  if(empty($_POST)===false){
	$task =  mysql_real_escape_string($_POST['task']);
    $date = mysql_real_escape_string($_POST['date']);
    $rem =  mysql_real_escape_string($_POST['rem']);
	if($rem!='rem'){
	$rem='nrem';
	}
    if(empty($date) || empty($task)){

    }else{
      mysql_query("INSERT INTO `createtask` VALUES ('$task','$date','$rem','0')") or die(mysql_error());
       header('Location:profile.php');
      }
  }
?>
<!DOCTYPE html>
<html>
<body>

<h2>Task Reminder System</h2>

<form class="" method="post" autocomplete="off">
  Task Name:<br>
  <input type="text" name="task">
  <br>
  due Date:<br>
  <input type="date" name="date" min="2017-04-01" max="2018-03-01">
  <input type="checkbox" name="rem" value="rem"> Set Reminder<br><br>
   <button type="submit" class="log">createTask</button>
   <?php echo "<p>".$message."</p>"; ?>
</form>
</body>
</html>
