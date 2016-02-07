<?php if(!defined('KIRBY')) exit ?>

title: Blog
pages:
  sort: flip
  template: blogpost
  num: date
files: false
fields:
  title:
    label: Title
    type:  text
  panel-info-a:
    label:
    type: info
    text: >
      Add an _Article_ to your _Blog_ by adding a subpage, **Pages -> Add** in the column on the left side. Don't forget to make the _Article_
      visible (Pages -> Edit) to make it appear on the _Blog page_.

  panel-headline-b:
    label: Background colors
    type: headline
