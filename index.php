<html>
<head>
	<title>EnCry&&DeCry</title>
</head>
<body>
	<form action="index.php" method="post">
	<p>Encrypt Your Msg :</p>
	<div><textarea name="En" style="height:120px;width:420px"></textarea> 
		
	</div>
	<div>
		<label style="background-color:black;color: green;">
			<?php 
			$str=$_POST['En']; 
			if(!empty($str)){
				echo base64_encode($str); 
			}
			else{
				echo "";
			}
			 ?>
			
			
		</label> 
	</div>
	<button name="EnCryBtn">Click To Encrypt</button>
	</form>

	<form action="index.php" method="POST">
		<p>Decrypt Your msg </p>
		<div>
			<textarea name="Dn" style="height:120px;width:420px"></textarea>
		</div>
		<lable><?php 
		$vlu=$_POST	['Dn'];
		if(isset($vlu) ==""){
			echo "";
			

		}
		else{echo base64_decode($vlu); }
		?></lable>
		<button name="DecryptBtn">Click To Decrypt</button>
	</form>

</body>

</html>