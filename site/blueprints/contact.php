<?php if(!defined('KIRBY')) exit ?>

title: Contact page
pages: false
files: false
fields:
  title:
    label: Title
    type:  text
  headline:
    label: Headline
    type: text
  text:
    label: Info
    type:  textarea
    size: large
  location:
    label: Location
    type: textarea
    width: 1/2
  phone:
    label: Phone
    type: tel
    width: 1/2
  email:
    label: Email
    type: email
    width: 1/2
