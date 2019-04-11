<?php

$name = $_POST['nameart'];
$text = $_POST['text'];
if ($_POST['menu'])
$menu = $_POST['menu'];
else $menu = $name;
$db = mysqli_connect('localhost', 'root', '', 'mybase');
$query = "INSERT INTO art (name, text, menu) VALUES ('$name', '$text', '$menu')";
$result = mysqli_query($db, $query);
mysqli_close($db);
if ($result)
echo 'Статья успешно добавлена';


$login = $_POST['login'];
$pas = $_POST['password'];
if ($login == 'Viktorov' && $pas == 228)
  {
  session_start();
  $_SESSION['admin'] = true;
  $script = 'index.php';
  }
else
$script = 'index.html';
header("Location: $script");

?>