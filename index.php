<?php $var='Пример переменной';?>
<?php $title='Уроки по PHP';?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title;?></title>
	<link rel="stylesheet" href="/css/style.min.css">

</head>
<body>
	<?php
        echo '<h1>Привет Мир!!!</h1>';
        print '<p>Привет Мир!!!</p>';
        echo "<h2>$var<h2>";
    ?>
</body>
</html>
