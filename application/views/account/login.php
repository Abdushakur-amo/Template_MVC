<h3>Вход</h3>
<?

	if ($this->route['action'] = 'login') {
		echo 'Сихкабобай Login :)';
	} else echo ':(';


 ?>
<form action="/account/login" method="post">
	<p>Логин</p>
	<p><input type="text" name="login"></p>
	<p>Пароль</p>
	<p><input type="text" name="password"></p>
	<b><button type="submit" name="enter">Вход</button></b>
</form>