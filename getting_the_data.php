<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>dowonload file</title>
	<style>
		#textload{
			font-size: 20px;
			transition: color 0.5s;
		}
		#textload:hover{
			color: green;
		}
	</style>
</head>
<body>

	<?php
		if(isset($_POST['sub_parsing'])) {
			$arr = $_POST['hidden_links'];
			$fail = fopen("parsing_file.doc", "w+");
			foreach ($arr as $value_links) {
				$texte_enicod = mb_convert_encoding($value_links, "Windows-1251");	// перекодировали строку 
				fwrite($fail, $texte_enicod. "\r\n"); // записали данные в фаил Word
				
			
			}
				
				fclose($fail);

			

		}

		$filname = __DIR__. "/parsing_file.doc";
		if (file_exists($filname)) {
			echo "<h3>Файл обработан и готов для скачивания</h3>";
			echo "<a href='parsing_file.doc' id='textload'>Скачать файл</a>";
		}
		

	?>

</body>
</html>
