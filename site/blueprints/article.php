<?php if(!defined('KIRBY')) exit ?>

title: Article
pages: false
files:
  sortable: true
fields:
  information:
    label: Information
    type: headline
  title:
    label: Title
    required: true
    type: text
  subtitle:
    label: Subtitle
    type: text
    icon: ellipsis-h
  author:
    label: Author
    type: text
    required: true
    width: 1/2
    icon: user
  citekey:
    label: CiteKey
    type: text
    required: true
    width: 1/2
    icon: key
  journal:
    label: Journal
    type: text
    required: true
    icon: newspaper-o
  year:
    label: Year
    type: number
    required: true
    width: 1/2
  month:
    label: Month
    type: text
    width: 1/2
  volume:
    label: Volume
    type: text
    width: 1/2
  number:
    label: Number
    type: text
    width: 1/2
  pages: 
    label: Pages
    type: text
  collections:
    label: Collections
    type: tags
    lowercase: true
  keywords:
    label: Keywords
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
  quotes:
    label: Quotes
    type: structure
    entry: >
      <strong>{{quotetitle}}</strong><br >
      <em>{{quotebody}}<em><br />
      <small>{{quotepages}}<small>
    fields:
      quotetitle:
        label: Quote Title
        type: text
      quotebody:
        label: Quote
        type: textarea
      quotepages:
        label: Page/s
        type: text
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