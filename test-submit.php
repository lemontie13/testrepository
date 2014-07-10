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
		$user = "<my-test-db>"@mxx6aa5ssr;
		$pwd = "Happyness!";
		$db = "testdb";

		/*try {
    		$conn = new PDO( "sqlsrv:Server= $server ; Database = $db ", $user, $pwd);
    		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		} catch(Exception $e) {
    		die(print_r($e));
		}*/
		try {
			$conn = new PDO ("sqlsrv:server = tcp:mxx6aa5ssr.database.windows.net,1433; Database = testdb", "my-test-db", "Happyness!");   
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		} catch ( PDOException $e ) { 
			print( "Error connecting to SQL Server." );
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
