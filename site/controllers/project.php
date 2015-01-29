<?php
return function($site, $pages, $page) {

  $collections = explode(",", $page->collections());

  return compact('collections');

};