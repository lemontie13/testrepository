<!DOCTYPE html>
<html>
	<head>
		<title>Test</title>
		
	</head>

	<body>

<?php
	if(isset($_GET["device"]) && isset($_GET["carrier"])) {

		$device = $_GET["device"];
		$carrier = $_GET["carrier"];

		$server = "tcp:mxx6aa5ssr.database.windows.net,1433";
		$user = "my-test-db@mxx6aa5ssr";
		$pwd = "Happyness!";
		$db = "testdb";

		try {
    		$conn = new PDO( "sqlsrv:server= $server ; Database = $db ", $user, $pwd);
    		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		} catch(Exception $e) {
    		die(print_r($e));
		}

		echo "connected\n";
		$device = $conn->quote($device);
		$carrier = $conn->quote($carrier);

		$rows = $conn->query("SELECT * FROM devices ");#WHERE device = $device AND carrier = $carrier ORDER BY release_date DESC");
		?>
			<p> <?= $rows->rowCount()?> </p>
		<?php
		foreach($rows as $row) {
			print $row["device"];
			print $row["customer_name"];
			print $row["os"];
		?>
			
		<?php

		}
	}
?>

</body>
</html>
