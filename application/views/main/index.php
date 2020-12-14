<p>Главная страница</p>
<a href="/news">Новсть</a>
<?php




foreach ($news as $val): ?>
	<h3><?php echo $val['title']; ?></h3>
	<p><?php echo $val['description']; ?></p>
	<hr>
<?php endforeach; ?>

<table border="1" style="padding:10;">
<tr>
	<td>ID</td>
	<td>NAME</td>
	<td>PASSWORD</td>
	<td>E-MAIL</td>
</tr>
<? for ($i = 0; $i < count($student); $i++): ?>


			<tr>
				<td><?php echo $student[$i]['id'] ?></td>
				<td><?php echo $student[$i]['name'] ?></td>
				<td><?php echo $student[$i]['password'] ?></td>
				<td><?php echo $student[$i]['email'] ?></td>
			</tr>


<?php endfor; ?>
</table>