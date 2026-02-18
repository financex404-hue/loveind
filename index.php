<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Lucky Lottery Pro</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h1>🎰 Lucky Lottery Pro</h1>

<?php if(!isset($_SESSION['user'])){ ?>

<form action="login.php" method="POST">
<input type="text" name="username" placeholder="Enter Username" required>
<input type="text" name="phone" placeholder="Phone Number" required>
<button type="submit">Login / Register</button>
</form>

<?php } else { ?>

<h3>Welcome <?=$_SESSION['user']?></h3>

<?php
$user = $conn->query("SELECT * FROM users WHERE username='".$_SESSION['user']."'");
$row = $user->fetch_assoc();
?>

<p>Coins: <?=$row['coins']?></p>

<button onclick="spin()">Spin (-10 Coins)</button>
<button onclick="dailyDraw()">Live Draw</button>

<h3>Add Money</h3>
<form action="payment.php" method="POST">
<input type="number" name="amount" placeholder="Amount">
<button type="submit">Add Balance</button>
</form>

<h3>Withdraw</h3>
<form action="withdraw.php" method="POST">
<input type="text" name="upi" placeholder="UPI ID">
<input type="number" name="amount" placeholder="Amount">
<button type="submit">Request Withdraw</button>
</form>

<a href="logout.php">Logout</a>

<div id="result"></div>

<?php } ?>

<script src="assets/script.js"></script>
</body>
</html>