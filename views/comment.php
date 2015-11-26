<?php

			$dbLink = mysql_connect("localhost", "root", "");
			mysql_select_db("pholux-db");
			error_reporting(E_ALL ^ E_NOTICE);
			$notify = "";
			$username=$_POST['username'];
			$comment=$_POST['comment'];
			$submit=$_POST['submit'];
			if(isset($_POST['notify_box'])){ $notify = $_POST['notify_box']; }
			
				mysql_query("SET character_set_client=utf8", $dbLink);
				mysql_query("SET character_set_connection=utf8", $dbLink);
			 
			if($submit)
			{
				if($name&&$comment)
				{
					$insert=mysql_query("INSERT INTO comment (username,comments) VALUES ('$username','$comments') ");
				}
				else
				{
					echo "please fill out all fields";
				}
			}
			 
		echo "Your comment was saved.";



?>