<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File upload to a website</title>
</head>
<body>
	<h1>How To upload image or any file to a website</h1>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file"> 
		<button type='submit' name='submit'>Upload</button>
	</form>

</body>
</html>