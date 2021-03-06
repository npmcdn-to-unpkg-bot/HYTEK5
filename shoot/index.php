<!doctype html>
<html class="no-js" lang="en">
<?php 
	include('head.php'); 
?>
<body class="homemenu">

	<?php include('preloader.html'); ?>

	<div class="smoke"></div>

<!--div class="block friends">
	<h1>
		<input type="text" placeholder="Search" class="search_friends">
	</h1>
</div-->
<div class="container">
	

<head>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>
</head>

<style>
	.slick-prev {
    	left: -10%;
	}
	.slick-next {
    	right: -10%;
	}
	.slick-dots li button::before {
		color: white;
	}
	.slick-dots li.slick-active button::before {
		color: red;
	}
	.slick-prev, .slick-next{
		height: 100%;
		top: 0;
		width: 120px;
	}
</style>

	<div class="row first">


<div class="single-item">
	<div>
		<div class="col-md-3">
			<div class="block games">
				<h1>Games</h1>
				<img src="img/thumbnail1.png" alt="">
				<a href="games/game.php" id="oom" class="link">only one minute</a></li>
				<a href="#" class="link">waves</a></li>
			</div>
		</div>
		<div class="col-md-3">
			<div class="block leaderboard">
			<?php 
				if(isset($_SESSION['id_player']) != ''){ include('apps/your_score.php')
					?>
					<div class="yourscore">
						<div>
							<div class="ys_list">
								<span class="name"><?php echo "$Name"; ?></span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Your best Score:</span>
								<span class="ys_right"><?php echo "$Score"; ?></span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Your last Score:</span>
								<span class="ys_right"><?php echo "$last_Score"; ?></span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Game Type:</span>
								<span class="ys_right"><?php echo "$GameMode"; ?></span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Time Played:</span>
								<span class="ys_right"><?php echo "$TimePlayed"; ?></span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Coins:</span>
								<span class="ys_right"><?php echo "$coins €"; ?></span>
							</div>
						</div>
					</div>
					<?php
				}else{
					?>
					<div class="yourscore scrollable">
						<div>
							<div class="ys_list">
								<span class="name">Not logged</span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Your best Score:</span>
								<span class="ys_right">None</span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Game Type:</span>
								<span class="ys_right">None</span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Time Played:</span>
								<span class="ys_right">None</span>
							</div>
							<div class="ys_list">
								<span class="ys_left">Coins:</span>
								<span class="ys_right">None</span>
							</div>
						</div>
					</div>
					<?php
				}
			?>
				<h1>Leaderboard</h1>
				<img src="img/trophy.jpg" alt="">
				<div class="leaderboardlist scrollable">
					<?php 
						include('apps/leaderboard_list.php');
					?>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="block options">
				<h1>Options</h1>
				<img src="img/gtx.jpg" alt="">
				<div class="scrollable">

					<?php 
						if (isset($_SESSION['id_player'])) { 
							?>
							<a href="../apps/logout.php" type="button">Logout</a>
							<a type='button' data-toggle='modal' data-target='.boby'>Settings</a>
							<?php
						}else{
							?>
							<a type="button" data-toggle="modal" data-target=".loginmodal">Login / Sign up</a>
							<a type="button" data-toggle="modal" data-target=".loginmodal">Settings (need login)</a>
							<?php
						}
					?>
					<a href="#" id="HS">Help / Support</a>
					


				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="block armory">
				<?php include("armory.php") ?>
			</div>
		</div>		
	</div>
	<div>
		<div class="col-md-3">
			<div class="block news">
				<h1>News</h1>
				<img src="img/news.jpg" alt="">
				<div class="scrollable">
					<p>Next <b>Updates</b>:</p>
					<ul class="list">
						<li>Beat leaderboard score by clicking on user.</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="block hs">
				<h1>Help/Support</h1>
				<img src="img/flag.png" alt="">
				<div class="scrollable">
					<p>If you encontred any problem in game see the list below:</p>
					<ul class="list">
						<li>Close unecessary tabs;</li>
						<li>Videos players like (youtube, vimeo, etc.) can affect game performances close them or use different browser;</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

	</div><!--ROW-->


<script type="text/javascript">
	$(document).ready(function(){
	  $('.single-item').slick({
	      dots: true,
	  });
	});
</script>


		

		

	
	
	<div class="modal fade loginmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">


			<!--TABS-->
			   	<ul class="nav nav-tabs" role="tablist">
					<li class="active">
						<a href="#home" role="tab" data-toggle="tab">Login</a>
					</li>
					<li>
						<a href="#profile" role="tab" data-toggle="tab">Sign up</a>
					</li>
			   	</ul>
			   
			   <!-- Tab panes -->
			   <div class="tabs-content">
					<div class="tab-pane fade active in" id="home">
						<form action="apps/login.php" method="POST">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6">
										<input type="text" name="name" placeholder="Username" />
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<input type="password" name="pass" placeholder="password" />
									</div>
								</div>
							</div>
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<input type="submit" value="ok">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="profile">
						<form action="apps/signup.php" method="POST">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-sm-4 col-md-4">
							<input type="text" name="name" placeholder="Username" />
									</div>
									<div class="col-xs-12 col-sm-4 col-md-4">
							<input type="password" name="pass" placeholder="password" />
									</div>
									<div class="col-xs-12 col-sm-4 col-md-4">
							<input type="password" name="pass2" placeholder="confirm password" />
									</div>
								</div>
							</div>
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<input type="submit" value="ok">
									</div>
								</div>
							</div>
						</form>
					</div>
			   </div>
			   

			</div>
		</div>
	</div>

	<div class="modal fade armorypopup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				
				<?php 
					if(isset($_SESSION['id_player']) != '') { 
						$result = mysqli_query($link, "SELECT * FROM players WHERE id_player = $_SESSION[id_player]");
						while ($row=mysqli_fetch_assoc($result)){
							$coins = $row['coins'];
							$weaponappearance = $row['src'];
							$weaponsound = $row['sound_fire'];
							$weaponsoundreload = $row['sound_reload'];
						};
						?>
						
						<h1>Armory <?php echo $coins; ?> €</h1>
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-sm-12">
										<ul class="nav nav-tabs ">
											<li class="active"><a href="#tab_default_1" data-toggle="tab">Weapon 1</a></li>
											<li><a href="#tab_default_2" data-toggle="tab">Weapon 2</a></li>
										</ul>
									</div>
									<div class="col-sm-12">
										<div class="tab-content">
											<!-- WEAPON 1 -->
											<div class="tab-pane active" id="tab_default_1">
												<div class="row">
													<div class="col-xs-4">
														<form action="set_weapon.php" method="post">
															<label for="appearance">appear (default: cursor5.png)</label>
															<select name="weaponappearance" id="weaponappearance">
																<?php 
																	$dir = "Weapons/cursors/";
																	$dh = opendir($dir);
																	while (false !== ($filename = readdir($dh))) {
																		if ($filename != "." && $filename != "..") {
																			if ($filename == $cursor) {
																				?><option selected value="<?php echo $filename; ?>"><?php echo $filename; ?></option><?php
																			}else{
																				?><option value="<?php echo $filename; ?>"><?php echo $filename; ?></option><?php
																			}
																	    }
																	}
																?>	
															</select>
															<label for="sound">sound: (default: gun.mp3)</label>
															<select name="weaponsound" id="weaponsound" >
																<?php 
																	$dir = "Weapons/fireaudio/";
																	$dh = opendir($dir);
																	while (false !== ($filename = readdir($dh))) {
																		if ($filename != "." && $filename != "..") {
																			if ($filename == $sound_fire) {
																				?><option selected value="<?php echo $filename; ?>"><?php echo $filename; ?></option><?php
																			}else{
																				?><option value="<?php echo $filename; ?>"><?php echo $filename; ?></option><?php
																			}
																	    }
																	}
																?>	
															</select>
															<label for="reload-sound">reload sound: (default: reload.mp3)</label>
															<select name="weaponreloadsound" id="weaponreloadsound">
																<?php 
																	$dir = "Weapons/reloadaudio/";
																	$dh = opendir($dir);
																	while (false !== ($filename = readdir($dh))) {
																		if ($filename != "." && $filename != "..") {
																			if ($filename == $sound_reload) {
																				?><option selected value="<?php echo $filename; ?>"><?php echo $filename; ?></option><?php
																			}else{
																				?><option value="<?php echo $filename; ?>"><?php echo $filename; ?></option><?php
																			}
																	    }
																	}
																?>	
															</select>
															<br>
															<input type="submit" value="apply">
														</form>
													</div>
													<div class="col-xs-8">

															<?php include("apps/preview-weapons.php") ?>

													</div>
													<div class="col-xs-12 col-sm-6 col-md-6">
														<p>Current ammo: <?php echo get($link,"score",$join,$me); ?></p>
														<p>Magazin: 8</p>
														<p>Damage: 50%</p>
														<p>Handle: 0.5</p>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-6">
														<ul class="nav nav-tabs ">
															<li class="active"><a href="#ShopTabAmmo" data-toggle="tab">Ammo</a></li>
															<li><a href="#ShopTabMagazin" data-toggle="tab">Magazines</a></li>
															<li><a href="#ShopTabBullets" data-toggle="tab">Bullets</a></li>
															<li><a href="#ShopTabHandle" data-toggle="tab">Handle</a></li>
														</ul>
														<!-- SHOP -->
														<div class="tab-content">
															<div class="tab-pane active" id="ShopTabAmmo">
																<input type="range">
																<p><a class="btn btn-success" href="#" target="_blank">buy ammo</a></p>
															</div>
															<div class="tab-pane" id="ShopTabMagazin">
																<ul>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																</ul>
															</div>
															<div class="tab-pane" id="ShopTabBullets">
																<ul>
																	<li>
																		<img src="img/shop/bul/bul1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																</ul>
																<p><a class="btn btn-success" href="#" target="_blank">buy bullets</a></p>
															</div>
															<div class="tab-pane" id="ShopTabHandle">
																<ul>
																	<li>
																		<img src="img/shop/hdl/hdl1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																</ul>
																<p><a class="btn btn-success" href="#" target="_blank">buy handle</a></p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- WEAPON 2 -->
											<div class="tab-pane" id="tab_default_2">
												<div class="row">
													<div class="col-xs-12 col-sm-6 col-md-6">
														<p>Current ammo: 150</p>
														<p>Magazin: 5</p>
														<p>Damage: 25%</p>
														<p>Handle: 0.2</p>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-6">
														<ul class="nav nav-tabs ">
															<li class="active"><a href="#ShopTabAmmo" data-toggle="tab">Ammo</a></li>
															<li><a href="#ShopTabMagazin" data-toggle="tab">Magazines</a></li>
															<li><a href="#ShopTabBullets" data-toggle="tab">Bullets</a></li>
															<li><a href="#ShopTabHandle" data-toggle="tab">Handle</a></li>
														</ul>
														<!-- SHOP -->
														<div class="tab-content">
															<div class="tab-pane active" id="ShopTabAmmo">
																<input type="range">
																<p><a class="btn btn-success" href="#" target="_blank">buy ammo</a></p>
															</div>
															<div class="tab-pane" id="ShopTabMagazin">
																<ul>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																</ul>
															</div>
															<div class="tab-pane" id="ShopTabBullets">
																<ul>
																	<li>
																		<img src="img/shop/bul/bul1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																</ul>
																<p><a class="btn btn-success" href="#" target="_blank">buy bullets</a></p>
															</div>
															<div class="tab-pane" id="ShopTabHandle">
																<ul>
																	<li>
																		<img src="img/shop/hdl/hdl1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																</ul>
																<p><a class="btn btn-success" href="#" target="_blank">buy handle</a></p>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					}else {
						echo "<a href='#popup'>Shop (need login)</a>";
					}
				?>
			</div>
		</div>
	</div>
	
	<div class="modal fade boby" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
					<div class="settings">
						<div class="block settings">
							<div class="left-block scrollable">
								<h1>Settings</h1>
								<?php 
									if(isset($_SESSION['id_player']) != ''){
										$result = mysqli_query( $link, "SELECT * FROM settings INNER JOIN players ON settings.id_player=players.id_player INNER JOIN scores ON scores.id_player=players.id_player WHERE players.id_player=$_SESSION[id_player]" );
										while($row = mysqli_fetch_assoc($result)) {
											$Name = $row['player_name'];
											$settings = $row['presets'];
											$music = $row['aud_musics'];
											$ambiance = $row['aud_ambiances'];
											$weapons = $row['aud_weapons'];
											$birds = $row['aud_birds'];
											$bscore = $row['best_score'];

											$music = $music*10;
											$ambiance = $ambiance*10;
											$weapons = $weapons*10;
											$birds = $birds*10;
										}
										?>
										<span class="name"><label for="settings">Player:</label><?php echo $Name; ?></span>
										<form action="settings-up.php" method="GET">
											<br>
											<label for="settings">Presets:</label>
											<?php
												$settings = $settings;
												switch ($settings) {
													case 0: echo "
			                                			
			                                			<select name='settings' id='settings' class='btn-block'>
						                                	<option value='low' selected>low</option>
						                                	<option value='normal'>normal</option>
						                                	<option value='ultra'>ultra</option>
						                                </select>

														"; break;
													case 1: echo "

			                                			<select name='settings' id='settings' class='btn-block'>
			                                				<option value='low'>low</option>
			                                				<option value='normal' selected>normal</option>
			                                				<option value='ultra'>ultra</option>
			                                			</select>

														"; break;
													case 2: echo "

			                                			<select name='settings' id='settings' class='btn-block'>
			                                				<option value='low'>low</option>
			                                				<option value='normal'>normal</option>
			                                				<option value='ultra' selected>ultra</option>
			                                			</select>

														"; break;								
												}
											?>
											<br>
			                                <br><label for="music">Music:</label> 
			                                <input type="range" min="0" max="10" value="<?php echo $music * 10 ; ?>" name="music">
			                                <br><label for="ambiance">Ambiance:</label> 
			                                <input type="range" min="0" max="10" value="<?php echo $ambiance * 10 ; ?>" name="ambiance">
			                                <br><label for="weapons">Weapons:</label> 
			                                <input type="range" min="0" max="10" value="<?php echo $weapons * 10 ; ?>" name="weapons">
			                                <br><label for="birds">Birds:</label> 
			                                <input type="range" min="0" max="10" value="<?php echo $birds * 10 ; ?>" name="birds">
			                                <br><br>	
			                                <input type="submit" value="apply settings">
										</form>
										<form action="reset-score.php" method="GET">
											<label>BEST SCORE:</label><?php echo get($link,"BEST_SCORE","SCORES INNER JOIN players  ON scores.id_player=players.id_player","players.id_player=$_SESSION[id_player]"); ?>
			                                <input type="submit" class="danger" value="reset score">
										</form>
										<?php
									}else{
										?>
										Not logged
										<?php
									}
								?>
							</div>
							<div class="right-block">
							<?php 
								switch ($settings) {
									case 0:
										echo "<link rel='stylesheet' href='stylesheets/low-settings.css'>";
										?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: low-settings.css")});</script><?php
										break;
									case 1:
										echo "<link rel='stylesheet' href='stylesheets/normal-settings.css'>";
										?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: normal-settings.css")});</script><?php
										break;
									case 2:
										echo "<link rel='stylesheet' href='stylesheets/normal-settings.css'>";
										echo "<link rel='stylesheet' href='stylesheets/ultra-settings.css'>";
										?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: ultra-settings.css")});</script>
										<div class="smoke"></div>
										<div class="light"></div><?php
										break;
									
									default:
										echo "<link rel='stylesheet' href='stylesheets/normal-settings.css'>";
										?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: normal-settings.css")});</script><?php
										break;
								}
							?>
								<div class="preview-settings">
									<img src="img/onlyoneminute/moohurun2.gif" style="position:absolute;left: 0px;width: 70px;height: initial;">
								</div>
							</div>
						</div>
					</div><!--ROW-->
			</div>
		</div>
	</div>
	

	<?php
		include('scripts/scripts.php'); 
	?>

</div>
  </body>

</html>
