<!DOCTYPE html>
<html>
<head>
	<title>The Practioner PHP</title>
</head>
<body>
	<div class="body">
		<div class="header">
		<h2>Welcome to your page<?php echo "URL: ". $urj = trim($_SERVER['REQUEST_URI']);?></h2>
			<ul>
				<?php foreach ($tasks as $task):?>
					<li><?= $task->name; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</body>
</html>