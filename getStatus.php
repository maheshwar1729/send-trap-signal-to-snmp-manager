<?php
include ('config.php');
$b = new a();
$num = "SELECT COUNT(*) as count FROM mahesh";
$numRows = $b->querySingle($num);
if($numRows != 0)
{
$shown =<<<EOF
   select * from mahesh; 
EOF;
   $r = $b->query($shown);
   while($row = $r->fetchArray(SQLITE3_ASSOC) ) {
       echo $row['devicename']," | ",$row['presentstatus']," | ",$row['presenttime']," | ",$row['oldstatus']," | ",$row['oldtime'],"\n";    
   }

}

else
 {
echo "FALSE";
}  
   $b->close();
?>
