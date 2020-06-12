<?php
echo '<?xml version="1.0" encoding="UTF-8"?>';
$db = new PDO('mysql:dbname=devices;host=localhost;charset=utf8', 'devices', 'DeviceDB');
$type = basename($_SERVER["SCRIPT_FILENAME"], ".php");
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
		<form method="post" action="<?php echo $type . ".php"; ?>">
<?php
			if(isset($_POST['id'])) {
				if($_POST['id'] == 'other') {
					echo '<p>Sorry, this device is currently not supported.</p>';
				} else {
					$result = $db->query("SELECT model,remotebuild,flashtool,blmode FROM $type WHERE id='" . $_POST['id'] . "'");
					$info = $result->fetch();
					$result->closeCursor();
					if(is_dir($_POST['id'])) {
						echo "<p>Updating a " . $_POST['vendor'] . " " . $info['model'] . " (" . $_POST['id'] . ")</p>";
						echo '<p>Please download the following files making up the firmware:</p>';
						$files = glob($_POST['id'] . "/*");
						echo "<p>";
						foreach($files as $f) {
							if(basename($f) == "install.txt")
								continue;
							echo "<a href=\"$f\">" . basename($f) . "</a><br/>";
						}
						echo "</p>";
						if($info['flashtool']) {
							echo "<p>You will also need the " . $info['flashtool'] . " tool to flash the firmware to the device.</p>";
							if($info['flashtool'] == 'heimdall') {
								echo "<p>You can find " . $info['flashtool'] . ' <a href="https://androidfilehost.com/?w=files&flid=304516">here</a>.</p>';
							} else if($info['flashtool'] == 'fastboot') {
								echo "<p>You can find " . $info['flashtool'] . ' <a href="https://developer.android.com/studio/releases/platform-tools">here</a>.</p>';
							}
						}
						if(is_file($_POST['id'] . "/install.txt") || is_link($_POST['id'] . "/install.txt")) {
							echo "<p>To install, put your device into bootloader mode";
							if($info['blmode']) {
								echo " by turning it off, then holding down " . $info['blmode'];
							}
							readfile($_POST['id'] . "/install.txt");
						}
					} else {
						echo "<p>We don't have a custom build for the " . $_POST['vendor'] . " " . $info['model'] . " yet.";
						if($info['remotebuild']) {
							echo "However, we know there is a " . $info['remotebuild'] . " build for the device that will lielky work (but you'll have to install the apps manually).</p>";
							echo "<p>You can find their build ";
							switch($info['remotebuild']) {
							case "LineageOS":
								echo "<a href=\"https://wiki.lineageos.org/devices/" . $_POST['id'] . "\">here</a>.";
								break;
							default:
								echo "on their website.</p>";
							}
						} else {
							echo " Please check back later.</p>";
						}
					}
				}
			} else if(isset($_POST['vendor'])) {
				switch ($_POST['vendor']) {
				case "other":
					echo '<p>Sorry, this device is currently not supported.</p>';
					break;
				default:
					echo '<input type="hidden" name="vendor" value="' . $_POST['vendor'] . '"/>';
					echo "<p>Please select the " . $_POST['vendor'] . " device model:</p>";
					echo '<select name="id">';
					$result = $db->query("SELECT id,model FROM $type WHERE vendor='" . $_POST['vendor'] . "' ORDER BY model");
					foreach ($result as $d) {
						echo '<option value="' . $d['id'] . '">' . $d['model'] . '</option>';
					}
					echo '<option value="other">Other</option>';
					echo '</select>';
				}
			} else {
?>
				<p>Please select the device vendor:</p>
					<select name="vendor">
						<?php
							$result = $db->query("SELECT DISTINCT vendor FROM $type ORDER BY vendor");
							foreach ($result as $d) {
								echo '<option value="' . $d['vendor'] . '">' . $d['vendor'] . '</option>';
							}
							echo '<option value="other">Other</option>';
						?>
					</select>
				</p>
<?php			} ?>
			<p><input type="submit" value=">>>" /></p>
		</form>
	</body>
</html>
