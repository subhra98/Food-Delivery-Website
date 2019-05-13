<html>
<body>
<?php

/*  to view record from a database table*/
//SQL-STRUCTURED QUERY LANGUAGE

         $con=mysqli_connect("localhost","root","","biriyani_types");
		 //localhost-servername,root-mysql-username,
		 //""-empty password,biriyani_types-database name
		 
		 if(!$con)
		   die("cannot connect to server");
		   
		 else
		   {
		   
		      //$sql="select * from project cost with cost desc";
			  //to fetch table data
			  //$sql=""select SL.NO,NAME from project";
			  //$sql="select * from project where name like 'K%'";
			  $sql="select * from project";
			  //$sql="select * from project where pname like 'M%' or pcost<1000";
			  $rs=mysqli_query($con,$sql);//to execute sql query
			  echo"<table  border=2 align=center cellpadding=5><tr><th>SL.NO</th>
			  <th>NAME</th><th>COST</th></tr>";
			  while($row=mysqli_fetch_array($rs))//fetch individual row in array
			  {
			  echo"<tr>";
			  echo"<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
			  
			  echo"</tr>";
			  }
			  echo"</table>";
			  }  
?>
    <br></br>
	
	<a href="selectbiryani.php" input type="submit" align="cenetr" name="btn" >
			ORDER YOUT CHOICE
		</a>
	</body>
	</html>
			  
			 
  	