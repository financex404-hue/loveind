<?php include "config.php"; ?>

<h2>Admin Panel</h2>

<h3>Users</h3>
<?php
$res = $conn->query("SELECT * FROM users");
while($row=$res->fetch_assoc()){
echo $row['username']." - Coins: ".$row['coins']."<br>";
}
?>

<h3>Withdraw Requests</h3>
<?php
$res = $conn->query("SELECT * FROM withdrawals WHERE status='Pending'");
while($row=$res->fetch_assoc()){
echo $row['username']." - ".$row['amount']." - ".$row['upi_id']."<br>";
}
?>