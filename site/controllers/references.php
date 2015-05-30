<?php
return function($site, $pages, $page) {

  if($query = get('q')) {
    $results = page('references')->search($query, 'title|text|description|author|citekey|collections');
  } else {
    $query = null;
    $results = null;
  }

  return array(
    'query' => $query,
    'results' => $results,
  );

};