<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Parsing saits</title>
	<style>
		#button_parsing{
			padding:7px 92px;
			position: relative;
			left:50%;
			margin-left: -169px;
			margin-top: 15px;
		}
	</style>
</head>
<body>
	<form action="getting_the_data.php" method="post" id="form_parsing">
		

		<input type="submit" name="sub_parsing" value="parsing yandex news" id="button_parsing">
	</form>
	<?php
		$link = "https://yandex.ru/news/";
		$red_file = file_get_contents($link);
		echo $red_file;
	?>

	<script>
		const form = document.getElementById("form_parsing");
		document.addEventListener("DOMContentLoaded", function() {
			let new_arrays_yandex_links = [];
			let array_links = document.getElementsByClassName("mg-card__link");
			for (let i = 0; i < array_links.length; i++) {
				new_arrays_yandex_links.push(array_links[i].innerText + " " + array_links[i].href);

			}

			for (let i = 0; i < new_arrays_yandex_links.length; i++) {
				let inp_hidden = document.createElement("input"); 
				inp_hidden.type = "hidden"; inp_hidden.name = "hidden_links[]"; inp_hidden.className = "hidden_inp";
				inp_hidden.value = new_arrays_yandex_links[i];
				form.prepend(inp_hidden);
			}		



		});
		



	</script>
</body>
</html>