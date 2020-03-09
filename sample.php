<?php

$payload = array(
  'http'=>array(
     'method'=>"POST",
     'content'=>'key=value'
   )
);
stream_context_set_default($payload);
$dom = new DOMDocument();
libxml_use_internal_errors(TRUE);
$dom->loadHTMLFile('http://localhost/curloperation/dom.php');
libxml_clear_errors();

foreach ($dom->getElementsByTagName('tr') as $row){
    foreach($dom->$row->getElementsByTagName('td') as $node){
        echo $node->textContent . "<br/>";
    }

}


?>