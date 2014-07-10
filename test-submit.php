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

		echo $device + " " + $carrier;

		/*$server = "tcp:<mxx6aa5ssr>";
		$user = "<value of USERNAME from section above>"@SERVER_ID;
		$pwd = "my-test-db";
		$db = "testdb";

		try {
    		$conn = new PDO( "sqlsrv:Server= $server ; Database = $db ", $user, $pwd);
    		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		} catch(Exception $e) {
    		die(print_r($e));
		}

		$rows = $conn->query("SELECT * FROM [Devices] WHERE Device = $device AND Carrier = $carrier ORDER BY Date DESC");
		foreach($rows as $row) {
		?>
			<p><?= $row["Device"] + " " + $row["Customer Name"] + " " + $row["OS"] + " " ?> </p>
		<?php

		}*/
	}
?>

</body>
</html>
