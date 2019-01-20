<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>BTC Bouncer</title>
    <meta name="keywords" content="BTC bitcoin">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta property="og:title" content="BTC Bouncer">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <!-- Styles -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900%7CMontserrat:400,700"
      rel="stylesheet"
      type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/modernizr-2.7.1.js"></script>
    <script type="text/javascript" src="js/qrcode.min.js"></script>
    <script type="text/javascript">
    function copyToClipboard(element) {
  	var $temp = $("<input>");
  	$("body").append($temp);
  	$temp.val($(element).text()).select();
  	document.execCommand("copy");
  	$temp.remove();
    }
    </script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header"> <button type="button" class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-collapse">
            <span class="icon-bar"></span> <span class="icon-bar"></span> <span
              class="icon-bar"></span>
          </button> <a class="logo white"  href="index.html">BTC Bouncer</a> </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#be-the-first" class="scroll">How it works?</a></li>
            <li><a href="#pricing">Statistics</a></li>
          </ul>
        </div>
        <!--/.navbar-collapse --> </div>
    </div>
    <header>
      <div class="container">
        <div class="row header-info">
          <div class="col-sm-10 col-sm-offset-1 text-center">
            <h1 class="wow fadeIn">BTC Bouncer</h1>
            <br>
            <p class="lead wow fadeIn" data-wow-delay="0.5s">Play with testnet
              BTC.</p>
            <br>
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="row">
                  <div class="col-xs-6 text-right wow fadeInUp" data-wow-delay="1s">
                    <a href="#be-the-first" class="btn btn-secondary btn-lg scroll">How
                      it works?</a> </div>
                  <div class="col-xs-6 text-left wow fadeInUp" data-wow-delay="1.4s">
                    <a href="#pricing" class="btn btn-primary btn-lg scroll">Statistics</a> </div>
                </div>
                <!--End Button Row--> </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="mouse-icon hidden-xs">
      <div class="scroll"></div>
    </div>
    <section id="be-the-first" class="pad-xl">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center margin-30 wow fadeIn"
            data-wow-delay="0.6s">
            <h2>Immediate to use</h2>
            <br>
            <p class="lead">FIRST: send us testnet BTC to one of our addresses</p>
            <p class="lead">SECOND: wait for the transaction to be confirmed
              (you can check on this website)</p>
            <p class="lead">THIRD: we will send you the same amount (to which we
              remove the transaction fees) to one of the addresses that sent the
              funds</p>
            <p class="lead">EZ!</p>
          </div>
        </div>
        <div class="iphone wow fadeInUp" data-wow-delay="1s"> <img src="img/iphone.png">
        </div>
      </div>
    </section>
    <section id="main-info" class="pad-xl">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 wow fadeIn" data-wow-delay="0.4s">
            <hr class="line purple">
            <h3>No app needed</h3>
            <p>You don't need to install any app, send testnet BTC on our
              address and wait </p>
          </div>

          <div class="col-sm-4 wow fadeIn" data-wow-delay="0.8s">
            <hr class="line blue">
            <h3>Our BTC addresses</h3>
            <center><p>Legacy:</p><div id="btc1" style="width:100px; height:100px; margin-top:15px;"></div>
            <p id="btc_1"><a target="_blank" href="bitcoin:mmBJGVdpm1JitQ8NMqZXDTabrdYdJYWYL6">mmBJGVdpm1JitQ8NMqZXDTabrdYdJYWYL6</a></p>
	    <button onclick="copyToClipboard('#btc_1')">Copy to clipboard</button></center>
            <hr>
            <center><p>P2SH-segwit:</p><div id="btc2" style="width:100px; height:100px; margin-top:15px;"></div>
            <p id="btc_2"><a target="_blank" href="bitcoin:2NDwUefHRbbHuGsumAWMbRZUzigrtBYkwrq">2NDwUefHRbbHuGsumAWMbRZUzigrtBYkwrq</a></p>
	    <button onclick="copyToClipboard('#btc_2')">Copy to clipboard</button></center>
            <hr>
            <center><p>Bech32:</p><div id="btc3" style="width:100px; height:100px; margin-top:15px;"></div>
	    <p id="btc_3"><a target="_blank" href="bitcoin:tb1qtjgzfvymjpysec35mgt826hkehv2sx8sxmt7xj">tb1qtjgzfvymjpysec35mgt826hkehv2sx8sxmt7xj</a></p>
            <button onclick="copyToClipboard('#btc_3')">Copy to clipboard</button></center>
            <hr>
            <p>Do you like our BTC bouncer? Let us know and tip at the adddress</p>
            <center><div id="btctip" style="width:100px; height:100px; margin-top:15px;"></div></center>
            <p id="btc_tip"><a target="_blank" href="bitcoin:2NA8eSsqbuP19Li8EL95PhBXPYtwC3U8Hy2">2NA8eSsqbuP19Li8EL95PhBXPYtwC3U8Hy2</a></p>
            <center><button onclick="copyToClipboard('#btc_tip')">Copy to clipboard</button></center>
          </div>

          <div class="col-sm-4 wow fadeIn" data-wow-delay="1.2s">
            <hr class="line yellow">
            <h3>Our LTC addresses</h3>
            <center><p>Legacy:</p><div id="ltc1" style="width:100px; height:100px; margin-top:15px;"></div>
            <p id="ltc_1"><a target="_blank" href="litecoin:mu24ePhF2xaM3t6FLWe7rWLLH33w2edrmz">mu24ePhF2xaM3t6FLWe7rWLLH33w2edrmz</a></p>
            <button onclick="copyToClipboard('#ltc_1')">Copy to clipboard</button></center>
            <hr>
            <center><p>P2SH-segwit:</p><div id="ltc2" style="width:100px; height:100px; margin-top:15px;"></div>
            <p id="ltc_2"><a target="_blank" href="litecoin:QMh3b5qNN5bg6cWRjMLbQhGB2YFRsucWvX">QMh3b5qNN5bg6cWRjMLbQhGB2YFRsucWvX</a></p>
	    <button onclick="copyToClipboard('#ltc_2')">Copy to clipboard</button></center>
            <hr>
            <center><p>Bech32:</p><div id="ltc3" style="width:100px; height:100px; margin-top:15px;"></div>
            <p id="ltc_3"><a target="_blank" href="litecoin:tltc1qx3xfluhn4gc4sjky0knh5qprxmehlpyaf9c0nm">tltc1qx3xfluhn4gc4sjky0knh5qprxmehlpyaf9c0nm</a></p>
	    <button onclick="copyToClipboard('#ltc_3')">Copy to clipboard</button></center>
            <hr>
            <p>Do you like our BTC bouncer? Let us know and tip at the adddress</p>
            <center><div id="ltctip" style="width:100px; height:100px; margin-top:15px;"></div></center>
            <p id="ltc_tip"><a target="_blank" href="litecoin:QXsV9BCbTF8HgH2BkbYw1Brpw6pzwpVQdR">QXsV9BCbTF8HgH2BkbYw1Brpw6pzwpVQdR</a></p>
            <center><button onclick="copyToClipboard('#ltc_tip')">Copy to clipboard</button></center>
          </div>

          <script type="text/javascript">
          new QRCode(document.getElementById("btc1"), {
            width : 100,
            height : 100
          }).makeCode("bitcoin:mmBJGVdpm1JitQ8NMqZXDTabrdYdJYWYL6");

          new QRCode(document.getElementById("btc2"), {
            width : 100,
            height : 100
          }).makeCode("bitcoin:2NDwUefHRbbHuGsumAWMbRZUzigrtBYkwrq");

          new QRCode(document.getElementById("btc3"), {
            width : 100,
            height : 100
          }).makeCode("bitcoin:tb1qtjgzfvymjpysec35mgt826hkehv2sx8sxmt7xj");

          new QRCode(document.getElementById("btctip"), {
            width : 100,
            height : 100
          }).makeCode("bitcoin:2NA8eSsqbuP19Li8EL95PhBXPYtwC3U8Hy2");

          new QRCode(document.getElementById("ltc1"), {
            width : 100,
            height : 100
          }).makeCode("litecoin:mu24ePhF2xaM3t6FLWe7rWLLH33w2edrmz");

          new QRCode(document.getElementById("ltc2"), {
            width : 100,
            height : 100
          }).makeCode("litecoin:QMh3b5qNN5bg6cWRjMLbQhGB2YFRsucWvX");

          new QRCode(document.getElementById("ltc3"), {
            width : 100,
            height : 100
          }).makeCode("litecoin:tltc1qx3xfluhn4gc4sjky0knh5qprxmehlpyaf9c0nm");

          new QRCode(document.getElementById("ltctip"), {
            width : 100,
            height : 100
          }).makeCode("litecoin:QXsV9BCbTF8HgH2BkbYw1Brpw6pzwpVQdR");

          </script>

        </div>
      </div>
    </section>
    <!--Pricing-->
    <section id="pricing" class="pad-lg">
      <div class="container">
        <div class="row margin-40">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <h2 class="white">Statistics</h2>
<?php
$servername = "localhost";
$username = "BTCBouncer";
$password = "BTCBouncer2018";
$dbname = "BTCBouncer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT count(*) AS num, count(distinct(receiver)) as rec, sum(amount) as total FROM `transactions`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                echo "<p class=\"white\"> Sent ".$row["num"]." transactions to ".$row["rec"]." different addresses for a total amount of ".round($row["total"],8)." tBTC.</p>";
        }
} else {
        echo "0 results";
}
$conn->close();
?>
            <p class="white">Last 100 BTC transactions:</p>
            <center>
            <table class="white">
              <tr border="1">
              	<th>Timestamp</th>
                <th>Receiver</th>
                <th>Amount</th>
              	<th>Tx</th>
	      </tr>
<?php
$servername = "localhost";
$username = "BTCBouncer";
$password = "BTCBouncer2018";
$dbname = "BTCBouncer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `transactions` ORDER BY `id` DESC LIMIT 100";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["timestamp"]."</td><td>".$row["receiver"]."</td><td>".$row["amount"]."</td><td>"."<a href='https://blockstream.info/testnet/".$row["tx"]."' target='_blank'>Transaction</a></td></tr>";
	}
} else {
	echo "0 results";
}
$conn->close();
?>
            </table>
            </br>
	    </br>
            <p class="white">Last 100 LTC transactions:</p>
<?php
$servername = "localhost";
$username = "BTCBouncer";
$password = "BTCBouncer2018";
$dbname = "BTCBouncer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT count(*) AS num, count(distinct(receiver)) as rec, sum(amount) as total FROM `transactions_ltc`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                echo "<p class=\"white\"> Sent ".$row["num"]." transactions to ".$row["rec"]." different addresses for a total amount of ".round($row["total"],8)." tLTC.</p>";
        }
} else {
        echo "0 results";
}
$conn->close();
?>
            <center>
            <table class="white">
              <tr border="1">
                <th>Timestamp</th>
                <th>Receiver</th>
                <th>Amount</th>
                <th>Tx</th>
              </tr>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `transactions_ltc` ORDER BY `id` DESC LIMIT 100";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["timestamp"]."</td><td>".$row["receiver"]."</td><td>".$row["amount"]."</td><td>"."<a href='https://testnet.litecore.io/tx/".$row["tx"]."' target='_blank'>Transaction</a></td></tr>";
        }
} else {
        echo "0 results";
}
$conn->close();
?>
            </table>
            </center>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 margin-20">
            <ul class="list-inline social">
              <li>Connect with us on</li>
              <li><a href="https://twitter.com/tulipan81"><i class="fa fa-twitter"></i></a><br>
              </li>
            </ul>
          </div>
          <div class="col-sm-4 text-right">
            <p><small>
                Copyright © 2018. All rights reserved. <br>
		Made by Valerio. Code available on <a href="https://github.com/valerio-vaccaro/BTCBouncer">https://github.com/valerio-vaccaro/BTCBouncer</a>.<br>
                Photos from usplash. Based on template created by <a href="http://visualsoldiers.com">Visual Soldiers</a>.
            </small></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
