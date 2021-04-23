<?php 
session_start();

//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'guests_book'; //имя базы данных
//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
mysqli_query($link, "SET NAMES 'utf8'");

if (!empty($_POST)) {
	$name = $_POST['name'];
	$text = $_POST['text'];
	$date = date('Y-m-d H-i-s', time());

	$query = "INSERT INTO guests (name, date, text) VALUES ('$name', '$date', '$text')";
	if (mysqli_query($link, $query) or die(mysqli_error($link))) {
		$_SESSION['ok'] = true;
	} else {
		$_SESSION['ok'] = false;
	}
}
/*******************************************************/
if (isset($_GET['page'])) {
	$pages = $_GET['page'];
	$prev = $pages - 1;
} else {
	$pages = 1;
	$prev = $pages;
}

$countPost = 3; //по сколько отзывов на странице

$query = "SELECT COUNT(*) as count FROM guests";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_fetch_assoc($result)['count'];
$countPages = ceil($count / $countPost);

$countPostStart = ($pages - 1) * $countPost;
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<div id="wrapper">
			<h1>Гостевая книга</h1>
			<div>
				<nav>
				  <ul class="pagination">
					  <?php
							if ($pages == 1) {
								$classDown = " class='disabled'";
								$prev = $pages;
							} else $classDown = "";							
							echo '<li'.$classDown.'><a href="?page='.$prev.'"  aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';

							for ($i = 1; $i <= $countPages; $i++) {
								if ($_GET['page'] == $i) {
									echo "<li class=\"active\"><a href=\"?page=$i\">$i</a></li>";
								} else {
									echo "<li><a href=\"?page=$i\">$i</a></li>";
								}
							}

							if ($pages == $countPages) {
								$classDown = " class='disabled'";
								$next = $pages;
							} else {
								$classDown = "";
								$next = $pages + 1;
							}
							echo '<li'.$classDown.'><a href="?page='.$next.'"  aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
					  ?>
				  </ul>
				</nav>
			</div>
			<?php
			if (!empty($_SESSION['ok']) AND $_SESSION['ok'] == 'true') {
				$query = "SELECT * FROM guests ORDER BY date DESC LIMIT $countPostStart,$countPost";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));
				for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

				foreach ($data as $value) {
					$dateArr = $value['date'];
					$nameArr = $value['name'];
					$textArr = $value['text'];

					$post = '';
					$post .= "<div class=\"note\"><p>";
					$post .= "<span class=\"date\">$dateArr</span>";
					$post .= "<span class=\"name\"> $nameArr</span>";
					$post .= "</p>";
					$post .= "<p>$textArr</p>";
					$post .= "</div>";

					echo $post;
				}
			}
			?>	
			<div class="info alert alert-info">
				<?php
				if (!empty($_SESSION['ok']) AND $_SESSION['ok'] == 'true') {
					echo "Запись успешно сохранена!";
				} else echo "Ошибка запись не сохранена!";
				?>				
			</div>
			<div id="form">
				<form action="#form" method="POST">
					<p><input class="form-control" placeholder="Ваше имя" name="name" value="<?php if (!empty($_POST['name'])) echo $_POST['name']; ?>"></p>
					<p><textarea class="form-control" name="text" placeholder="<?php if (!empty($_POST['text'])) echo $_POST['text']; else echo "Ваш отзыв";?>" value="<?php if (!empty($_POST['text'])) echo $_POST['text']; else echo "Ваш отзыв";?>"></textarea></p>
					<p><input type="submit" class="btn btn-info btn-block" value="Сохранить"></p>
				</form>
			</div>
		</div>
	</body>
</html>

<?php
/*echo "<pre>";
var_dump($count);
echo "</pre>";*/
?>