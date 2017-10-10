<?php
include('../template/header.php');

$sql = "SELECT adm_nick, adm_pwd FROM admin WHERE adm_oid = 1";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $nick = $row["adm_nick"];
        $pwd = $row["adm_pwd"];
    }
} else {
    echo "0 results";
}
$nickPost = $_POST['nick'];

if ($nickPost === $nick && password_verify($_POST['pwd'], $pwd)) {
    $_SESSION['nick'] = $nick;
    echo $nick;
    var_dump($_SESSION['nick']);
    ?>

    <div><h1>lolilol</h1></div>
    <a href="../index.php">index</a>

<?php } else {
    ?> <div><h1>Nope</h1></div>
<?php } ?>
