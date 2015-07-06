<!DOCTYPE html>
<html>
<head>
	<link href="style.css" rel="stylesheet">
	<script src="jquery-1.10.2.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>

<body>

<?php include_once('nav.php'); ?>

<div class="container">
<h1 style="text-align:center">Games</h1>

<div class="games">
	<div class="content" onmouseover="showdiv('mousemaze')" onmouseout="hidediv('mousemaze')">
		<a href="games/Mouse_Maze/index.html"><img class='resize_fit_center' src="images/games/mousemaze_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('clickchase')" onmouseout="hidediv('clickchase')">
		<a href="games/Click_Chase/index.html"><img class='resize_fit_center' src="images/games/clickchase_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('matchvsmouse')" onmouseout="hidediv('matchvsmouse')">
		<a href="games/Match_vs_Mouse/index.html"><img class='resize_fit_center' src="images/games/matchvsmouse_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('physicsphase')" onmouseout="hidediv('physicsphase')">
		<a href="games/Physics_Phase/index.html"><img class='resize_fit_center' src="images/games/physicsphase_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('tag')" onmouseout="hidediv('tag')">
		<a href="games/Tag/index.html"><img class='resize_fit_center' src="images/games/tag_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('physicschallenge')" onmouseout="hidediv('physicschallenge')">
		<a href="games/Physics_Challenge/index.html"><img class='resize_fit_center' src="images/games/physicschallenge_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('skyfall')" onmouseout="hidediv('skyfall')">
		<a href="games/Skyfall/index.html"><img class='resize_fit_center' src="images/games/skyfall_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('hueracer')" onmouseout="hidediv('hueracer')">
		<a href="games/Hue_Racer/index.html"><img class='resize_fit_center' src="images/games/hueracer_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('slideshooter')" onmouseout="hidediv('slideshooter')">
		<a href="games/Slide_Shooter/index.html"><img class='resize_fit_center' src="images/games/slideshooter_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('tangled')" onmouseout="hidediv('tangled')">
		<a href="games/Tangled/index.html"><img class='resize_fit_center' src="images/games/tangled_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('spydance')" onmouseout="hidediv('spydance')">
		<a href="games/Spy_Dance/index.html"><img class='resize_fit_center' src="images/games/spydance_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('tagwithatwist')" onmouseout="hidediv('tagwithatwist')">
		<a href="games/Tag_With_A_Twist/index.html"><img class='resize_fit_center' src="images/games/tagwithatwist_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('infinitarium')" onmouseout="hidediv('infinitarium')">
		<a href="games/Infinitarium/index.html"><img class='resize_fit_center' src="images/games/infinitarium_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('thecore')" onmouseout="hidediv('thecore')">
		<a href="games/The_Core/index.html"><img class='resize_fit_center' src="images/games/thecore_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('wordthief')" onmouseout="hidediv('wordthief')">
		<a href="games/Word_Thief/index.html"><img class='resize_fit_center' src="images/games/wordthief_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('randomaze')" onmouseout="hidediv('randomaze')">
		<a href="games/Randomaze/index.html"><img class='resize_fit_center' src="images/games/randomaze_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('shadows')" onmouseout="hidediv('shadows')">
		<a href="games/Shadows/index.html"><img class='resize_fit_center' src="images/games/shadows_grid.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('slingshot')" onmouseout="hidediv('slingshot')">
		<a href="games/Slingshot/index.html"><img class='resize_fit_center' src="images/games/slingshot.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('diskskip')" onmouseout="hidediv('diskskip')">
		<a href="games/Disk_Skip/index.html"><img class='resize_fit_center' src="images/games/diskskip.png"></a>
	</div>

	<div class="content" onmouseover="showdiv('selector')" onmouseout="hidediv('selector')">
		<a href="games/Selector/index.html"><img class='resize_fit_center' src="images/games/selector.png"></a>
	</div>
</div>

<div class="description">
	<div id="mousemaze" class="hidden">
		<ul>
			<li>Players: 1</li>
			<li>Input: MOUSE</li>
			<li>Controls:
				<ul>
					<li>Left-click the yellow tile to begin.</li>
					<li>Hold left-click to drag the yellow tile.</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Turn all white tiles green by moving the yellow one over them to complete each level (each level adds four additional tiles).</li>
					<li>Avoid touching anything but the white tiles!</li>
					<li>Beat the clock and see how far you can get!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="clickchase" class="hidden">
		<ul>
			<li>Players: 1</li>
			<li>Input: MOUSE</li>
			<li>Controls:
				<ul>
					<li>Direct the pair of footprints by aiming your mouse.</li>
					<li>Alternate left and right-clicks to move your character.</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Collect the moving pink circles.</li>
					<li>Don't get hit by the red ones!</li>
					<li>Avoid enemies by moving/clicking slowly. Enemies within the yellow circle will chase after you!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="matchvsmouse" class="hidden">
		<ul>
			<li>Players: 1</li>
			<li>Input: MOUSE</li>
			<li>Controls:
				<ul>
					<li>Left-click to select a square.</li>
					<li>Left-click a selected square to unselect it.</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Match two squares of the same color to eliminate them.</li>
					<li>Avoid mismatching colors!</li>
					<li>Earn more points by making faster matches! But be careful... the faster you match, the faster their colors will change!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="physicsphase" class="hidden">
		<ul>
			<li>Players: 1</li>
			<li>Input: KEYBOARD, MOUSE</li>
			<li>Controls:
				<ul>
					<li>Left-click the white shapes to drag and move them.</li>
					<li>Release the left mouse button to position the shapes.</li>
					<li>Press Spacebar to start the game.</li>
					<li>Press '1' to make all red shapes visible, '2' for green, and '3' for blue.</li>
					<li>Hold or tap left-click to interact with ball using your mouse (as the green bar above it is not depleted).</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Collect the stars using the blue/white ball by bouncing it off different shapes.</li>
					<li>Use fewer shapes and left-clicks to earn more points.</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="tag" class="hidden">
		<ul>
			<li>Players: 2-4</li>
			<li>Input: KEYBOARD, MOUSE</li>
			<li>Controls:
				<ul>
					<li>Move left and right using the following keys:
						<ul>
							<li>Player 1: 'A' and 'S'</li>
							<li>Player 2: 'K' and 'L'</li>
							<li>Player 3: Left and right arrow keys</li>
							<li>Player 4: Left and right mouse buttons</li>
						</ul>
					</li>
					<li>Jump by holding one direction and tapping the opposite direction (double jump by tapping twice).</li>
					<li>Jump on the black platform in the first room to become an active player.</li>
					<li>Press Spacebar to start the game.</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>White squares, avoid the red one!</li>
					<li>Red square, tag a white one before you vanish!</li>
					<li>Touch the floor or walls to double or wall jump.</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="physicschallenge" class="hidden">
		<ul>
			<li>Players: 1</li>
			<li>Input: MOUSE</li>
			<li>Controls:
				<ul>
					<li>Move left and right using the corresponding mouse buttons.</li>
					<li>Jump by holding one direction and tapping the opposite direction (double jump by tapping twice).</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Use the snow to locate invisible blocks.</li>
					<li>Touch the blocks to earn points!</li>
					<li>Touch the blocks' surface or sides to double or wall jump.</li>
					<li>Avoid going out of the screen!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="skyfall" class="hidden">
		<ul>
			<li>Players: 1-4</li>
			<li>Input: KEYBOARD, MOUSE</li>
			<li>Controls:
				<ul>
					<li>Move left and right using the following keys:
						<ul>
							<li>Player 1: 'A' and 'S'</li>
							<li>Player 2: 'K' and 'L'</li>
							<li>Player 3: Left and right arrow keys</li>
							<li>Player 4: Left and right mouse buttons</li>
						</ul>
					</li>
					<li>Jump by holding one direction and tapping the opposite direction (double and wall jumps have been removed).</li>
					<li>Jump on the black platform in the first room to become an active player.</li>
					<li>Press Spacebar to start the game.</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Avoid getting hit by the falling characters!</li>
					<li>Climb on them to reach the top!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="hueracer" class="hidden">
		<ul>
			<li>Players: 1-4</li>
			<li>InputL KEYBOARD, MOUSE</li>
			<li>Controls:
				<ul>
					<li>Select one color or a combination of blue, red, and yellow using the following keys:
						<ul>
							<li>Player 1: 'A', 'S', and 'D'</li>
							<li>Player 2: 'J', 'K', and 'L'</li>
							<li>Player 3: Left, down, and right arrow keys</li>
							<li>Player 4: Left, middle, and right mouse buttons</li>
						</ul>
					</li>
					<li>Press the blue and red keys to select purple, blue and yellow for green, and red and yellow for orange.</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Match the track color to advance your racer (the dots).</li>
					<li>Be the first to cross the finish line!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="slideshooter" class="hidden">
		<ul>
			<li>Players: 1</li>
			<li>Input: KEYBOARD, MOUSE</li>
			<li>Controls:
				<ul>
					<li>Use 'W', 'A', 'S', and 'D' to move when next to a black block.</li>
					<li>Left-click the red squares to destroy them!</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Keep moving to prevent your health from depleting!</li>
					<li>Avoid the red squares!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="tangled" class="hidden">
		<ul>
			<li>Players: 1</li>
			<li>Input: KEYBOARD</li>
			<li>Controls:
				<ul>
					<li>Use the 'W', 'A', 'S', and 'D' keys to move.</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Catch the red blocks to earn points!</li>
					<li>Avoid the black blocks and lines.</li>
					<li>Do not let the red blocks touch the lines or you will lose points!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="spydance" class="hidden">
		<ul>
			<li>Players: 2</li>
			<li>Input: KEYBOARD, MOUSE</li>
			<li>Controls:
				<ul>
					<li>Player 1 (Keyboard):
						<ul>
							<li>When not in dance-mode, use 'W', 'A', 'S', and 'D' to move.</li>
							<li>Enter dance-mode with 'W' and 'S' or 'A' and 'D'.</li>
							<li>When in dance-mode, press 'A' to turn blue, 'S' red, 'D' yellow, or two at once for green, orange, or purple.</li>
							<li>Press 'W' to exit dance-mode.</li>
						</ul>
					</li>
					<li>Player 2 (Mouse):
						<ul>
							<li>Left-click to shoot the squares.</li>
							<li>Middle-click to mark suspicious squares.</li>
							<li>Right-click to start a party!</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Player 1 (Keyboard):
						<ul>
							<li>Blend with the other squares by moving and matching their colors until you are one of four remaining squares!</li>
						</ul>
					</li>
					<li>Player 2 (Mouse):
						<ul>
							<li>Eliminate the player-controlled square.</li>
							<li>Start dance parties to make the spy slip up!</li>
							<li>Use your ammo wisely. Three missed shots is a loss!</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="tagwithatwist" class="hidden">
		<ul>
			<li>Players: 2-4</li>
			<li>Input: KEYBOARD</li>
			<li>Controls:
				<ul>
					<li>Click on the arrows to customize the game settings.</li>
					<li>Press Spacebar to start the game.</li>
					<li>Move up, down, left, or right using:
						<ul>
							<li>Player 1: 'W', 'S', 'A', and 'D'</li>
							<li>Player 2: Arrow keys</li>
							<li>Player 3: 'I', 'K', 'J', and 'L'</li>
							<li>Player 4: 'T', 'G', 'F', and 'H'</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Normal:
						<ul>
							<li>Earn points by possessing no "it" squares.</li>
							<li>Tag someone else if you have an "it" square!</li>
							<li>Destroy extra squares by colliding them with the green block!</li>
						</ul>
					</li>
					<li>Freeze:
						<ul>
							<li>If you are "it", freeze at least one square from every player (including yourself) to win!</li>
							<li>Otherwise, avoid getting frozen and unfreeze others by tagging them!</li>
							<li>Destroy extra squares by colliding them with the green block!</li>
						</ul>
					</li>
					<li>Virus:
						<ul>
							<li>Every square tagged by the red one becomes "it"!</lI>
							<li>Control the last not-"it" square to win!</li>
							<li>Become not-"it" by touching the green block (if no "it" exists, a new one will be chosen at random)!</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="infinitarium" class="hidden">
		<ul>
			<li>Players: 1</li>
			<li>Input: KEYBOARD</li>
			<li>Controls:
				<ul>
					<li>Move left and right using 'A' and 'D' or the corresponding arrow keys.</li>
					<li>Jump by pressing 'W' or the up arrow.</li>
					<li>Duck by pressing 'S' or the down arrow.</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Earn points by going as far as you can!</li>
					<li>Dodge obstacles by moving back and forth, jumping, and falling faster by ducking!</li>
				</ul>	
			</li>
		</ul>
	</div>
	<div id="thecore" class="hidden">
		<ul>
			<li>Players: 1-4</li>
			<li>Input: KEYBOARD, MOUSE</li>
			<li>Controls:
				<ul>
					<li>Rotate left and right using:
						<ul>
							<li>Player 1: 'A' and 'D'</li>
							<li>Player 2: 'J' and 'L'</li>
							<li>Player 3: Left and right arrows</li>
							<li>Player 4: Left and right mouse buttons</li>
						</ul>
					</li>
					<li>Move your triangle to the green half of circle to become an active player.</li>
					<li>Press Spacebar to start the game.</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Eliminate all the rotating black squares to proceed to the next stage!</li>
					<li>Dodge the bullets that automatically spawn!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="wordthief" class="hidden">
		<ul>
			<li>Players: 1</li>
			<li>Input: KEYBOARD</li>
			<li>Controls:
				<ul>
					<li>Type "UP", "DOWN", "LEFT", or "RIGHT" to change your character's direction.</li>
					<li>Type "WALK", "GO", or "RUN" to move your character (can be combined with a directional command such as "RUN RIGHT").</li>
					<li>Type "STOP" to halt your character in his tracks.</li>
					<li>Press Enter to confirm your command or Backspace to erase it.</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Collect treasure chests while avoiding the hazards!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="randomaze" class="hidden">
		<ul>
			<li>Players: 2-4</li>
			<li>Input: KEYBOARD</li>
			<li>Controls:
				<ul>
					<li>Move up, down, left, or right using:
						<ul>
							<li>Player 1 (blue): 'W', 'S', 'A', or 'D'</li>
							<li>Player 2 (green): 'I', 'K', 'J', or 'L'</li>
							<li>Player 3 (red): Up, down, left, or right arrow key</li>
							<li>Player 4 (yellow): Numpads 8, 5, 4, or 6.</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Increase your score by moving and creating new squares!</li>
					<li>Hit a black square or another player's and you're out!</li>
					<li>Last player standing or with most points wins!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="shadows" class="hidden">
		<ul>
			<li>Players: 1</li>
			<li>Input: KEYBOARD, MOUSE</li>
			<li>Controls:
				<ul>
					<li>Press or hold the right mouse button to move the white circle.</li>
					<li>Drag the squares by holding the left mouse button.</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Evade the other circles!</li>
					<li>Shift your line of view to combine and project different colors.</li>
					<li>Eliminate your pursuers and earn points by matching their color with your vision's!</li>
					<li>Don't let the enemies touch the blocks or their light will shut off temporarily!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="slingshot" class="hidden">
		<ul>
			<li>Players: 1</li>
			<li>Input: MOUSE</li>
			<li>Controls:
				<ul>
					<li>To move your character (like a slingshot):
						<ul>
							<li>Left-click your character (or the house that he is in)</li>
							<li>Hold the left mouse button while moving your mouse</li>
							<li>Release the left mouse button</li>
						</ul>
					</li>
					<li>To use your firearm:
						<ul>
							<li>Right-click your character (or the house that he is in)</li>
							<li>Hold the right mouse button while moving your mouse</li>
							<li>Release the right mouse button</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Do not get overwhelmed and surrounded by zombies!</li>
					<li>Kill zombies and pick up dropped ammunitions (which disappear after 5 seconds).</li>
					<li>Move from house to house for protection!</li>
					<li>Maintain your movement speed by avoiding zombies and not straying away from houses!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="diskskip" class="hidden">
		<ul>
			<li>Players: 1</li>
			<li>Input: MOUSE</li>
			<li>Controls:
				<ul>
					<li>Slingshot your square by holding, dragging, and releasing the left mouse button anywhere on the screen.</li>
					<li>Cancel your launch by holding the right mouse button and releasing the left one.</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Hit the white squares to earn points!</li>
					<li>Avoid the red squares!</li>
					<li>Hit the yellow squares to destroy all other squares on the screen!</li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="selector" class="hidden">
		<ul>
			<li>Players: 1</li>
			<li>Input: MOUSE</li>
			<li>Controls:
				<ul>
					<li>Hold the left mouse button and drag your mouse to create a box.</li>
					<li>Right-click to cancel creating a box.</li>
				</ul>
			</li>
			<li>Objectives:
				<ul>
					<li>Earn points by creating boxes to trap the green circles!</li>
					<li>Avoid trapping any red circles!</li>
				</ul>
			</li>
		</ul>
	</div>
</div>
</div>

</body>
</html>