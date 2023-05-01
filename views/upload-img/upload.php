<?php
$server = $_SERVER['SERVER_ADDR'];
$username = 'root';
$password = '';
$dbname = 'lab_work';
$charset = 'utf8';


$connection = new mysqli($server, $username, $password, $dbname);

if ($connection->connect_error) {
	die("Ошибка соединения" . $link->connect_error);
}
?>

<form action="index.php" method="post" enctype="multipart/form-data">

	<label class="input-file">
		<input type="file" name="img_upload">
		<span>Выберите файл</span>
	</label>
	<input class="send__form" type="submit" name="upload" value="Загрузить">
	<?php

	if (isset($_POST['upload'])) {
		$img_type = substr($_FILES['img_upload']['type'], 0, 5);
		$img_size = 2 * 1024 * 1024;
		if (!empty($_FILES['img_upload']['tmp_name']) and $img_type === 'image' and $_FILES['img_upload']['size'] <= $img_size) {

			$img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
			$connection->query("INSERT INTO images (image) VALUES ('$img')");
		}
	}
	?>
</form>
<div style="display: flex;">
	<?php

	$query = $connection->query("SELECT * FROM images ORDER BY id DESC");
	while ($row = $query->fetch_assoc()) {
		$show_img = base64_encode($row['image']); ?>

		<div style="max-width: 300px; margin: 10px;">
			<img style="max-width: 300px; max-height: 200px"" src=" data:image/jpg;base64, <?= $show_img ?>" alt="картинка">
		</div>


	<?php } ?>
</div>
<script>
	if (window.history.replaceState) {
		window.history.replaceState(null, null, window.location.href);
	}
</script>

<style>
	.input-file {
		position: relative;
		display: inline-block;
	}

	.input-file span {
		position: relative;
		display: inline-block;
		cursor: pointer;
		outline: none;
		text-decoration: none;
		font-size: 14px;
		vertical-align: middle;
		color: rgb(255 255 255);
		text-align: center;
		border-radius: 4px;
		background-color: #419152;
		line-height: 22px;
		height: 40px;
		padding: 10px 20px;
		box-sizing: border-box;
		border: none;
		margin: 0;
		transition: background-color 0.2s;
	}

	.input-file input[type=file] {
		position: absolute;
		z-index: -1;
		opacity: 0;
		display: block;
		width: 0;
		height: 0;
	}

	/* Focus */
	.input-file input[type=file]:focus+span {
		box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
	}

	/* Hover/active */
	.input-file:hover span {
		background-color: #59be6e;
	}

	.input-file:active span {
		background-color: #2E703A;
	}

	/* Disabled */
	.input-file input[type=file]:disabled+span {
		background-color: #eee;
	}

	.send__form {
		position: relative;
		display: inline-block;
	}

	.send__form{
		position: relative;
		display: inline-block;
		cursor: pointer;
		outline: none;
		text-decoration: none;
		font-size: 14px;
		vertical-align: middle;
		color: rgb(255 255 255);
		text-align: center;
		border-radius: 4px;
		background-color: #419152;
		line-height: 22px;
		height: 40px;
		padding: 10px 20px;
		box-sizing: border-box;
		border: none;
		margin: 0;
		transition: background-color 0.2s;
	}

	/* Focus */
	.send__form input[type=submit]:focus {
		box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
	}

	/* Hover/active */
	.send__form:hover{
		background-color: #59be6e;
	}

	.send__form:active  {
		background-color: #2E703A;
	}

	/* Disabled */
	.send__form:disabled {
		background-color: #eee;
	}
</style>