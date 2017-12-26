<!DOCTYPE html>
<html>
	<head>
		<title>Thermacraft | Changelog</title>
		<link href="../css/core.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="http://thermacraft.us/images/favicon/flame32.png">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Arvo|Audiowide|Aladin">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script>
			$(document).ready(function() {
				$(".hashlink").click(function() {
					var hash = $(this).text();
					console.log(hash);
					if(hash == 'Back to Top' || hash == '(back to top)')
						$('html, body').animate({  scrollTop: 0 }, 1000);
					else $('html, body').animate({ scrollTop: $("#" + hash).offset().top - 120}, 1000);
				});
			});
		</script>
		<script>
			function dropdown() {
    			document.getElementById("DropMenu").classList.toggle("show");
			}
			window.onclick = function(event) {
  				if (!event.target.matches('.dropbtn')) {
    				var dropdowns = document.getElementsByClassName("dropdown-content");
    				var i;
    				for (i = 0; i < dropdowns.length; i++) {
     					var openDropdown = dropdowns[i];
      					if (openDropdown.classList.contains('show')) {
        					openDropdown.classList.remove('show');
      					}
    				}
  				}
			}
		</script>
	</head>
	<body>
    	<div id="page-wrapper">
        	<div id="header">
            	<?php include("../includes/header.php"); ?>
            </div>
            <div id="content">
            	<div class="container">
                	<div class="container_title">Thermacraft Changelog</div>
                    <div class="button">
                        <button onclick="dropdown()" class="cl-dropbtn">Revision Updates</button>
                        <div id="DropMenu" class="cl-dropdown-content">
                            <ul class="revision">
                                <li class="hashlink"><a>09-19-16</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="updates">
                    	<div id="09-19-16">
                        	<div class="cl_date">Log: 09 - 19 - 16</div>
                            <div class="cl_type">Infinity Skyblock Server</div>
                            	<ul class="cl_list">
                            		<li>Fixed AFK timer kick (30 mins)</li>
                                    <li>Fixed all kits</li>
                            	</ul>
                            <div class="cl_type">Space Astronomy Server</div>
                            	<ul class="cl_list">
                            		<li>Built spawn</li>
                            	</ul>
                            <div class="cl_type">FTB Unstable Server</div>
                            	<ul class="cl_list">
                            		<li>Sponge plugin testing has begun</li>
                                    <li>Mods being tested for severity</li>
                            	</ul>
                            <div class="cl_type">Teamspeak Server</div>
                            	<ul class="cl_list">
                            		<li>Developer rank permissions stripped</li>
                                    <ul>
                                    	<li>Only a title - to be used for plugin developers</li>
                                    </ul>
                            	</ul>
                            <div class="cl_type">Website</div>
                            	<ul class="cl_list">
                            		<li>Modules updated to show new servers</li>
                                    <li>Removed Infinity server status and application</li>
                                    <li>Added Goals page for all servers</li>
                                    <li>Added Shop page for all servers</li>
                                    <li>Updated applications to no longer show installation method (in favor of Curse Launcher)</li>
                            	</ul>
                            <div class="segment"></div>
                        </div>
                        <!--<div id="vmm-dd-yy">
                        	<div class="cl_date">Log: mm - dd - yy</div>
                            <div class="cl_type">Direwolf20 Server</div>
                            	<ul class="cl_list">
                            		<li></li>
                            	</ul>
                            <div class="cl_type">Infinity Skyblock Server</div>
                            	<ul class="cl_list">
                            		<li></li>
                            	</ul>
                            <div class="cl_type">Space Astronomy Server</div>
                            	<ul class="cl_list">
                            		<li></li>
                            	</ul>
                            <div class="cl_type">FTB Unstable Server</div>
                            	<ul class="cl_list">
                            		<li></li>
                            	</ul>
                            <div class="cl_type">Teamspeak Server</div>
                            	<ul class="cl_list">
                            		<li></li>
                            	</ul>
                            <div class="cl_type">Website</div>
                            	<ul class="cl_list">
                            		<li></li>
                            	</ul>
                            <div class="segment"></div>
                        </div>-->
                    </div>
                </div>
            </div>
            <div id="footer">
        		<?php include("../includes/footer.php"); ?>
        	</div>
        </div>
	</body>
</html>