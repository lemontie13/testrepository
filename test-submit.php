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

		$server = "tcp:<mxx6aa5ssr>";
		$user = "my-test-db";
		$pwd = "Happyness!";
		$db = "testdb";

		try {
    		$conn = new PDO( "sqlsrv:Server= $server ; Database = $db ", $user, $pwd);
    		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		} catch(Exception $e) {
			echo "error";
    		die(print_r($e));
		}

		echo "connected\n";
		$device = $conn->quote($device);
		$carrier = $conn->quote($carrier);

		$rows = $conn->query("SELECT * FROM [Devices] WHERE Device = $device AND Carrier = $carrier ORDER BY Date DESC");
		foreach($rows as $row) {
			echo "$row";
		?>
			<p><?= $row["Device"] + " " + $row["Customer Name"] + " " + $row["OS"] + " " ?> </p>
		<?php

		}
	}
?>

</body>
</html>
