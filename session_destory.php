<?php
 session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
   session_destroy();
   header('Location: index.php');
?>
</body>
</html>