<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  work_title:
    label: Slogan
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  markdown
