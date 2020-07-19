<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Pokemon Party Randomizer</title>
	<meta name="description" content="This is a Pokemon Red and Blue Team Randomizer which Randomizes your Team before every battle.">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body style="background-color:rgb(41, 43, 44);color:white">
<div class="col-12">
	<div class="container">
		<br>
		<h1 class="text-center">Pokemon Team Randomizer Red/Blue</h1><br><br>
		
		<p class="text-center">This is a Pokemon Red and Blue Team Randomizer which Randomizes your Team before every battle.<br>
		It keeps your old Pokemons Levels, IVs, EVs and HP and translates based on that stats for a new random Pokemon with new random moves.</p><br><br>
		
		<p class="text-center">The Idea came from the <a href="https://www.youtube.com/user/Smallantone">Youtuber Smallant1</a>, but this project is entirely created by
		me and is in no way affiliated with him.
		It also has its own quirks to make this challenge run a new and interesting one.</p><br><br>
		<div class="embed-responsive embed-responsive-16by9">		
			<div id="ytplayer"></div>
		</div>

		<script>
		  // Load the IFrame Player API code asynchronously.
		  var tag = document.createElement('script');
		  tag.src = "https://www.youtube.com/player_api";
		  var firstScriptTag = document.getElementsByTagName('script')[0];
		  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
		  var player;
		  function onYouTubePlayerAPIReady() {
			player = new YT.Player('ytplayer', {
			  videoId: 'kFxBww6433c'
			});
		  }
		</script>
		
		<a class="btn btn-danger btn-lg btn-block" href="https://github.com/JumpyWizard-projects/Pokemon-Team-Randomizer-Red-Blue/archive/master.zip" role="button">Download</a><br><br><br>
		
		<div class="text-center">
			<img src="images/2020.01.09-16.50-2-1076x967.png" class="rounded" style="height:50%;width:50%">
		</div>
		<br>
		<div class="text-center">
			<img src="images/2020.01.09-16.50-01-2-1072x963.png" class="rounded" style="height:50%;width:50%">
		</div>
		<br>
		<p class="text-center">Text tutorial on how to use the Programm:<br>
		<p class="text-center">1.Get the <a href="https://github.com/TASVideos/BizHawk/releases">Bizhawk Emulator.</a><br>
		<p class="text-center">It allows for you to run the custom lua Programms like this one.<br>
		<p class="text-center">2.Get a Pokemon Red or Blue ROM.<br>
		<p class="text-center">I can't provide a ROM, but you found this site so you probably wont be havingany problem finding this one.<br>
		<p class="text-center">3.Extract the files and open Emuhawk.exe Drag and Drop the ROM first into the Window and Then the Programm.<br>
		<p class="text-center">4.Have fun playing :)<br><br>
		
		<p class="text-center">This Project is Open-Source and written in LUA which makes it easy to mod or use for porting it.<br>
		You can directly view it <a href="https://github.com/JumpyWizard-projects/Pokemon-Team-Randomizer-Red-Blue">here on Github</a> or use the downloaded .lua file.<br>
		To understand the code i highly recommend the <a href="http://tasvideos.org/Bizhawk/LuaFunctions.html">Bizhawk guide on memory editing with LUA</a> and the <a href="https://datacrystal.romhacking.net/wiki/Pok%C3%A9mon_Red/Blue:RAM_map">Crystal Ram Map for Pokemon Red and Blue</a>(use CTRL+F to Search for the use cases of memory addresses).</p>
		
		
	</div>
</div>
</body>
</html>