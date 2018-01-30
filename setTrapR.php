<?php
include ('config.php');
   $b = new a();
   $c =<<<EOF
      CREATE TABLE IF NOT EXISTS anm
      (ip           TEXT    NOT NULL,
      port            INT     NOT NULL,
      community        TEXT   NOT NULL);
EOF;
$d = $b->exec($c);
if(isset($_GET['ip']) && ($_GET['port']) && ($_GET['community']))
{
$ip = $_GET['ip'];
$port = $_GET['port'];
$community = $_GET['community'];
$e =<<<EOF
INSERT INTO anm (ip, port, community) values ('$ip', '$port', '$community');
EOF;
$in = $b->exec($e);
    echo "OK";
}   
else
{
    echo "FALSE";
}
$b->close();
?>
