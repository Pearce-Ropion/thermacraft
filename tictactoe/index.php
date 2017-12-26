<!DOCTYPE html>
<html>
	<head>
		<title>Tic Tac Toe</title>
		<link href="./game.css" rel="stylesheet" type="text/css">
		<script src="./game_basic.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="pagewrapper">
			<div id="header">
			</div>
			<div id="content">
				<div id="game">
					<div id="gamewrapper">
						<table id="gamewindow">
							<tr>
								<td><button id="box1" class="box">+</button></td>
								<td><button id="box2" class="box">+</button></td>
								<td><button id="box3" class="box">+</button></td>
							</tr>
							<tr>
								<td><button id="box4" class="box">+</button></td>
								<td><button id="box5" class="box">+</button></td>
								<td><button id="box6" class="box">+</button></td>
							</tr>
							<tr>
								<td><button id="box7" class="box">+</button></td>
								<td><button id="box8" class="box">+</button></td>
								<td><button id="box9" class="box">+</button></td>
							</tr>
						</table>
					</div>
					<div id="btnwrapper">
						<div class="control"><button id="resetbtn" class="ctlbutton">Reset Game</button></div>
						<div class="control"><button class="ctlbutton">Create Counter</button></div>
					</div>
				</div>
				<div id="scorewrapper">
					<table id="scorecounter">
						<tr>
							<th>Player 1</th>
							<th>Player 2</th>
						</tr>
						<tr>
							<th>0</th>
							<th>0</th>
						</tr>
					</table>
				</div>
			</div>
			<div id="footer">
			</div>
		</div>
	</body>
</html>
