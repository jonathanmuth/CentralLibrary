<?php if(!defined('KIRBY')) exit ?>

title: Master
pages: false
files:
  sortable: true
fields:
  information:
    label: Information
    type: headline
  author:
    label: Author
    type: text
  editor: 
    label: Editor
    type: text
  key:
    label: CiteKey
    type: text
  title:
    label: Title
    type: text
  type:
    label: Type
    type: text
  series:  
    label: Series
    type: text
  book:
    label: Book
    type: text
  edition:
    label: Edition
    type: text
  chapter:
    label: Chapter
    type: text
  pages:
    label: Pages
    type: text
  publisher:
    label: Publisher
    type: text
  journal:
    label: Journal
    type: text
  volume:
    label: Volume
    type: text
  number: 
    label: Number
    type: text
  organization:
    label: Organization
    type: text
  institution:
    label: Institution
    type: text
  school:
    label: School
    type: text
  address:
    label: Address
    type: text
  year:
    label: Year
    type: text
  month:
    label: Month
    type: text
  url:
    label: URL
    type: text
  note:
    label: Note
    type: textarea
  annote:
    label: Annote
    type: textarea
  crossref:
    label: Cross Reference
    type: text
  howpublished:
    label: How Published
    type: text
  meta:
    label: Meta
    type: headline
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