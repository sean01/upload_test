<?php 
	
	#1. Load Libraries
	require_once 'form.lib.php';
	require_once 'upload.lib.php';
	require_once 'url.lib.php';


	#2. Logic


	# if any files were uploaded.

	if($_FILES){

		$files = Upload::to_folder('uploads/');

		// print_r($files);

		if($files[0]['error_message'] == false){

			
			URL::redirect($files[0]];filepath]);

		}else{

			echo $files[0]['error_message'];
		}
	}


	#3. Load Views





?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload files with PHP</title>

</head>
<body>
	
	<h1>Upload files with PHP</h1>
	
	<?= Form::open_upload() ?>
	
		<div class="form-group">
			<?= Form::label('file', 'File:') ?>
			<?= Form::file() ?>
		</div>

		<?= Form::submit() ?>

	<?= Form::close() ?>

</body>
</html>