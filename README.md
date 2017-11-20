# Paragraphs for Indiana University

This module defines Paragraph types for 'chunks' in the Pattern Library from
the [IU Web Style Guide][1].  Forked from [Paragraphs Pack][2] based on jQuery
UI widgets, which was forked from [Bootstrap Paragraphs][3] based on Bootstrap
widgets. Specific classnames and code has been modified where necessary to
conform to CSS class names and HTML structure dictated by the IU Framework.

![Complex IU Chunk Layout](https://styleguide.iu.edu/images/greybox2.png)


### Currently defined paragraph types:

* Text
* Image
* Row - will display its children as equal width columns using flexbox
* Column - displays children vertically, most usefully as a child of a Row paragraph
* Block - embed a drupal block
* Accordion + Accordion Section - display paragraphs as an IU Framework Accordion
* Tabs + Tab section - display paragraphs as IU Framework Tabs

### Provided by submodules
* paragraphs_iu_webform: a paragraph type that embeds a drupal webform

### TBD:
* Carousel - need to decide whether to keep this and choose a specific carousel plugin, or remove it.
* Contact - Bootstrap_paragraphs has this.

[1]: https://styleguide.iu.edu/pattern-library/chunks/index.html (IU Style Guide Chunks)
[2]: https://github.com/mishac/paragraphs_pack (Paragraphs Pack)
[3]: https://www.drupal.org/project/bootstrap_paragraphs (Bootstrap Paragraphs)
