<?php
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline'; img-src 'self'; object-src 'none'; frame-ancestors 'none'"/>
                <meta http-equiv="X-Content-Type-Options" content="nosniff"/>
                <meta http-equiv="X-Frame-Options-Policy" content="DENY"/>
                <meta http-equiv="X-XSS-Protection" content="1; mode=block"/>
                <title>Make old devices usable again</title>
        </head>
        <body>
		<p>This is a proof of concept for updating an old device to a supportable firmware version.</p>
		<p>What type of device do you want to make usable?</p>
		<p>
			<ul>
				<li><a href="smartphones.php">A Smartphone</a></li>
				<li><a href="tablets.php">A Tablet</a></li>
				<li><a href="computers.php">A Computer (Laptop, Desktop or Server)</a></li>
			</ul>
		</p>
	</body>
</html>
