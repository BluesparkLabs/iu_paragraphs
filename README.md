# Paragraphs for Indiana University

This module provides custom Paragraph types for building complex pages comprised of elements from the [IU Pattern Library][1] like <em>section,
grids, and chunks</em>  that conform to the design standards in the
[IU Web Style Guide][1].

This module should be used in combination with the [IU Drupal Theme][3].

![Complex IU Chunk Layout](https://styleguide.iu.edu/images/greybox2.png)


# Supported widgets

Paragraph types currently available with this module include:

* Section - the top-level Paragraph type that you should add as a field on
    your content types; it supports background colors & images, parallax, as
    well as other display settings like height/width/padding, text alignment,
    and visibility rules, all from the standard IU Framework CSS.
* Text
* Image
* Carousel
* Call To Action
* Callouts & Pullquotes
* Accordion
* Stats
* Tabs - Not mentioned in the IU Pattern Library, but code was found in the IU
    Framework CSS for these. The implementation is based on Zurb Foundation
    Tabs and styling is completed via the [IU Drupal theme][3].
* Grid Buider - Build rows of equal-width <em>grid item</em> columns.
* Drupal Block - Embed a Drupal block inside a Paragraph.
* Drupal View - Embed a Drupal view in a Paragraph via viewsreference module.
* Form - Embeds a Drupal webform via the included iu_paragraphs_webform
    submodule.


# Roadmap

The following widgets still need to be implemented to completely support the
IU Framework:

* Banners
* Feature
* Panels
* Image Essays
* Social Media Items
* Video & Audio


# Contrib Dependencies

* Color Field
* Field Group
* [IU theme][3]
* Paragraphs - w/ patch from Issue #2868155
* ViewsReference


# Installation

1) Download and enable the module and its contrib dependencies (see above).

2) Open _Admin > Structure > Content types > Basic Page > Manage fields_.

3) Add a field named _Sections_ of type _Paragraph_ (aka Entity Reference
    Revision); For _Reference Type_, include only the Section type;


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
