<html>
command: <?php echo $_POST["command"];
$myfile = fopen("command.tmp", "w");
$date = new DateTime();
$timestamp = $date->getTimestamp();
$tp = (string)$timestamp;
$txt = $_POST["command"]."~".$tp;
fwrite($myfile,$txt);
fclose($myfile);
?>
</html>