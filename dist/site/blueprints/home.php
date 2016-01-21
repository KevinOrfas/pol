<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large
  panel-info-home-page-image:
    label: Background image on the home page
    type: info
    text: >
      Upload an image to use as background on the home page in the column on the left (**Files -> Add**). For best result convert the image to the **sRGB color space** before upload. Max size for the image is 2000 pixels on the tallest side.

  panel-info-home-page-colors:
    label: Color settings
    type: info
    text: >
      Depending on the image you upload for the home page you might want to change the text color for the _Logotype_, the color on the _Off canvas menu button_ (for smaller screens) and the _text color in the menu_ (for larger screens).

  togglePrimaryNavBtnColor:
    label: Toggle of canvas menu button
    type:  color
    default: 000000
    width: 1/2
  logoColor:
    label: Logotype
    type:  color
    default: 000000
    width: 1/2
