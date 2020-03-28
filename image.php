<?php
$this->load->view('project/home');
?>

<!DOCTYPE html>
<html>
<head>
	<title>image appload</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php echo @$error;?>
<form enctype="multipart/form-data" accept-charset="utf-8" action="uploads" method="post">
<input type="file" name="file" >
<input type="submit" name="submit" value="upload">
</form>
</body>
</html>