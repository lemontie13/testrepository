<!DOCTYPE html>
<html>
	<head>
		<title>Add Submit Test</title>
		<meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
	</head>

	<body>
<?php
	if(isset($_POST["device"]) && isset($_POST["customername"]) && isset($_POST["os"])
				&& isset($_POST["osversion"]) && isset($_POST["senseversion"])
				&& isset($_POST["swversion"]) && isset($_POST["baseband"]) 
				&& isset($_POST["release"]) && isset($_POST["carrier"])) {

		$device = $_POST["device"];
		$customer_name = $_POST["customername"];
		$os = $_POST["os"];
		$os_version = $_POST["osversion"]; 
		$sense = $_POST["senseversion"];
		$sw_version = $_POST["swversion"];
		$baseband = $_POST["baseband"];
		$release = $_POST["release"];
		$carrier = $_POST["carrier"];
		$notes = $_POST["notes"];

		/*$server = "tcp:mxx6aa5ssr.database.windows.net,1433";
		$user = "my-test-db@mxx6aa5ssr";
		$pwd = "Happyness!";
		$db = "testdb";

		try {
    		$conn = new PDO( "sqlsrv:server= $server ; Database = $db ", $user, $pwd);
    		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		} catch(Exception $e) {
    		die(print_r($e));
		}

		$device = $conn->quote($device);
		$carrier = $conn->quote($carrier);

		$rows = $conn->query("SELECT * FROM devices WHERE device = $device AND carrier = $carrier ORDER BY release_date DESC");
		

		foreach($rows as $row) {
			$device_name = $row["device"];
			$customer_name = $row["customer_name"];
			$os = $row["os"];
			$os_version = $row["os_version"];
			$sense = $row["sense_version"];
			$sw_version = $row["software_version"];
			$baseband = $row["baseband"];
			$release = $row["release_date"];
			$carrier_name = $row["carrier"];*/
		?>
			<p>The following update was added:</p>
			<p><?=$carrier?>'s <?=$device?> (<?=$customer_name?>) was updated to <?= $os . " " . $os_version?>, Sense <?=$sense?>, SW version <?=$sw_version?>, baseband <?=$baseband?> on <?=$release?></p>
			<p>Notes on this update: <?=$notes?></p>
		<?php

		}
	
?>

</body>
</html>
