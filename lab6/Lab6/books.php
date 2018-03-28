<?
$xmlDoc = new DOMDocument();
$xmlDoc->load( "books.xml") ;
echo "<table  border=1>";
$bk = $xmlDoc ->getElementsByTagname("book");
for ($i=0; $i< $bk -> length;$i++) {
  echo "<tr>";
  echo "<td>" . $bk->item($i) -> getAttribute("id") . "</td>";
  $title = $bk ->item($i) ->getElementsByTagname("title");
  echo "<td>" . $title -> item(0) -> textContent . "</td>";
  echo "<td>";
  $authors = $bk ->item($i) ->getElementsByTagname("author");
  for ($j=0; $j< $authors->length;$j++) {
    echo $authors ->item($j) -> textContent . "&nbsp;";
  }
  echo "</td>";
  $price = $bk ->item($i) ->getElementsByTagname("price");
  echo "<td>" . $price -> item(0) -> textContent . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
