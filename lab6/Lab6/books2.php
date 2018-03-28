<?
$xmlDoc = new DOMDocument();
$xmlDoc->load( "books.xml") ;
$root = $xmlDoc -> documentElement;
$xpath = new DOMXPath($xmlDoc);
$query = '//books/book[2]/@id';
$result = $xpath->evaluate($query, $root);
echo $result -> item(0) -> textContent . "&nbsp;";
$query = '//books/book[2]/title';
$result = $xpath->evaluate($query, $root);
echo $result -> item(0) -> textContent;
?>
