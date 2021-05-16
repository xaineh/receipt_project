<!DOCTYPE html>
<html>
<head>
	<title>Home || trans-here</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=10'>
    <link rel="icon" type="text/css" href="pix/icon.png">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="js/main.js"></script>
    <script>
    var _CONTENT = [ 
	"\“Concentrate all your thoughts on the great desire in your life. This concentration must be continuous, unceasing – every minute; every hour; every day; every week.\” (Charles E. Popplestone)", 
	"\“Whatever you can do, or dream you can, begin it. Boldness has genius, power and magic in it.\” (Johann Wolfgang von Goethe)", 
	"\“There is one quality that one must possess to win, and that is definiteness of purpose, the knowledge of what one wants, and a burning desire to achieve it\” (Napoleon Hill)"
];
// Current sentence being processed
var _PART = 0;

// Character number of the current sentence being processed 
var _PART_INDEX = 0;

// Holds the handle returned from setInterval
var _INTERVAL_VAL;

// Element that holds the text
var _ELEMENT = document.querySelector("#text");

// Cursor element 
var _CURSOR = document.querySelector("#cursor");

// Implements typing effect
function Type() { 
	// Get substring with 1 characater added
	var text =  _CONTENT[_PART].substring(0, _PART_INDEX + 1);
	document.querySelector("#text").innerHTML = text;
	_PART_INDEX++;

	// If full sentence has been displayed then start to delete the sentence after some time
	if(text === _CONTENT[_PART]) {
		// Hide the cursor
		document.querySelector("#cursor").style.display = 'none';

		clearInterval(_INTERVAL_VAL);
		setTimeout(function() {
			_INTERVAL_VAL = setInterval(Delete, 50);
		}, 250);
	}
}

// Implements deleting effect
function Delete() {
	// Get substring with 1 characater deleted
	var text =  _CONTENT[_PART].substring(0, _PART_INDEX - 1);
	document.querySelector("#text").innerHTML = text;
	_PART_INDEX--;

	// If sentence has been deleted then start to display the next sentence
	if(text === '') {
		clearInterval(_INTERVAL_VAL);

		// If current sentence was last then display the first one, else move to the next
		if(_PART == (_CONTENT.length - 1))
			{
				_PART = 0;
			}
		else
			{
				_PART++;
		
		_PART_INDEX = 0;
			}

		// Start to display the next sentence after some time
		setTimeout(function() {
			var _CURSOR = document.querySelector("#cursor");
			_CURSOR.style.display = 'inline-block';
			_INTERVAL_VAL = setInterval(Type, 100);
		}, 200);
	}
}

// Start the typing effect on load
_INTERVAL_VAL = setInterval(Type, 90);
	</script>
</head>
<body onscroll="enhanceScrolTop()">
	<nav class="header">
		<div class="box-content">
			<div>
				<img src="" id="logo_im">
			</div>
			<div id="menu-box">
				<ul>
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Whitepaper</a>
					</li>
					<li>
						<a href="#affiliate">Our Affiliate</a>
					</li>
					<li>
						<a href="review.php">Sign up</a>
						<ul>
							<li>
								<a href="#">Sign In</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#help">Help</a>
					</li>
					<li>
						<a href="#footer">About</a>
					</li>
				</ul>
			</div>
		</div>
	</nav><!--END OF HEADER--->
	<section class="hero_img">
		<div class="hero-content">
			<span>Explore....</span> trans-present yourself while...
		</div>
		<div class="right stay_connected">
			<p style="color: white; font-size: 28px; padding-right: 4rem;">Our Vision</p>
			<span class="vision">Your prime time: never goes waste</span>
		</div>
		<div id="container" style="width: 400px; padding: 0 1.4rem; margin-top: 2rem;">
			<div style="color: white; font-size: 22px; text-transform: uppercase;">Your Payoff: &nbsp; <span style="font-weight: bold; font-size: 19px !important;">time management!</span></div>
	<div id="text" style="color: white; font-family: cursive; text-decoration: underline;font-size: 15px; text-indent: 1rem; margin-top: 1rem;"></div><div id="cursor"></div>
</div>
	</section><!--END OF WALLPAPER-->
	<h2 align="center"  class="about_title" style="margin-top: 8rem !important;">ease on...</h2>
	<div class="description">
		<div class="explains_steps">
			<ul>
				<li>
					<span>Steps to trans-air...</span>
				</li>
				<li>
					<span class="nos">1</span> Proceed to <a href="signup.php" class="illustrator">Signup</a>, if new
				</li>
				<li>
					<span class="nos">2</span> Once signed in, <span class="illustrator">tap translation</span>
				</li>
				<li>
					<span class="nos">3</span>Follow the proceed and explore unlimitedly...
				</li>
				<li>
					<span class="nos">4</span>Your notification will sent to you, once your receipt is ready.
				</li>
				<li>
					<span class="nos">5</span>Get to explore, by <a href="#footer" class="illustrator">click here</a>
				</li>
			</ul>
		</div>
		<div class="has_img">
			<div id="des_container">
				<span>You recieve receipt after the distribution Your prime time: never goes waste Your prime time: never goes waste Your prime time: never goes waste</span>
			</div>
		</div>
	</div><!--END OF HINT-->
	<h2 align="center" class="about_title" style="margin-bottom: 3rem;" id="affiliate">Our Affiliate</h2>
	<div class="cont_affiliate" style="box-shadow: 3px 12px 6px 2px #fcf8fa;">
		<div class="affi_cont">
			<div id="servix_cont"><img src="pix/pbc.jpg" >
				<div class="clone">874</div>
			</div>
		</div>
		<div class="affi_cont">
			<div id="servix_cont"><img src="pix/pbc.jpg" >
				<div class="clone">432</div>
			</div>
		</div>
		<div class="affi_cont">
			<div id="servix_cont"><img src="pix/pbc.jpg" >
				<div class="clone">134</div>
			</div>
		</div>
		<div class="affi_cont">
			<div id="servix_cont"><img src="pix/pbc.jpg" >
				<div class="clone">824</div>
			</div>
		</div>
		<div class="affi_cont">
			<div id="servix_cont"><img src="pix/pbc.jpg" >
				<div class="clone">119</div>
			</div>
		</div>
	</div><!--END OF AFFILIATE-->
	<div class="qstion_cont" id="help">
		<h2 align="center" class="about_title" >F.A.Qs</h2>
		<h2 align="center" class="freq">Frequently Asked Questions?</h2>
		<h4 align="center" class="freq">(click to suggestions below to view frequently asked question)</h4>
		<div class="qstion">
			<ul>
				<li>
					<span onclick="slide('#hide')" id="show">
						<font class="entities"></font>Who do i get my receipt after sending the transaction ID?</span>
					<div class="answer" id="hide">
						giat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
					</div>
				</li>
			</ul>
		</div>
	</div><!--END OF FREQUENTLY ASKED QUESTION-->
	<?php require 'footer.php'; ?>
</body>
</html>