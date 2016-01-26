<?php

return function($site, $pages, $page) {

  // get all articles and add pagination
  $blogPosts = $page->children()->visible()->flip()->paginate(20);

  // add a tag filter
  if($tag = param('tag')) {
    $blogPosts = $blogPosts->filterBy('tags', $tag, ',');
  }
  
  // fetch all tags
  $tags = $blogPosts->pluck('tags', ',', false);

  // create a shortcut for pagination
  $pagination = $blogPosts->pagination();

  // pass $blogPosts and $pagination to the template
  return compact('blogPosts', 'pagination', 'tag', 'tags');

};