<?php
include ('config.php');
   $b = new a();
   $c =<<<EOF
      SELECT * from anm;
EOF;
   $d = $b->query($c);
   if($e = $d->fetcharray(SQLITE3_ASSOC) ) {
      echo $e['community']."@",$e['ip'] . ":",$e['port'];
   }
   else {
      echo "FALSE";
   }
   $b->close();
?>
