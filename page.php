<?php
session_start();
$login = $_SESSION['login'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница</title>
</head>
<body>

<nav>
    <?php if(isset($login)) : ?>
    <a href="logout.php">Выйти</a>
    <?php else : ?>
    <a href="form.php">Войти</a>
    <?php endif; ?>
</nav>

<h2>Контент доступен всем пользователям</h2>
<div id="comment">
    </div>
    <?php if (isset($login)): ?>
    <form>
      <div>
      <p>Ваш текст :</p>
        <textarea name="text" placeholder="Введите текст"></textarea>
      </div>
      <input type="submit" value="Добавить">
    </form>
    <?php endif; ?>

    <script src="js/ajax_form.js" charset="utf-8"></script>
</html>