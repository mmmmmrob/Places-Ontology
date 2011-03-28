<?php
include_once(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'common.inc.php');

$space = new LocalSchemaUriSpace(dirname(__FILE__) . '/schema.rdf.xml', 'rdfxml');
$space->dispatch();
?>
