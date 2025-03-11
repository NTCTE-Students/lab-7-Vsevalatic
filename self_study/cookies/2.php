<?php

$cookie_name = 'guest';
$cookie_admin = 'admin';

setcookie($cookie_name, $cookie_admin, time() + (86400), '/'); // 3600 секунд = 1 час

?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_COOKIE[$cookie_name])) {
			    print("Куки '{$cookie_name}' не установлены!");
			} else {
			    print("Куки '{$cookie_name}' установлены!<br>");
				print('Значение: ' . $_COOKIE[$cookie_name]);
			}
		?>
	</body>
</html>