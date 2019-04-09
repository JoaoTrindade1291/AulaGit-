$sql = "select * from alunos order by nome";
$rs = mysqli_query($con,$sql);
?>
<html><head><title> Lista de alunos <</title></head>
<body>
<table>
<tr><th>id</tr><tr>nome<tr><tr>email</tr><tr>fone</tr></tr>
<?php

while($row = mysqli_fetch_array($rs)){
	$id = $ow['id];
	$nome = $row['nome'];
	$email = $row['email];
	$fone = $row['fone'];
	?>
	<td><?=id;?></td>
	<td><?=$nome;?></td>
	<td><?=$email;?</td>
	<td><?=$fone;?></td>
	</tr>
	<?php
}
echo"</table></body>

</html>";

