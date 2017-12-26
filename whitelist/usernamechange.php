<!DOCTYPE html>
<html>
	<head>
		<title>Thermacraft | Name Changer</title>
		<link href="../css/core.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="../images/favicon/flame32.png">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Arvo|Audiowide|Aladin">
	</head>
	<body>
    	<div id="page-wrapper">
        	<div id="header">
            	<?php include("../includes/header.php"); ?>
            </div>
            <div id="content">
            	<div class="container">
                	<div class="container_title">Name Change Request</div>
                	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                		<?php
                			$usernameErr = $usernameOldErr = $serverErr = $complete = "";
							$selected = $valid = false;
							$debugCheck = false;
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$username = $_POST["username"];
								if (empty($username)) {
									$usernameErr = "You must enter your new username";
								} else {
									$username = test($username);
								}
								$usernameOld = $_POST["usernameOld"];
								if (empty($usernameOld)) {
									$usernameOldErr = "You must enter your old username";
								} else {
									$usernameOld = test($usernameOld);
								}
								$server = $_POST["server"];
								if ($server == "0") {
									$serverErr = "You must select a server";
								} else {
									$selected = true;
								}
								if (($username != "") && ($usernameOld != "") && ($server != "0")) {
									$complete = whitelistAdd($username, $usernameOld, $server);
									// Debug
									if ($debugCheck) {
										if ($valid) { $validCheck = "true"; }
										else { $validCheck = "false"; }
										if ($selected) { $selectedCheck = "true";}
										else { $selectedCheck = "false"; }
										$debug = "Username: ".$username."<br>Server: ".$server."<br>Old Username: ".$usernameOld."<br>Valid Username = ".$validCheck."<br>Server Selected = ".$selectedCheck;
									}
									// Reset values
									if ($valid) {
										$username = "";
										$usernameOld = "";
										$userid = "";
										$server = "0";
										$selected = false;
									}
								}
							} 
							function test($data) {
								$data = trim($data);
								$data = stripslashes($data);
								$data = htmlspecialchars($data);
								return $data;
							}
							function whitelistAdd($username, $usernameOld, $server) {
								global $valid;
								$path = "./whitelists/".$server.".txt";
								
								$lines = file($path);
								if (!$whitelistFile = fopen($path, "w")) {
									$message = "Unable to open file";
								}
								foreach($lines as $key => $line) {
									if(stristr($line, $usernameOld."\n")) {
										$valid = true;
										$lines[$key] = $username."\n";
										$message = "Whitelist Sucessful!";
									}
									if (!$valid) {
										$message = "Your old username is not whitelisted on this server";
									}
									fwrite($whitelistFile, $lines[$key]);
								}
								fclose($whitelistFile);
								return $message;
							}
						?>
                		<p>Enter your old Username: <input type="text" name="usernameOld" value="<?php echo $usernameOld?>"><span class="wl-error"> * <?php echo $usernameOldErr;?></span></p>
                		<p>Enter your new Username: <input type="text" name="username" value="<?php echo $username?>"><span class="wl-error"> * <?php echo $usernameErr;?></span></p>
						<select name="server">
							<option value="0"
							<?php
								if (!$selected) {
									$selected = false;
									echo ' selected';
								} else if ($selected && ($username != "") && ($usernameOld != "") && ($valid == true)) {
									$selected = false;
									echo ' selected';
								}
							?>
							>-- Select a Server --</option>
							<?php
								$servers = array("1-vanilla", "2-direwolf17", "3-direwolf110", "4-inf-skyblock", "5-spaceastro", "6-hermit", "7-inf-lite", "8-snapshot", "9-testing");
								$serverNames = array("Vanilla", "Direwolf20 1.7", "Direwolf20 1.10", "Infinity Skyblock", "Space Astronomy", "Hermitpack", "Infinity Lite", "Snapshot", "Testing");
                				$serverCount = count($servers);
								for ($x = 0; $x < $serverCount; $x++) {
									echo '<option value="'.$servers[$x].'"';
									if (($_POST["server"] == $servers[$x]) && ($selected)) {
										echo 'selected';
										$selected = true;
										$selectedServer = $serverNames[$x];
									}
									echo '>'.$serverNames[$x].'</option>';
								}
							?>
                		</select><span class="wl-error">* <?php echo $serverErr;?></span><br><br>
						<input type="submit">
						<br><br>
						<?php
							if ($debugCheck) {
								echo $debug.'<br><br>';
							}
							echo $complete;
						?>
                	</form>
                </div>
            </div>
            <div id="footer">
        		<?php include("../includes/footer.php"); ?>
        	</div>
        </div>
	</body>
</html>