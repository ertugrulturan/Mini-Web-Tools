<form novalidate="" action="ping.php" method="post">
            <label for="firstName">IP-Address</label>
            <input type="text" id="pings" name="ping" placeholder="" value="" required="">
            <label for="firstName">Port</label>
            <input type="text" id="ports" name="port" placeholder="" value="" required="">
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>

          <?php
          
          $host = $_POST["ping"];
          $ports = $_POST["port"];

          if ($host == "" ) {

            echo '<div id="note">
           Please enter a IP-Adress! <a id="close">[close]</a>
          </div>';


          }

          elseif (!$socket = @fsockopen("$host", $ports, $errno, $errstr, 30))
          {
           echo '<div id="note">
           Server is Down! <a id="close">[close]</a>
          </div>';
          }
          else 
          {
          echo '<div id="note">
            Server is Up! <a id="close">[close]</a>
           </div>';

          fclose($socket);
}

          ?>
          </div>
        </div>
        <hr>
        <button type="submit">Check</button>
      </form>
