<form novalidate="" action="portchecker.php" method="get">
            <label for="firstName">IP-Address</label>
            <input type="text" id="pings" name="portscan" placeholder="" value="" required="">
</form>
        <button type="submit">Check</button>

<?php 
	if (!isset($_GET['portscan'])) {
		exit();	}
	else {
		$url = $_GET['portscan']; }
?>

<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', -1);
$host = $_GET['portscan'];
$ports = array(21, 25, 80, 81, 110, 143, 443, 587, 2525, 3306);
foreach ($ports as $port)
{
    $connection = @fsockopen($host, $port, $errno, $errstr, 2);
    if (is_resource($connection))
    {
        echo '<center><h2>' . $host . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ') is open.</h2></center>' . "\n";
        fclose($connection);
    }
    else
    {
        echo '<center><h2>' . $host . ':' . $port . ' is not responding.</h2></center>' . "\n";
    }
}

?>
</pre>
