<!DOCTYPE HTML>
<html>
<head>
  <title>Calculator</title>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="index.calculate.js"></script>
  <script src="index.input.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href="test.css" rel="stylesheet">
</head>
<body>

<?php session_start();?>

<h1 style="text-align: center;">Inferno Calculator</h1>
<div class="line-separator"></div>
<br> 

<div class="container-fluid" align="center">
  <div class="row">
  	<div class="col-sm-4">Name: <span class="label label-default" id="name"></span></div>
  	<div class="col-sm-4">Best Tier: <span class="label label-default" id="besttier"></span></div>
  	<div class="col-sm-4">Highest Tier: <span class="label label-default" id="highesttier"></span></div>
  </div>
  <div class="row">
  	<div class="col-sm-4">Level: <span class="label label-default" id="header-level"></span></div>
  	<div class="col-sm-4">Best Xp/Hour: <span class="label label-default" id="bestxp"></span></div>
  	<div class="col-sm-4">Highest Xp/Hour: <span class="label label-default" id="highestxp"></span></div>
  </div>
    <div class="row">
  	<div class="col-sm-4">DPS: <span class="label label-default" id="dps"></span></div>
  	<div class="col-sm-4">Best Gold/Hour: <span class="label label-default" id="bestgold"></span></div>
  	<div class="col-sm-4">Highest Gold/Hour: <span class="label label-default" id="highestgold"></span></div>
  </div>
</div>

<br>

<div class="line-separator"></div>

<div class="bs-example">
    <ul class="nav nav-tabs">
    	<li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle dropdown-test" href="#">Game <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#challenge">Challenges</a></li>
                <li><a data-toggle="tab" href="#orb">Orbs</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle dropdown-test" href="#">Upgrades <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#auto">Auto</a></li>
                <li><a data-toggle="tab" href="#ascension">Ascension</a></li>
                <li><a data-toggle="tab" href="#account">Account</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle dropdown-test" href="#">Character <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#character">Character</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle dropdown-test" href="#">Guild <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#guild">Guild</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle dropdown-test" href="#">Pets <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#pets">Pets</a></li>
            </ul>
        </li>
    </ul>
    <div class="tab-content">
        <div id="challenge" class="tab-pane fade">
            <h3>Challenges</h3>
            <form class="form-horizontal" role="form">
            	<div class="form-group">
					<label for="challengeseries" class="col-sm-2 control-label">Challenge Series:</label>
				    <div class="col-sm-2 input-group">
				    	<input type="text" class="form-control" id="challengeseries" aria-describedby="basic-addon2">
				    	<span class="input-group-addon" id="basic-addon2">%</span>
				    </div>
				</div>
				<div class="form-group">
					<label for="challengemilestone" class="col-sm-2 control-label">Challenge Milestone:</label>
				    <div class="col-sm-2 input-group">
				    	<input type="text" class="form-control" id="challengemilestone" aria-describedby="basic-addon2">
				    	<span class="input-group-addon" id="basic-addon2">%</span>
				    </div>
				</div>
            </form>
        </div>
        <div id="orb" class="tab-pane fade">
            <h3>Orbs</h3>
            <form class="form-horizontal" role="form">
            	<div class="form-group">
					<label for="soulautodamage" class="col-sm-2 control-label">Auto Damage:</label>
				    <div class="col-sm-2 input-group">
				    	<input type="text" class="form-control" id="soulautodamage" aria-describedby="basic-addon2">
				    	<span class="input-group-addon" id="basic-addon2">%</span>
				    </div>
				</div>
				<div class="form-group">
					<label for="sxr" class="col-sm-2 control-label">Xp Rate:</label>
				    <div class="col-sm-2 input-group">
				    	<input type="text" class="form-control" id="sxr" aria-describedby="basic-addon2">
				    	<span class="input-group-addon" id="basic-addon2">%</span>
				    </div>
				</div>
				<div class="form-group">
					<label for="soulcritdamage" class="col-sm-2 control-label">Crit Damage:</label>
				    <div class="col-sm-2 input-group">
				    	<input type="text" class="form-control" id="soulcritdamage" aria-describedby="basic-addon2">
				    	<span class="input-group-addon" id="basic-addon2">%</span>
				    </div>
				</div>
				<div class="form-group">
					<label for="sgr" class="col-sm-2 control-label">Gold Rate:</label>
				    <div class="col-sm-2 input-group">
				    	<input type="text" class="form-control" id="sgr" aria-describedby="basic-addon2">
				    	<span class="input-group-addon" id="basic-addon2">%</span>
				    </div>
				</div>
            </form>
        </div>
        <div id="auto" class="tab-pane fade">
            <h3>Auto</h3>
            <form class="form-horizontal" role="form">
            	<div class="form-group">
					<label for="autospeed" class="col-sm-2 control-label">Auto Speed:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="autospeed">
				    </div>
				</div>
				<div class="form-group">
					<label for="autodamage" class="col-sm-2 control-label">Auto Base Damage:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="autodamage">
				    </div>
				</div>
				<div class="form-group">
					<label for="autocritchance" class="col-sm-2 control-label">Auto Crit Chance:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="autocritchance">
				    </div>
				</div>
				<div class="form-group">
					<label for="autocritmult" class="col-sm-2 control-label">Auto Crit Multiplier:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="autocritmult">
				    </div>
				</div>
				<div class="form-group">
					<label for="autodouble" class="col-sm-2 control-label">Auto Double Attack:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="autodouble">
				    </div>
				</div>
            </form>
        </div>
        <div id="ascension" class="tab-pane fade">
            <h3>Ascension</h3>
            <form class="form-horizontal" role="form">
            	<div class="form-group">
					<label for="ascensionautodamage" class="col-sm-2 control-label">Auto Damage:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="ascensionautodamage">
				    </div>
				</div>
				<div class="form-group">
					<label for="ascensionautospeed" class="col-sm-2 control-label">Auto Speed:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="ascensionautospeed">
				    </div>
				</div>
				<div class="form-group">
					<label for="ascensionautocrit" class="col-sm-2 control-label">Auto Crit:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="ascensionautocrit">
				    </div>
				</div>
				<div class="form-group">
					<label for="axb" class="col-sm-2 control-label">Xp Boost:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="axb">
				    </div>
				</div>
				<div class="form-group">
					<label for="agb" class="col-sm-2 control-label">Gold Boost:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="agb">
				    </div>
				</div>
				<div class="form-group">
					<label for="apb" class="col-sm-2 control-label">Party Boost:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="apb">
				    </div>
				</div>
            </form>
        </div>
        <div id="account" class="tab-pane fade">
            <h3>Account</h3>
            <form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="ag" class="col-sm-2 control-label">Gold Boost:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="ag">
				    </div>
				</div>
				<div class="form-group">
					<label for="ae" class="col-sm-2 control-label">Exp Boost:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="ae">
				    </div>
				</div>
 			</form>
        </div>
        <div id="character" class="tab-pane fade">
            <h3>Character</h3>
            <form class="form-horizontal" role="form">
            	<div class="form-group">
					<label for="level" class="col-sm-2 control-label">Character Level:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="level">
				    </div>
				</div>
            	<div class="form-group">
					<label for="sl" class="col-sm-2 control-label">Support Level:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="sl">
				    </div>
				</div>
				<div class="form-group">
					<label for="ep" class="col-sm-2 control-label">Event Points:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="ep">
				    </div>
				</div>
				<div class="form-group">
					<label for="carddamage" class="col-sm-2 control-label">Card Damage:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="carddamage">
				    </div>
				</div>
				<div class="form-group">
					<label for="challengeboost" class="col-sm-2 control-label">Challenge Boost:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="challengeboost">
				    </div>
				</div>
            </form>
        </div>
        <div id="guild" class="tab-pane fade">
            <h3>Guild</h3>
            <form class="form-horizontal" role="form">
           		<div class="form-group">
					<label for="ga" class="col-sm-2 control-label">Altar Level:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="ga">
				    </div>
				</div>
				<div class="form-group">
					<label for="guildbasedamage" class="col-sm-2 control-label">Base Damage Level:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="guildbasedamage">
				    </div>
				</div>
				<div class="form-group">
					<label for="gee" class="col-sm-2 control-label">Xp Enhance Level:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="gee">
				    </div>
				</div>
				<div class="form-group">
					<label for="gge" class="col-sm-2 control-label">Gold Enhance Level:</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" id="gge">
				    </div>
				</div>
            </form>
        </div>
        <div id="pets" class="tab-pane fade">
            <h3>Pets</h3>
            <form class="form-horizontal" role="form">
            	<h3 style="color: red;">WORKIN' ON IT</h3>
            </form>
        </div>
    </div>
</div>

</div>
<div class="calculate-container">
	<input class="calculate" type="button" value="Calculate/Save" onclick="calculate();">
</div>

<script>

var name = '<?php echo $_SESSION['data']; ?>';
$(function() {
	$("#name").html('Potato');
	$("#besttier").html('0');
	$("#highesttier").html('0');
	$("#header-level").html('0');
	$("#bestxp").html('0');
	$("#highestxp").html('0');
	$("#dps").html('0');
	$("#bestgold").html('0');
	$("#highestgold").html('0');
    $.getJSON('lookup.php', function (result) {
      console.log(result);
      $("#name").text(result.name);
      $("#level").val(result.level);
      $("#ae").val(result.ae);
      $("#ag").val(result.ag);
      $("#agb").val(result.agb);
      $("#axb").val(result.axb);
      $("#apb").val(result.apb);
      $("#ep").val(result.ep);
      $("#ga").val(result.ga);
      $("#gee").val(result.gee);
      $("#gge").val(result.gge);
      $("#sgr").val(result.sgr);
      $("#sl").val(result.sl);
      $("#sxr").val(result.sxr);
      $("#challengeboost").val(result.ChallengeBoosts);
	  $("#challengeseries").val(result.ChallengeSeries);
	  $("#challengemilestone").val(result.ChallengeMilestone);
	  $("#guildbasedamage").val(result.GuildDamage);
	  $("#carddamage").val(result.CardDamage);
	  $("#soulautodamage").val(result.SoulAutoDamage);
	  $("#soulcritdamage").val(result.SoulCritDamage);
	  $("#autospeed").val(result.AutoSpeed);
	  $("#autodamage").val(result.AutoBaseDamage);
	  $("#autocritchance").val(result.AutoCritChance);
	  $("#autocritmult").val(result.AutoCritMultiplier);
	  $("#autodouble").val(result.AutoDoubleAttack);
	  $("#ascensionautodamage").val(result.AscensionAutoDamage);
	  $("#ascensionautospeed").val(result.AscensionAutoSpeed);
	  $("#ascensionautocrit").val(result.AscensionAutoCrit);
	  calculate1();
    });
});
function calculate1(){
  //var dps = document.getElementById("partydps").value;
  //var parsedps = parseFloat(dps.replace(/,/g, ''));
  //var xs1 = document.getElementById("partymembers").value;
  //var xs2 = [0, 1, 0.7, 0.5, 0.4];
  //var xs3 = xs2[xs1];
  //var gb = 0;
  var sl = $("#sl").val();
  var slb = [0.04, 0.08, 0.12, 0.16, 0.2, 0.24, 0.28, 0.32, 0.36, 0.40, 0.45, 0.50, 0.55, 0.60, 0.65, 0.70, 0.75, 0.80, 0.85, 0.90];
  var sleg = slb[(sl - 1)];
  var ep = $("#ep").val();
  var ep1 = (ep < 25 ? Math.floor(ep / 10) * 10 - (ep > 19 ? 10 : 0) : Math.floor(ep / 25) * 25);
  var epm = ["10"];
  for (var x = 1; x <= 50; x++) {
    epm.push(x * 25);
  }
  var ep2 = epm.indexOf(ep1);
  //var epexp = ep2 * 0.01;
  //var epgold = ep2 * 0.03;
  //var ga = 0.005 * $("#ga").val();
  //var gee = 0.01 * $("#gee").val();
  //var gge = 0.01 * $("#gge").val();
  //var sxr = $("#sxr").val() / 100;
  //var sgr = $("#sgr").val() / 100;
  //var ae = $("#ae").val();
  //var ae1 = (ae < 6 ? 0.04 * ae : 0.2 + (ae < 10 ? (ae - 5) * 0.02 : 0.1 + (ae - 10) * 0.01));
  //var ag = $("#ag").val();
  //var ag1 = (ag < 6 ? 0.04 * ag : 0.2 + (ag < 10 ? (ag - 5) * 0.02 : 0.1 + (ag - 10) * 0.01));
  //var apb = 0.1 * $("#apb").val();
  //var axb = 0.05 * $("#axb").val();
  //var agb = 0.05 * $("#agb").val();
  //var ig = 0.25 + ($("#level").val() - 200) * 0.03;
  //var expboost = ((1 + gee + ga + sleg + ae1 + epexp + axb) * (1 + gb)) * (1 + apb) * (1 + sxr);
  //var goldboost = ((gge + ga + ig + sleg + ag1 + epgold + 0.775 + agb) * (1 + gb)) * (1 + apb) * (1 + sgr);
  //var xpformula = [];
  //var goldformula = [];
  //var bestvalue = [];

  //for (var i = 0; i <= 400; i++) {
  //  xpformula.push(Math.round(3600 / (((1 - 0.019) * Math.round((Math.pow(100 + 150 * i, 2) + 6) * (1 + i / 100 + Math.floor(i / 100) * 0.1 + Math.floor(i / 10) / 50 + Math.floor(i / 25) / 20) * (1 - 0.1875)) / parsedps) + ((0.019) * (Math.round((Math.pow(100 + 150 * i, 2) + 6) * (1 + i / 100 + Math.floor(i / 10) / 50 + Math.floor(i / 25) / 20) * (1 - 0.1875)) * 4) / parsedps) + 1.5) * Math.round((100 + 150 * i) * (1 + ((100 + 150 * i) * 0.003)) * ((1 + (i * 0.003)) * (1 + Math.floor(i * 0.01, 1) * 0.03)) * xs3) * (Math.round((Math.pow(100 + 150 * i, 2) + 6) * (1 + (i > 99 ? i / 100 + Math.floor(i / 100) * 0.1 : i / 100) + Math.floor(i / 10) / 50 + Math.floor(i / 25) / 20) * (1 - 0.1875)) / parsedps > 51.25 ? 0 : 1)));

  //  goldformula.push(Math.round(3600 / (((1 - 0.019) * Math.round((Math.pow(100 + 150 * i, 2) + 6) * (1 + i / 100 + Math.floor(i / 100) * 0.1 + Math.floor(i / 10) / 50 + Math.floor(i / 25) / 20) * (1 - 0.1875)) / parsedps) + 0.019 * (Math.round((Math.pow(100 + 150 * i, 2) + 6) * (1 + i / 100 + Math.floor(i / 10) / 50 + Math.floor(i / 25) / 20) * (1 - 0.1875)) * 4) / parsedps + 1.5) * (1 - 0.019) * Math.pow(100 + 150 * i, (1.48)) * 1.5 * xs3 + 3600 / (((1 - 0.019) * Math.round((Math.pow(100 + 150 * i, 2) + 6) * (1 + (i > 99 ? i / 100 + Math.floor(i / 100) * 0.1 : i / 100) + Math.floor(i / 10) / 50 + Math.floor(i / 25) / 20) * (1 - 0.1875)) / parsedps) + 0.019 * (Math.round((Math.pow(100 + 150 * i, 2) + 6) * (1 + i / 100 + Math.floor(i / 10) / 50 + Math.floor(i / 25) / 20) * (1 - 0.1875)) * 4) / parsedps + 1.5) * 0.019 * Math.pow(100 + 150 * i, (1.48)) * 1.5 * xs3 * 19.04 * (1 + 0.9)));

  //  bestvalue.push(Math.log(xpformula[i]) / Math.log(1.1) + Math.log(goldformula[i]) / Math.log(1.22));
  //}

  //var best = Math.max.apply(Math, bestvalue);
  //var besttier = bestvalue.indexOf(best);
  //var bestxp = xpformula[besttier];
  //var bestxp1 = Math.round(bestxp * expboost);
  //var bestxp2 = bestxp1.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  //var bestgold = goldformula[besttier];
  //var bestgold1 = Math.round(bestgold * goldboost * 4.13);
  //var bestgold2 = bestgold1.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

  //var highestxp = Math.max.apply(Math, xpformula);
  //var highestxp1 = Math.round(highestxp * expboost);
  //var highestxp2 = highestxp1.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  //var highesttier = xpformula.indexOf(highestxp);
  //var highestgold = goldformula[highesttier];
  //var highestgold1 = Math.round(highestgold * goldboost * 4.13);
  //var highestgold2 = highestgold1.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

  //document.getElementById("bestxp").innerHTML = "Best Xp/Hour:" + "" + bestxp2;
  //document.getElementById("bestgold").innerHTML = "Best Gold/Hour:" + "" + bestgold2;
  //document.getElementById("besttier").innerHTML = "Best Inferno Tier:" + "" + besttier;

  //document.getElementById("highestxp").innerHTML = "Highest Xp/Hour:" + "" + highestxp2;
  //document.getElementById("highestgold").innerHTML = "Highest Gold/Hour:" + "" + highestgold2;
  //document.getElementById("highesttier").innerHTML = "Highest Inferno Tier:" + "" + highesttier;

  var petDamage = 0;
  var dc = [0.0200,0.0400,0.0600,0.0800,0.1000,0.1100,0.1200,0.1300,0.1400,0.1500,0.1550,0.1600,0.1650,0.1700,0.1750,0.1800,0.1850,0.1900,0.1950,0.2000,0.2050,0.2100,0.2150,0.2200,0.2250,0.2255,0.2260,0.2265,0.2270,0.2275,0.2280,0.2285,0.2290,0.2295,0.2300,0.2305,0.2310,0.2315,0.2320,0.2325,0.2330,0.2335,0.2340,0.2345,0.2350,0.2355,0.2360,0.2365,0.2370,0.2375,0.2380,0.2385,0.2390,0.2395,0.2400,0.2405,0.2410,0.2415,0.2420,0.2425,0.2430,0.2435,0.2440,0.2445,0.2450,0.2455,0.2460,0.2465,0.2470,0.2475,0.2480,0.2485,0.2490,0.2495,0.2500,0.2505,0.2510,0.2515,0.2520,0.2525,0.2530,0.2535,0.2540,0.2545,0.2550,0.2555,0.2560,0.2565,0.2570,0.2575,0.2580,0.2585,0.2590,0.2595,0.2600,0.2605,0.2610,0.2615,0.2620,0.2625,0.2626,0.2627,0.2628,0.2629,0.2630,0.2631,0.2632,0.2633,0.2634,0.2635,0.2636,0.2637,0.2638,0.2639,0.2640,0.2641,0.2642,0.2643,0.2644,0.2645,0.2646,0.2647,0.2648,0.2649,0.2650,0.2651,0.2652,0.2653,0.2654,0.2655,0.2656,0.2657,0.2658,0.2659,0.2660,0.2661,0.2662,0.2663,0.2664,0.2665,0.2666,0.2667,0.2668,0.2669,0.2670,0.2671,0.2672,0.2673,0.2674,0.2675,0.2676,0.2677,0.2678,0.2679,0.2680,0.2681,0.2682,0.2683,0.2684,0.2685,0.2686,0.2687,0.2688,0.2689,0.2690,0.2691,0.2692,0.2693,0.2694,0.2695,0.2696,0.2697,0.2698,0.2699,0.2700,0.2701,0.2702,0.2703,0.2704,0.2705,0.2706,0.2707,0.2708,0.2709,0.2710,0.2711,0.2712,0.2713,0.2714,0.2715,0.2716,0.2717,0.2718,0.2719,0.2720,0.2721,0.2722,0.2723,0.2724,0.2725];
  var cc = [0.02000,0.04000,0.06000,0.08000,0.10000,0.11000,0.12000,0.13000,0.14000,0.15000,0.15250,0.15500,0.15750,0.16000,0.16250,0.16500,0.16750,0.17000,0.17250,0.17500,0.17750,0.18000,0.18250,0.18500,0.18750,0.18850,0.18950,0.19050,0.19150,0.19250,0.19350,0.19450,0.19550,0.19650,0.19750,0.19850,0.19950,0.20050,0.20150,0.20250,0.20350,0.20450,0.20550,0.20650,0.20750,0.20850,0.20950,0.21050,0.21150,0.21250,0.21350,0.21450,0.21550,0.21650,0.21750,0.21850,0.21950,0.22050,0.22150,0.22250,0.22350,0.22450,0.22550,0.22650,0.22750,0.22850,0.22950,0.23050,0.23150,0.23250,0.23350,0.23450,0.23550,0.23650,0.23750,0.23850,0.23950,0.24050,0.24150,0.24250,0.24350,0.24450,0.24550,0.24650,0.24750,0.24850,0.24950,0.25050,0.25150,0.25250,0.25350,0.25450,0.25550,0.25650,0.25750,0.25850,0.25950,0.26050,0.26150,0.26250,0.26275,0.26300,0.26325,0.26350,0.26375,0.26400,0.26425,0.26450,0.26475,0.26500,0.26525,0.26550,0.26575,0.26600,0.26625,0.26650,0.26675,0.26700,0.26725,0.26750,0.26775,0.26800,0.26825,0.26850,0.26875,0.26900,0.26925,0.26950,0.26975,0.27000,0.27025,0.27050,0.27075,0.27100,0.27125,0.27150,0.27175,0.27200,0.27225,0.27250,0.27275,0.27300,0.27325,0.27350,0.27375,0.27400,0.27425,0.27450,0.27475,0.27500,0.27525,0.27550,0.27575,0.27600,0.27625,0.27650,0.27675,0.27700,0.27725,0.27750,0.27775,0.27800,0.27825,0.27850,0.27875,0.27900,0.27925,0.27950,0.27975,0.28000,0.28025,0.28050,0.28075,0.28100,0.28125,0.28150,0.28175,0.28200,0.28225,0.28250,0.28275,0.28300,0.28325,0.28350,0.28375,0.28400,0.28425,0.28450,0.28475,0.28500,0.28525,0.28550,0.28575,0.28600,0.28625,0.28650,0.28675,0.28700,0.28725,0.28750];
  var autosp = [0.0200,0.0400,0.0600,0.0800,0.1000,0.1100,0.1200,0.1300,0.1400,0.1500,0.1550,0.1600,0.1650,0.1700,0.1750,0.1800,0.1850,0.1900,0.1950,0.2000,0.2050,0.2100,0.2150,0.2200,0.2250,0.2275,0.2300,0.2325,0.2350,0.2375,0.2400,0.2425,0.2450,0.2475,0.2500,0.2525,0.2550,0.2575,0.2600,0.2625,0.2650,0.2675,0.2700,0.2725,0.2750,0.2775,0.2800,0.2825,0.2850,0.2875,0.2900,0.2925,0.2950,0.2975,0.3000,0.3025,0.3050,0.3075,0.3100,0.3125,0.3150,0.3175,0.3200,0.3225,0.3250,0.3275,0.3300,0.3325,0.3350,0.3375,0.3400,0.3425,0.3450,0.3475,0.3500,0.3525,0.3550,0.3575,0.3600,0.3625,0.3650,0.3675,0.3700,0.3725,0.3750,0.3775,0.3800,0.3825,0.3850,0.3875,0.3900,0.3925,0.3950,0.3975,0.4000,0.4025,0.4050,0.4075,0.4100,0.4125,0.4135,0.4145,0.4155,0.4165,0.4175,0.4185,0.4195,0.4205,0.4215,0.4225,0.4235,0.4245,0.4255,0.4265,0.4275,0.4285,0.4295,0.4305,0.4315,0.4325,0.4335,0.4345,0.4355,0.4365,0.4375,0.4385,0.4395,0.4405,0.4415,0.4425,0.4435,0.4445,0.4455,0.4465,0.4475,0.4485,0.4495,0.4505,0.4515,0.4525,0.4535,0.4545,0.4555,0.4565,0.4575,0.4585,0.4595,0.4605,0.4615,0.4625,0.4635,0.4645,0.4655,0.4665,0.4675,0.4685,0.4695,0.4705,0.4715,0.4725,0.4735,0.4745,0.4755,0.4765,0.4775,0.4785,0.4795,0.4805,0.4815,0.4825,0.4835,0.4845,0.4855,0.4865,0.4875,0.4885,0.4895,0.4905,0.4915,0.4925,0.4935,0.4945,0.4955,0.4965,0.4975,0.4985,0.4995,0.5005,0.5015,0.5025,0.5035,0.5045,0.5055,0.5065,0.5075,0.5085,0.5095,0.5105,0.5115,0.5125];
  var CritDmgMultiplier = $('#autocritmult').val() * 0.01 + $('#ascensionautocrit').val() * 0.1;
  var CritDmgSoulOrb = $('#soulcritdamage').val() / 100;
  var baseCritChance = $('#autocritchance').val();
  var baseCritChance = cc[baseCritChance-1];
  var baseDoubleChance = $('#autodouble').val();
  var baseDoubleChance = dc[baseDoubleChance-1];
  var autospeed = $('#autospeed').val();
  var ascensionautospeed = $('#ascensionautospeed').val() * 0.02;
  var aps = 2 * (1 - ascensionautospeed - autosp[autospeed-1]);
  var autodamage = $('#autodamage').val();
  var carddamage = $('#carddamage').val();
  var guildbasedamage = Math.pow($('#guildbasedamage').val()+1, 2) * 10;
  var challengeboost = $('#challengeboost').val();
  var ascensionautodamage = $('#ascensionautodamage').val() * 0.05;
  var eventdamage = (ep2<6 ? ep2*0.05 : (ep2-5)*0.03+0.25);
  var supportdamage = (sl<11 ? sl*0.02 : 0.2+(sl-10)*0.015);
  var infernolevel = ($('#level').val() - 200);
  var infernodamage = infernolevel * 0.025;
  var soulautodamage = $("#soulautodamage").val() / 100;
  var challengedamage = $("#challengeseries").val() / 100 + $("#challengemilestone").val() / 100;
  var infernobasedamage = Math.pow(20 * infernolevel, 1.3);
  var totalbasedamage = Number(infernobasedamage) + Number(carddamage) + Number(guildbasedamage) + Number(challengeboost);
  var autodamage = Math.pow(200, 1.35)+50*Math.pow(autodamage-200, 1.2) + totalbasedamage;
  var damage = 1.1 * autodamage * (1 + ascensionautodamage + eventdamage) * (1 + supportdamage) * (1 + infernodamage) * (1 + soulautodamage) * (1 + challengedamage);

  var critDamage = damage * (1 + CritDmgMultiplier) * (1 + CritDmgSoulOrb); 
  var critChance = (1 - baseDoubleChance) * baseCritChance;

  var doubleDamage = damage * 2;  
  var doubleChance = (1 - baseCritChance) * baseDoubleChance;

  var doubleCritDamage = critDamage * 2;
  var doubleCritChance = baseCritChance * baseDoubleChance;

  var regularDamage = damage;
  var regularChance = (1 - baseCritChance) * (1 - baseDoubleChance); 

  var averageDamage = doubleDamage * doubleChance + critDamage * critChance + doubleCritDamage * doubleCritChance + regularDamage * regularChance;

  var dps = Math.round(averageDamage / aps + petDamage);
  var dps = dps.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")

  $("#dps").html(dps);
  var level = $("#level").val();
  $("#header-level").html(level);
}
</script>
</body>
</html>