# Paragraphs for Indiana University

This module provides custom Paragraph types for building complex pages comprised of elements from the [IU Pattern Library][1] like <em>section,
grids, and chunks</em>  that conform to the design standards in the
[IU Web Style Guide][1].

This module should be used in combination with the [IU Drupal Theme][3].

![Complex IU Chunk Layout](https://styleguide.iu.edu/images/greybox2.png)


# Supported widgets

Paragraph types currently available with this module include:

* Section - the top-level Paragraph type that you should add to your content
  types; it supports background colors and custom height/width and separators
  logic.
* Text
* Image
* Carousel
* Accordion
* Tabs
* Grid Buider - Build rows of equal-width <em>grid item</em> columns.
* Drupal Block - Embed a Drupal block inside a Paragraph.
* Drupal View - Embed a Drupal view in a Paragraph via viewsreference module.
* Form - Embeds a Drupal webform via the included iu_paragraphs_webform
  submodule.


# Roadmap

The following widgets still need to be implemented to completely support the
IU Framework:

* Background images in Sections
* Call To Action
* Callouts & Pullquotes
* Feature
* Panels
* Social Media Items
* Stat
* Video & Audio

# Credits

* [Indiana University Libraries][4] - for sponsoring initial development.
* [Bluespark][5] - for sponsoring ongoing development.

Special thanks to [Paragraphs Pack][6] and [Bootstrap Paragraphs][7], both
of which provided the initial code from which this module was forked.

[1]: https://styleguide.iu.edu/pattern-library/ (IU Pattern Library)
[2]: https://styleguide.iu.edu/ (IU Style Guide)
[3]: https://drupal.org/project/iu (IU Drupal Theme)
[4]: https://libraries.indiana.edu (IU Libraries)
[5]: https://www.bluespark.com (Bluespark)
[6]: https://github.com/mishac/paragraphs_pack (Paragraphs Pack)
[7]: https://www.drupal.org/project/bootstrap_paragraphs (Bootstrap Paragraphs)
