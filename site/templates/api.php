<?php
header('Content-type: application/json; charset=utf-8');

//this is the magic command which grabs all References from pages. If You wanna grab specific page articles, look at the base example mentioned above

$references = $results;

$json = array();

$json['references']  = array();
$json['params']  = array();

$i = 0;

foreach($references as $reference) {

  $images = array();

  foreach($reference->images() as $image) {

    //this is Bastians snippet about gathering image References
    $images[] = array(
      'url'    => $image->url(),
      'width'  => $image->width(),
      'height' => $image->height(),
      'thumb' => thumb($image, array('width' => 320, 'height' => 320, 'crop' => true))->url()
    );
  }

  $audio = array();

  foreach($reference->audio() as $track) {

    //this is Bastians snippet about gathering audio References
    $audio[] = array(
      'url'    => $track->url()
    );
  }

  $followups = array();

  foreach($reference->followup()->yaml() as $followup) {

    //this is Bastians snippet about gathering structure field References
    $followups[] = array(
      'title'    => $followup["title"],
      'url'    => $followup["url"],
    );
  }

  $json['references'][] = array(
    'author'  => (string)$reference->author(),
    'editor'  => (string)$reference->editor(),
    'key'  => (string)$reference->citekey(),
    'title' => (string)$reference->title(),
    'subtitle' => (string)$reference->subtitle(),
    'type' => (string)$reference->type(),
    'series' => (string)$reference->series(),
    'booktitle' => (string)$reference->booktitle(),
    'edition' => (string)$reference->edition(),
    'chapter' => (string)$reference->chapter(),
    'pages' => (string)$reference->pages(),
    'publisher' => (string)$reference->publisher(),
    'journal' => (string)$reference->journal(),
    'volume' => (string)$reference->volume(),
    'number' => (string)$reference->number(),
    'organization' => (string)$reference->organization(),
    'institution' => (string)$reference->institution(),
    'school' => (string)$reference->school(),
    'address' => (string)$reference->address(),
    'year' => (string)$reference->year(),
    'month' => (string)$reference->month(),
    'sourceurl' => (string)$reference->sourceurl(),
    'note' => (string)$reference->note(),
    'annote' => (string)$reference->annote(),
    'crossref' => (string)$reference->crossref(),
    'howpublished' => (string)$reference->subtitle(),
  );

  // this cleans up JSONS code so there is no empty entries inside objects
  $cleanReferences = array_filter($json['references'][$i]);
  $json['references'][$i] = $cleanReferences;
  $i++;

$foo = $json['params'];

  //just example of boolean. in blueprints its type: checkboxes
  if ((string)$reference->adress()) { 
      $foo['adress'] = true;
  }

//example of string as param. in blueprints its type: number
if ((string)$reference->time()) {
      $foo['time'] = (string)$reference->time();
  }

  $json['params'] = (object)$foo;
}

echo json_encode($json);
?>