<?
/********************************
v1.0 by myK | 2019-02-20
********************************/
include 'conf/conf.php';
include 'conf/lang.php';

$cf = $conf[$lang];
?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$conf[$lang]['title']?></title>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nanum+Gothic">

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/main.css">

<style>
.ui-selectmenu-button.ui-button { width: 5em; }
</style>
<body class="light-grey content" style="max-width:1600px">

<!-- start : Sidebar/menu -->
<nav class="sidebar collapse white animate-left" style="z-index:3;width:300px;top:0px;" id="mySidebar">
	<div class="display-container">
		<img src="images/img_mein_2019_02_12.png" style="width:100%;" class="round">
		<br />
		<div class="display-topleft container text-black">
			<h3><b><?=$cf['my_name']?></b></h3>
		</div>
		<div class="display-bottomleft container text-black">
			<h6><span class="ui-icon ui-icon-suitcase"></span><?=$conf[$lang]['my_job']?></h6>
			<h6><span class="ui-icon ui-icon-home"></span><?=$conf[$lang]['my_address']?></h6>
		</div>
<!-- p class="text-grey"></p -->
	</div>

	<div class="bar-block">
		<a href="#portfolio"><button onclick="nav_close()" class="bar-item button padding black ui-state-active"><i class="ui-icon ui-icon-contact"></i><?=$cf['portfolio']?></button></a>
		<a href="#about"><button onclick="nav_close()" class="bar-item button padding"><i class="ui-icon ui-icon-script"></i><?=$cf['about']?></button></a>
		<a href="#contact"><button onclick="nav_close()" class="bar-item button padding"><i class="ui-icon ui-icon-mail-closed"></i><?=$cf['contact']?></button></a>
	</div>
	
	<!-- div class="panel large">
		<i class="fa fa-facebook-official hover-opacity"></i>
		<i class="fa fa-instagram hover-opacity"></i>
		<i class="fa fa-snapchat hover-opacity"></i>
		<i class="fa fa-pinterest-p hover-opacity"></i>
		<i class="fa fa-twitter hover-opacity"></i>
		<i class="fa fa-linkedin hover-opacity"></i>
	</div -->
</nav>
<!-- end : Sidebar/menu -->

<!-- Overlay effect when opening sidebar on small screens -->
<div class="overlay hide-large animate-opacity" onclick="nav_close();" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="main" style="margin-left:300px">

<!-- Header -->
<header class="hide-large">
	<div class="section bottombar" style="height:4em;"> 
		<a href="#"><img src="images/img_mein_2019_02_12.png" style="width:40px;" class="circle left margin-right margin-left buton hide-large hover-opacity" onclick="nav_open();"></a>
		<a href="#portfolio"><button class="button black ui-state-active"><i class="ui-icon ui-icon-contact"></i><span class="hide-small"><?=$cf['portfolio']?></span></button></a>
		<a href="#about"><button class="button white"><i class="ui-icon ui-icon-script"></i><span class="hide-small"><?=$cf['about']?></span></button></a>
		<a href="#contact"><button class="button white"><i class="ui-icon ui-icon-mail-closed"></i><span class="hide-small"><?=$cf['contact']?></span></button></a>
		<span class="right margin-right">
		<select class="button white" id="select_lang" name="select_lang">
			<option>EN</option>
			<option>DE</option>
			<option>KO</option>
		</select>
		</span>
	</div>
</header>

<a href="#" id="menu" class="hide-large" style="position:fixed;top:1em;right:1em;z-index:3"><img src="images/img_mein_2019_02_12.png" style="width:40px;" class="circle right buton hover-opacity" onclick="nav_open();"></a>
<div class="container padding-large" style="margin-bottom:32px" id="portfolio" >
	<h4><b><?=$cf['portfolio']?></b></h4>
	<!-- start : Portfolio -->
	<div class="row-padding">
<? foreach ($cf['my_exp'] as $k=>$v) {
	$url = "images/nourl.png";
?>
	<div class="third container margin-bottom" id="p_<?=$k?>">
		<img src="<?=$url?>" style="width:100%" class="hover-opacity">
		<div class="container white">
			<p><b><?=$v['name']?></b></p>
			<p><?=$v['content']?></p>
		</div>
	</div>
<? } ?>
</div>
</div>

<!-- Pagination -->
<div class="center padding-32">
<div class="bar">
<a href="#" class="bar-item button hover-black">«</a>
<a href="#" class="bar-item black button">1</a>
<a href="#" class="bar-item button hover-black">2</a>
<a href="#" class="bar-item button hover-black">3</a>
<a href="#" class="bar-item button hover-black">4</a>
<a href="#" class="bar-item button hover-black">»</a>
</div>
</div>

<!-- Images of Me 
<div class="row-padding padding-16" >
	<div class="col m6">
	<img src="/w3images/avatar_g.jpg" alt="Me" style="width:100%">
	</div>
	<div class="col m6">
	<img src="/w3images/me2.jpg" alt="Me" style="width:100%">
	</div>
</div>
-->

<div class="container padding-large gray" style="margin-bottom:32px" id="about">
	<h4><b><?=$cf['about']?></b></h4>
	<p>
	<!-- Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. -->
	</p>
	<hr>
	<div class="row-padding">
		<div class=" half padding-16 margin-bottom">
			<h4><i class="ui-icon ui-icon-wrench"></i> Technical Skills</h4>
			<div class="light-gray round-xlarge margin-top margin-bottom"><div class="display-position padding text-white ">
			PHP : </div><div class="round-xlarge indigo padding center" style="width:95%">95%</div></div>
			<div class="light-gray round-xlarge margin-top margin-bottom"><div class="display-position padding text-white">
			C : </div><div class="round-xlarge indigo padding center" style="width:85%">85%</div></div>
			<div class="light-gray round-xlarge margin-top margin-bottom"><div class="display-position padding text-white">
			Java : </div><div class="round-xlarge indigo padding center" style="width:80%">80%</div></div>
		
			<p><button class="button black ui-state-active padding-large margin-top margin-bottom"><i class="ui-icon ui-icon-disk"></i> Download Resume</button></p>
		</div>
		<div class="half padding-16">
			<h4><i class="ui-icon ui-icon-comment"></i> Languages</h4>
			<div class="light-gray round-xlarge margin-top margin-bottom"><div class="display-position padding text-white ">
			<?=$cf['english']?> : </div><div class="round-xlarge indigo padding center" style="width:85%">85%</div></div>
			<div class="light-gray round-xlarge margin-top margin-bottom"><div class="display-position padding text-white ">
			<?=$cf['german']?> : </div><div class="round-xlarge indigo padding center" style="width:75%">75%</div></div>
			<div class="light-gray round-xlarge margin-top margin-bottom"><div class="display-position padding text-white ">
			<?=$cf['japanish']?> : 50%</div><div class="round-xlarge indigo padding" style="width:50%;">&nbsp;</div></div>
		</div>
	</div>
</div>

<!-- Pricing Tables --
<h4>How much I charge</h4>
<div class="row-padding" style="margin:0 -16px">
<div class="third margin-bottom">
<ul class="ul border white center opacity hover-opacity-off">
<li class="black xlarge padding-32">Basic</li>
<li class="padding-16">Web Design</li>
<li class="padding-16">Photography</li>
<li class="padding-16">1GB Storage</li>
<li class="padding-16">Mail Support</li>
<li class="padding-16">
<h2>$ 10</h2>
<span class="opacity">per month</span>
</li>
<li class="light-grey padding-24">
<button class="button teal padding-large hover-black">Sign Up</button>
</li>
</ul>
</div>

<div class="third margin-bottom">
<ul class="ul border white center opacity hover-opacity-off">
<li class="teal xlarge padding-32">Pro</li>
<li class="padding-16">Web Design</li>
<li class="padding-16">Photography</li>
<li class="padding-16">50GB Storage</li>
<li class="padding-16">Endless Support</li>
<li class="padding-16">
<h2>$ 25</h2>
<span class="opacity">per month</span>
</li>
<li class="light-grey padding-24">
<button class="button teal padding-large hover-black">Sign Up</button>
</li>
</ul>
</div>

<div class="third">
<ul class="ul border white center opacity hover-opacity-off">
<li class="black xlarge padding-32">Premium</li>
<li class="padding-16">Web Design</li>
<li class="padding-16">Photography</li>
<li class="padding-16">Unlimited Storage</li>
<li class="padding-16">Endless Support</li>
<li class="padding-16">
<h2>$ 25</h2>
<span class="opacity">per month</span>
</li>
<li class="light-grey padding-24">
<button class="button teal padding-large hover-black">Sign Up</button>
</li>
</ul>
</div>
</div>
</div>

<!-- Contact Section -->
<div class="container padding-large">
<h4 id="contact"><b><?=$cf['contact']?></b></h4>
<div class="row-padding center padding-24 cell-middle" style="margin:0 -16px">
<div class="third dark-grey">
<p><i class="ui-icon ui-icon-white ui-icon-mail-closed"></i> <?=$cf['my_email']?></p>
</div>
<div class="third indigo">
<p><i class="ui-icon ui-icon-white ui-icon-flag"></i> <?=$cf['my_address']?></p>
</div>
<div class="third dark-grey">
<p><i class="ui-icon ui-icon-white ui-icon-lightbulb"></i> <?=$cf['my_handy']?></p>
</div>
</div>
<hr class="opacity">
<form action="/contact.php" target="_blank">
<div class="section">
<label><?=$cf['name']?></label>
<input class="input border" type="text" name="name" required>
</div>
<div class="section">
<label><?=$cf['email']?></label>
<input class="input border" type="text" name="email" required>
</div>
<div class="section">
<label><?=$cf['message']?></label>
<input class="input border" type="text" name="message" required>
</div>
<button type="submit" class="button black margin-bottom"><i class="ui-icon ui-icon-mail-closed"></i><?=$cf['send_msg']?></button>
</form>
</div>

<!-- Footer -->
<footer class="container padding-32 dark-grey">
<div class="row-padding">
<div class="third">
<h3>FOOTER</h3>
<p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
<p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</div>

<div class="third">
<h3>BLOG POSTS</h3>
<ul class="ul hoverable">
<li class="padding-16">
<img src="/images/nourl.png" class="left margin-right" style="width:50px">
<span class="large">Lorem</span><br>
<span>Sed mattis nunc</span>
</li>
<li class="padding-16">
<img src="/images/nourl.png" class="left margin-right" style="width:50px">
<span class="large">Ipsum</span><br>
<span>Praes tinci sed</span>
</li> 
</ul>
</div>

<div class="third">
<h3>POPULAR TAGS</h3>
<p>
<span class="tag black margin-bottom">Travel</span> <span class="tag grey small margin-bottom">New York</span> <span class="tag grey small margin-bottom">London</span>
<span class="tag grey small margin-bottom">IKEA</span> <span class="tag grey small margin-bottom">NORWAY</span> <span class="tag grey small margin-bottom">DIY</span>
<span class="tag grey small margin-bottom">Ideas</span> <span class="tag grey small margin-bottom">Baby</span> <span class="tag grey small margin-bottom">Family</span>
<span class="tag grey small margin-bottom">News</span> <span class="tag grey small margin-bottom">Clothing</span> <span class="tag grey small margin-bottom">Shopping</span>
<span class="tag grey small margin-bottom">Sports</span> <span class="tag grey small margin-bottom">Games</span>
</p>
</div>

</div>
</footer>

<div class="black center padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="hover-opacity">w3.css</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function nav_open() {
	document.getElementById("mySidebar").style.display = "block";
	document.getElementById("myOverlay").style.display = "block";
}

function nav_close() {
	document.getElementById("mySidebar").style.display = "none";
	document.getElementById("myOverlay").style.display = "none";
}

$( "#select_lang" ).val("<?=$lang?>").change();

function ch_lang(lang) {
	console.log(lang);
//	window.location.href = window.location.href+"?lang="+lang;
}

// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);

$(window).on("scroll", function(){
	if ($(window).scrollTop() > 50) {
		$("#menu").removeClass("overlay");
	} else {
		$("#menu").addClass("overlay");
	};
});
</script>

</body>
</html>
