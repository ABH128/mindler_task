<?php
function build_calendar($month,$year) {
     $daysOfWeek = array('S','M','T','W','T','F','S');
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
     $numberDays = date('t',$firstDayOfMonth);
     $dateComponents = getdate($firstDayOfMonth);
     $monthName = $dateComponents['month'];
     $dayOfWeek = $dateComponents['wday'];
     $calendar = "<table class='calendar'>";
     $calendar .= "<caption>$monthName $year</caption>";
     $calendar .= "<tr>";
     foreach($daysOfWeek as $day) {
          $calendar .= "<th class='header'>$day</th>";
     } 
     $currentDay = 1;

     $calendar .= "</tr><tr>";
     if ($dayOfWeek > 0) { 
          $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>"; 
     }
     
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  
     while ($currentDay <= $numberDays) {
          if ($dayOfWeek == 7) {

               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";

          }
          
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          
          $date = "$year-$month-$currentDayRel";

          $calendar .= "<td class='day' rel='$date'>$currentDay</td>";
          $currentDay++;
          $dayOfWeek++;

     }
     if ($dayOfWeek != 7) { 
     
          $remainingDays = 7 - $dayOfWeek;
          $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>"; 

     }
     
     $calendar .= "</tr>";

     $calendar .= "</table>";

     return $calendar;

}

?> 
<html>
<body>
<table style="width:100%">
  <tr>
    <td><?php require 'config.php';
  error_reporting(0);
     $month = 4; 		
     $year = 2017;
     echo build_calendar($month,$year);
	 
	  $db=mysql_query("SELECT * FROM `createtask` WHERE 1");
	       $i=0;
                      while($data=mysql_fetch_array($db)) {
						  $t=' ';
						  
						  $temp=$data['dueDate'];
						  if($data['reminder']=='rem'){
							  $t='Important Task';
						  }
							  
						  if($temp>='2017-04-01' && $temp<='2017-04-30')
						  {
							  echo "<b>".++$i.".</b>";
                       echo"
						TaskName: ".$data['taskName']."<br>
						Date: ".$data['dueDate']."<br>
                           <b>".$t."</b>";
						  }
                     }?></td>
	<td>
	 <?php
     $month = 5; 		
     $year = 2017;
     echo build_calendar($month,$year);
	 
	  $db=mysql_query("SELECT * FROM `createtask` WHERE 1");
	       $i=0;
                      while($data=mysql_fetch_array($db)) {
						  $t=' ';
						  
						  $temp=$data['dueDate'];
						  if($data['reminder']=='rem'){
							  $t='Important Task';
						  }
							  
						  if($temp>='2017-05-01' && $temp<='2017-05-31')
						  {
							  echo "<b>".++$i.".</b>";
                       echo"
						TaskName: ".$data['taskName']."<br>
						Date: ".$data['dueDate']."<br>
                           <b>".$t."</b>";
						  }
                     }?>
	
	</td>
	<td>
	 <?php
     $month = 6; 		
     $year = 2017;
     echo build_calendar($month,$year);
	 
	  $db=mysql_query("SELECT * FROM `createtask` WHERE 1");
	       $i=0;
                      while($data=mysql_fetch_array($db)) {
						  $t=' ';
						  
						  $temp=$data['dueDate'];
						  if($data['reminder']=='rem'){
							  $t='Important Task';
						  }
							  
						  if($temp>='2017-06-01' && $temp<='2017-06-30')
						  {
							  echo "<b>".++$i.".</b>";
                       echo"
						TaskName: ".$data['taskName']."<br>
						Date: ".$data['dueDate']."<br>
                           <b>".$t."</b>";
						  }
                     }?>
	
	</td>
	<td>
	 <?php
     $month = 7; 		
     $year = 2017;
     echo build_calendar($month,$year);
	 
	  $db=mysql_query("SELECT * FROM `createtask` WHERE 1");
	       $i=0;
                      while($data=mysql_fetch_array($db)) {
						  $t=' ';
						  
						  $temp=$data['dueDate'];
						  if($data['reminder']=='rem'){
							  $t='Important Task';
						  }
							  
						  if($temp>='2017-07-01' && $temp<='2017-07-31')
						  {
							  echo "<b>".++$i.".</b>";
                       echo"
						TaskName: ".$data['taskName']."<br>
						Date: ".$data['dueDate']."<br>
                           <b>".$t."</b>";
						  }
                     }?>
	
	</td>
	<td>
	 <?php
     $month = 8; 		
     $year = 2017;
     echo build_calendar($month,$year);
	 
	  $db=mysql_query("SELECT * FROM `createtask` WHERE 1");
	       $i=0;
                      while($data=mysql_fetch_array($db)) {
						  $t=' ';
						  
						  $temp=$data['dueDate'];
						  if($data['reminder']=='rem'){
							  $t='Important Task';
						  }
							  
						  if($temp>='2017-08-01' && $temp<='2017-08-30')
						  {
							  echo "<b>".++$i.".</b>";
                       echo"
						TaskName: ".$data['taskName']."<br>
						Date: ".$data['dueDate']."<br>
                           <b>".$t."</b>";
						  }
                     }?>
	
	</td>
	<td>
	 <?php
     $month = 9; 		
     $year = 2017;
     echo build_calendar($month,$year);
	 
	  $db=mysql_query("SELECT * FROM `createtask` WHERE 1");
	       $i=0;
                      while($data=mysql_fetch_array($db)) {
						  $t=' ';
						  
						  $temp=$data['dueDate'];
						  if($data['reminder']=='rem'){
							  $t='Important Task';
						  }
							  
						  if($temp>='2017-09-01' && $temp<='2017-09-31')
						  {
							  echo "<b>".++$i.".</b>";
                       echo"
						TaskName: ".$data['taskName']."<br>
						Date: ".$data['dueDate']."<br>
                           <b>".$t."</b>";
						  }
                     }?>
	
	</td>
  </tr>
  <tr>
   <td>
	 <?php
     $month = 10; 		
     $year = 2017;
     echo build_calendar($month,$year);
	 
	  $db=mysql_query("SELECT * FROM `createtask` WHERE 1");
	       $i=0;
                      while($data=mysql_fetch_array($db)) {
						  $t=' ';
						  
						  $temp=$data['dueDate'];
						  if($data['reminder']=='rem'){
							  $t='Important Task';
						  }
							  
						  if($temp>='2017-10-01' && $temp<='2017-10-31')
						  {
							  echo "<b>".++$i.".</b>";
                       echo"
						TaskName: ".$data['taskName']."<br>
						Date: ".$data['dueDate']."<br>
                           <b>".$t."</b>";
						  }
                     }?>
	
	</td>
	 <td>
	 <?php
     $month = 11; 		
     $year = 2017;
     echo build_calendar($month,$year);
	 
	  $db=mysql_query("SELECT * FROM `createtask` WHERE 1");
	       $i=0;
                      while($data=mysql_fetch_array($db)) {
						  $t=' ';
						  
						  $temp=$data['dueDate'];
						  if($data['reminder']=='rem'){
							  $t='Important Task';
						  }
							  
						  if($temp>='2017-11-01' && $temp<='2017-11-30')
						  {
							  echo "<b>".++$i.".</b>";
                       echo"
						TaskName: ".$data['taskName']."<br>
						Date: ".$data['dueDate']."<br>
                           <b>".$t."</b>";
						  }
                     }?>
	
	</td>
    <td>
	 <?php
     $month = 12; 		
     $year = 2017;
     echo build_calendar($month,$year);
	 
	  $db=mysql_query("SELECT * FROM `createtask` WHERE 1");
	       $i=0;
                      while($data=mysql_fetch_array($db)) {
						  $t=' ';
						  
						  $temp=$data['dueDate'];
						  if($data['reminder']=='rem'){
							  $t='Important Task';
						  }
							  
						  if($temp>='2017-12-01' && $temp<='2017-12-31')
						  {
							  echo "<b>".++$i.".</b>";
                       echo"
						TaskName: ".$data['taskName']."<br>
						Date: ".$data['dueDate']."<br>
                           <b>".$t."</b>";
						  }
                     }?>
	
	</td>
	 <td>
	 <?php
     $month = 1; 		
     $year = 2018;
     echo build_calendar($month,$year);
	 
	  $db=mysql_query("SELECT * FROM `createtask` WHERE 1");
	       $i=0;
                      while($data=mysql_fetch_array($db)) {
						  $t=' ';
						  
						  $temp=$data['dueDate'];
						  if($data['reminder']=='rem'){
							  $t='Important Task';
						  }
							  
						  if($temp>='2018-01-01' && $temp<='2018-01-31')
						  {
							  echo "<b>".++$i.".</b>";
                       echo"
						TaskName: ".$data['taskName']."<br>
						Date: ".$data['dueDate']."<br>
                           <b>".$t."</b>";
						  }
                     }?>
	
	</td>
	 <td>
	 <?php
     $month = 2; 		
     $year = 2018;
     echo build_calendar($month,$year);
	 
	  $db=mysql_query("SELECT * FROM `createtask` WHERE 1");
	       $i=0;
                      while($data=mysql_fetch_array($db)) {
						  $t=' ';
						  
						  $temp=$data['dueDate'];
						  if($data['reminder']=='rem'){
							  $t='Important Task';
						  }
							  
						  if($temp>='2018-02-01' && $temp<='2018-02-28')
						  {
							  echo "<b>".++$i.".</b>";
                       echo"
						TaskName: ".$data['taskName']."<br>
						Date: ".$data['dueDate']."<br>
                           <b>".$t."</b>";
						  }
                     }?>
	
	</td>
	 <td>
	 <?php
     $month = 3; 		
     $year = 2018;
     echo build_calendar($month,$year);
	 
	  $db=mysql_query("SELECT * FROM `createtask` WHERE 1");
	       $i=0;
                      while($data=mysql_fetch_array($db)) {
						  $t=' ';
						  
						  $temp=$data['dueDate'];
						  if($data['reminder']=='rem'){
							  $t='Important Task';
						  }
							  
						  if($temp>='2018-03-01' && $temp<='2018-03-31')
						  {
							  echo "<b>".++$i.".</b>";
                       echo"
						TaskName: ".$data['taskName']."<br>
						Date: ".$data['dueDate']."<br>
                           <b>".$t."</b>";
						  }
                     }?>
	
	</td>
  </tr>
</table>
</body>
</html>