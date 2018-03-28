<?
$xmlDoc = new DOMDocument();
$xmlDoc->load( "faculty.xml") ;
echo "<table>";
$sts = $xmlDoc ->getElementsByTagname("student");
for ($i=0; $i< $sts -> length;$i++) {
  echo "<tr>";
  $name = $sts->item($i) ->getElementsByTagname("fullname");
  for ($j=0; $j< $name->length;$j++) {
    echo "<td>" . $name->item($j) -> textContent . "</td>";
  }
  $mrks = $sts->item($i) ->getElementsByTagname("avg_mark");
  for ($j=0; $j< $mrks->length;$j++) {
    echo "<td>" . $mrks->item($j) -> textContent . "</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>
