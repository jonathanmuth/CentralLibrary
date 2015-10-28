<?php if(!defined('KIRBY')) exit ?>

title: Booklet
pages: false
files:
  sortable: true
fields:
  information:
    label: Information
    type: headline
  title:
    label: Title
    type: text
  subtitle:
    label: Subtitle
    type: text
    icon: ellipsis-h
  author:
    label: Author
    type: text
    width: 1/2
    icon: user
  citekey:
    label: CiteKey
    type: text
    required: true
    width: 1/2
    icon: key
  howpublished:
    label: How Published
    type: text
  year:
    label: Year
    type: number
    width: 1/2
  month:
    label: Month
    type: text
    width: 1/2
  collections:
    label: Collections
    type: tags
    lowercase: true
  tags:
    label: Tags
    type: tags
    lowercase: false
  attachments:
    label: Attachments
    type: headline
  tags:
    label: Tags
    type: tags
    icon: tags
  excerpt:
    label: Excerpt
    type: textarea
  notes:
    label: Notes
    type: textarea
  display:
    label: Display Options
    type: headline
  cover:
    label: Cover
    type: select
    width: 1/2
    default: grey
    options:
      blue: Blue
      yellow: Yellow
      black: Black
      grey: Grey
  featured:
    label: Featured
    type: checkbox
    text: Featured on the homepage.
    width: 1/2
  printed:
    label: Printed
    type: checkbox
    text: This paper has been printed.
    width: 1/2