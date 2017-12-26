<!DOCTYPE html>
<html>
	<head>
		<title>Thermacraft | Whitelister</title>
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
                	<div class="container_title">Whitelister</div>
                	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<?php
							$staffid = array();
							// Owners (Orcinuss, Nerd259, Terrorist1269)
							$owners = array("Orcinuss" => "X0RCA5", "Nerd2259" => "9VOL2G", "Terrorist1269" => "OYZ8S3");
							// Admins (iTRR, Zeutho, Medic_291, Whiskeyfur)
							$admins = array("iTRR" => "HLM2G4", "Zeutho" => "69PCXU", "Medic_291" => "7DTFW8", "Whiskeyfur" => "FCFM37");
							//Networkers (Lurkinwilli, Deathpool, Vartue0_0)
							$networkers = array("Lurkinwilli" => "XGU6J3", "Deathpool707" => "ED7G6Q", "Vartue0_0" => "XYIR97");
							//Mods (Multra1, PyroGabmbler)
							$mods = array("Multra0" => "T8O4RW", "PyroGambler" => "PTZ3A8");
							$staffid = array_merge($owners, $admins, $networkers, $mods);
						?>
                		<?php
                			$usernameErr = $useridErr = $serverErr = $staffMember = $complete = "";
							$selected = $valid = false;
							$debugCheck = false;
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$username = $_POST["username"];
								if (empty($username)) {
									$usernameErr = "You must enter a username";
								} else {
									$username = test($username);
								}
								$userid = $_POST["userid"];
								if (empty($userid)) {
									$useridErr = "You must enter your staff member ID";
								} else {
									$userid = strtoupper(test($userid));
								}
								foreach ($staffid as $staffList => $xID) {
									if ($userid == $xID) {
										$valid = true;
										$useridErr = "";
										$staffMember = $staffList;
										break;
									}
								}
								if ($valid == false) {
									$useridErr = "You must enter a valid staff member ID";
								}
								$server = $_POST["server"];
								if ($server == "0") {
									$serverErr = "You must select a server";
								} else {
									$selected = true;
								}
								if (($username != "") && ($valid == true) && ($server != "0")) {
									$complete = whitelistAdd($username, $server);
									// Debug
									if ($debugCheck) {
										if ($valid) { $validCheck = "true"; }
										else { $validCheck = "false"; }
										if ($selected) { $selectedCheck = "true";}
										else { $selectedCheck = "false"; }
										$debug = "Username: ".$username."<br>Server: ".$server."<br>Staff ID: ".$userid."<br>Staff Member: ".$staffMember."<br>Valid ID = ".$validCheck."<br>Server Selected = ".$selectedCheck;
									}
									// Reset values
									$username = "";
									$userid = "";
									$server = "0";
									$selected = false;
								}
							}
							function test($data) {
								$data = trim($data);
								$data = stripslashes($data);
								$data = htmlspecialchars($data);
								return $data;
							}
							function whitelistAdd($username, $server) {
								$whitelisted = false;
								$dest = "./whitelists/".$server.".txt";
								$whitelistFile = fopen($dest, "a+") or die("Unable to open file!");
								while (!feof($whitelistFile)) {
									if (fgets($whitelistFile) == $username."\n") {
										$message = "This user has already been added to the whitelist.";
										$whitelisted = true;
										break;
									}
								}
								if (!$whitelisted) {
									fwrite($whitelistFile, $username."\n");
									$message = "Whitelist Sucessful!";
								}
								fclose($whitelistFile);
								return $message;
							}
						?>
                		<p>Enter Player Username: <input type="text" name="username" value="<?php echo $username?>"><span class="wl-error"> * <?php echo $usernameErr;?></span></p>
						<select name="server">
							<option value="0"
							<?php
								if (!$selected) {
									$selected = false;
									echo ' selected';
								} else if ($selected && ($username != "") && ($valid == true)) {
									$selected = false;
									echo ' selected';
								}
							?>
							>-- Select a Server --</option>
							<?php
								$servers = array("1-vanilla", "2-direwolf17", "3-direwolf110", "4-inf-skyblock", "5-spaceastro", "6-hermitpack", "7-inf-lite", "8-snapshot", "9-testing");
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
                		</select><span class="wl-error">* <?php echo $serverErr;?></span>
						<p>Enter Staff User ID: <input type="text" name="userid" value="<?php echo $userid?>"><span class="wl-error"> * <?php echo $useridErr;?></span></p>
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