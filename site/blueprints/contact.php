<?php if(!defined('KIRBY')) exit ?>

title: Contact page
pages: false
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Info
    type:  textarea
    size: large
  name:
    label: Name
    type: text
    width: 1/2
  phone:
    label: Phone
    type: tel
    width: 1/2
  email:
    label: Email
    type: email
    width: 1/2
  website:
    label: Website
    type: url
    width: 1/2
  twitter:
    label: Twitter
    type: text
    placeholder: @
    icon: twitter
    width: 1/2
  facebook:
    label: Facebook
    type: url
    icon: facebook
    width: 1/2
  instagram:
    label: Instagram
    type: url
    icon: instagram
    width: 1/2
