<?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "amena756_2";

          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($conn -> connect_error) {
                    die("Connection Failed" . $conn -> connect_error);
          }
?>