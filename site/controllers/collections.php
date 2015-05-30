<?php
return function($site, $pages, $page) {

  // fetch all collections
  $collections = page('references')->children()->pluck('collections', ',', true);

  // fetch the basic set of references based on filger
  $references = page('references')->children();

  // add the collection filter
  if($collection = param(urldecode('collection'))) {
    $references = $references->filterBy('collections', urldecode($collection), ',');
  } else {
    $references = null;
  }

  return compact('references', 'collections', 'collection');

};