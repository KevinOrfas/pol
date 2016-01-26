<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
files: true
  width: 2000
  height: 2000
  fields:
    caption:
       label: Caption
       type: text
    position:
      label: Image position on larger screens
      type: select
      default: right
      options:
        left: Align to left
        right: Align to Right
        fullwidth: Full width

fields:
  title:
    label: Title
    type:  text
  story:
    label: Heading
    type:  text
  text:
    label: Text
    type:  textarea

  panel-info-portait-image:
    label: Upload a portrait of you
    type: info
    text: >
      Upload an image in the column on the left (**Files -> Add**). The image will automatically be included on the page. You can decide how the image should be positioned on larger screens by clicking on the uploaded image in the column on the left and change the **Image position on larger screens**. Max size for an image is 2000 pixels on the tallest side. For best results convert the images to the **sRGB color space** before upload.
