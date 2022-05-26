<?php

$UN = $_POST["UN"] ;
$Email = $_POST["Email"] ;
$Password = $_POST["Password"] ;

$con = new mysqli('localhost','root','','daw_project');

			if ($_POST["UN"]!="" && $_POST["Email"]!="" && $_POST["Password"]!="")
			{
			$sql = $con->prepare( "INSERT INTO register (User_Name,Email,Password)
				values(?,?,?)");
			$sql->bind_param("sss",$_POST["UN"],$_POST["Email"],$_POST["Password"]);
				$sql->execute();
				echo "the data has been stored";
				$sql->close();
				$con->close();
				
			}else{
				echo"a problem has accured";
			}
		

?>