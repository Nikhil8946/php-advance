<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>

<body>


	<?php

	$api_url = 'https://reqres.in/api/users';


	$json_data = file_get_contents($api_url);

	$response_data = json_decode($json_data);


	$user_data = $response_data->data;


	$user_data = array_slice($user_data, 0, 6);


	?>
	<div class="container">
		<h1>my team</h1>
		<div class="cards">
			<?php
			foreach ($user_data as $user) {
				echo "<div class='card'>";
				$avatar = $user->avatar;
				echo "<img src='$avatar' alt=''>";
				echo "<br />";
				echo "$user->email";
				echo "<br />";
				echo "$user->first_name";
				echo "<br /> <br />";
				echo "</div>";
			}
			?>
		</div>
	</div>
</body>

</html>