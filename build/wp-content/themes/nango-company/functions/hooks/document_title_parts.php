<?php

add_filter('document_title_parts', function( $parts ){
  if( isset($parts['site']) ) unset($parts['site']);
  return $parts;
});

?>