<?php
$xml = Xml::fromArray(['response'=>$accounts]);
echo $xml->asXML();
?>