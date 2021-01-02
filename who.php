<form novalidate="" action="who.php" method="post">
            <label for="firstName">Please enter a Domain: </label>
            <input type="text" id="domains" name="domain" placeholder="" value="" required="">          
        <hr>
        <button type="submit">WHOIS</button>
      </form>
<?php
    $domains = $_POST["domain"];
    $whois = shell_exec("whois $domains");
    echo "<td style='word-break:break-all;word-wrap:break-word'></td><center><span><p style='border:3px; border-style:solid; border-color:#FF0000; padding: 1em;'>$whois</p></span></center>";
?>
