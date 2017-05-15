<?php
$fp = stream_socket_client("ssl://isearch.asu.edu:443", $errno, $errstr, 30);
if (!$fp) {
      echo "$errstr ($errno)<br />\n";
} else {
      fwrite($fp, "GET / HTTP/1.0\r\nHost: isearch.asu.edu\r\nAccept: */*\r\n\r\n");
          while (!feof($fp)) {
	            echo fgets($fp, 1024);
		        }
          fclose($fp);
}
