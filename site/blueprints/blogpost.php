<?php if(!defined('KIRBY')) exit ?>

title: Blog Post
pages: false
files: true
  sortable: true
  width: 2000
  height: 2000
  fields:
    caption:
      label: Caption
      type: textarea
      buttons: true
    
    cropFocusPount:
      label: Focus point for cropping the thumb
      type: select
      default: center
      options:
        center: Center
        top: Top
        right: Right
        bottom: Bottom
        left: Left
  
fields:
  title:
    label: Title
    type: title
  headline:
    label: Headline
    type: text
    icon: header
  
  date:
    label: Date
    type: date
    width: 1/2
    default: today
  
  text:
    label: Text
    type: textarea
  
  thumbShape:
    label: Shape of thumbnails
    type: select
    default: square-mode
    options:
      original-mode: Original proportions
      landscape-mode: Landscape
      portrait-mode: Portrait
      square-mode: Square
      
  panel-info-project-images:
    label: Project images
    type: info
    text: >
      Upload images to the project in the column on the left (**Files -> Add**). Arrange the order of the images in the gallery by drag and drop the images in the **Files -> Edit** area. Max size for images are 2000 pixels on the tallest side. For best results convert the images to the **sRGB color space** before upload. The first time you visit a project on the front page the system need to generate a set of different image sizes for each uploaded image. This can take a while, but this is only the first time.
      
  panel-info-crop-settings:
    label: Crop settings for images
    type: info
    text: >
      If you have chosen _Landscape_, _Portrait_ or _Square_ as the _Shape of thumbnails_, you can decide how the image should be cropped. Click on an uploaded image in the column on the left and change the **Focus point for cropping the thumb**.