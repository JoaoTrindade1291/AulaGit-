recebeform.php
<?php
?>
<htmal>
<head><title> resposta php</title>
</head>
<body>
<h2> resposta do php</h2>
<?php
$mat = $_get['matricula'];
$nom = $_get['name'];
?>
<table>
<tr><td> matricula</td><td><?=$mat;?></td></tr>
<tr><td> nome</td><td><?=$nom;?></td></tr>
<table>
<a href="formenvio.html">voltar</a>
</body>
</html>