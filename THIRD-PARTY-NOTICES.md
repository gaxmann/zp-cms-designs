# Third-party components and design snapshots

This file lists third-party components and unchanged third-party design/theme snapshots
used with or tested with ZP.CMS.

The files listed here are not part of the ZP.CMS source code unless explicitly stated.
Each component or design remains under its original upstream licence.

## water.css

water.css  
License: MIT

Modifications: none

## Pico CSS

Pico CSS  
License: MIT

Modifications: none

## Editorial

Editorial by HTML5 UP  
Source: html5up.net  
Author: AJ / @ajlkn  
License: Creative Commons Attribution 3.0 (CCA 3.0)  
License URL: html5up.net/license

ZP.CMS includes the Editorial generator (`zp/editorial.php`). The original HTML5 UP
Editorial template files are not included in the ZP.CMS core package. To use this
design, place the Editorial design files under:

```text
/layout/editorial/editorial/
```

Modifications: none

## WordPress design snapshots

The following WordPress themes are optional third-party design snapshots tested with
the ZP.CMS WordPress adapter. They are not part of the ZP.CMS core package.

Place each original theme snapshot under the matching directory in `/layout/wordpress/`.

### Editor

Editor WordPress Theme  
Author: Array  
License: GNU General Public License v2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  
Source: https://array.is/themes/editor-wordpress-theme/  
Version: 1.0.1  
Copyright: 2014 Array

Bundled resources noted in the original theme files:

- Font Awesome 4.1.0 by Dave Gandy, font licensed SIL OFL 1.1, CSS licensed MIT

Directory:

```text
/layout/wordpress/editor/
```

ZP.CMS layout value:

```php
'layout'=>'wordpress/editor'
```

Modifications: none

### Graphy

Graphy WordPress Theme  
Author: Themegraphy  
License: GPLv2 or later  
Source: http://themegraphy.com/wordpress-themes/graphy/  
Version: 2.2.1 sic(!)

ZP.CMS has been tested with this version. Other versions may work, but themes that
require WordPress versions later than 4.1 are not compatible with ZP.CMS.

Directory:

```text
/layout/wordpress/graphy/
```

ZP.CMS layout value:

```php
'layout'=>'wordpress/graphy'
```

Modifications: none

### Syntax

Syntax WordPress Theme  
Author: Automattic  
License: GPLv2 or later  
Source: https://wpcom-themes.svn.automattic.com/syntax/  
Version: 1.1.0 - Jun 19 2015 - sic(!)

ZP.CMS has been tested with this version. Other versions may work, but themes that
require WordPress versions later than 4.1 are not compatible with ZP.CMS.

Directory:

```text
/layout/wordpress/syntax/
```

ZP.CMS layout value:

```php
'layout'=>'wordpress/syntax'
```

Modifications: none

### Twenty Twenty-Five

Twenty Twenty-Five WordPress Theme  
Author: WordPress.org and contributors  
License: GPLv2 or later  
Source: https://wordpress.org/themes/twentytwentyfive/  
Reference version: 1.4  
Last checked on WordPress.org: 2025-12-03

Directory:

```text
/layout/wordpress/twentytwentyfive/
```

ZP.CMS layout value:

```php
'layout'=>'wordpress/twentytwentyfive'
```

Modifications: none

### Minnow

Minnow WordPress Theme  
Author: Automattic  
License: GPLv2 or later  
Source: https://wpcom-themes.svn.automattic.com/minnow/  
Version: 1.0.3 - January 16, 2015 - sic(!)

Bundled resources noted in the original readme:

- Screenshot photographs from unsplash.com, licensed CC0
- Google Fonts Open Sans and Open Sans Condensed, licensed under the SIL Open Font License 1.1
- Genericons icon font, Copyright 2013 Automattic, licensed under GPLv2 or later

Directory:

```text
/layout/wordpress/minnow/
```

ZP.CMS layout value:

```php
'layout'=>'wordpress/minnow'
```

Modifications: none

### Noto Simple

Noto Simple WordPress Theme  
Author: htmsk138  
License: GNU General Public License v2 or later  
Source: https://wordpress.org/themes/noto-simple/  
Version: 1.4

Bundled resources noted in the original readme:

- Based on Underscores, Copyright 2012-2017 Automattic, Inc., licensed GPLv2 or later
- normalize.css, Copyright 2012-2016 Nicolas Gallagher and Jonathan Neal, licensed MIT
- Smooth Scroll, Copyright 2019 Chris Ferdinandi, licensed MIT

Directory:

```text
/layout/wordpress/noto-simple/
```

ZP.CMS layout value:

```php
'layout'=>'wordpress/noto-simple'
```

Modifications: none

### SoSimple

SoSimple WordPress Theme  
Author: Automattic  
License: GPLv2 or later  
Source: https://wpcom-themes.svn.automattic.com/sosimple/  
Version: 1.2.7 - February 23 2017 - sic(!)

Bundled resources noted in the original readme:

- Genericons icon font, Copyright 2013 Automattic, licensed GPLv2 or later
- Screenshot image from unsplash.com, licensed CC0
- Google Font Open Sans, licensed Apache License 2.0

Directory:

```text
/layout/wordpress/sosimple/
```

ZP.CMS layout value:

```php
'layout'=>'wordpress/sosimple'
```

Modifications: none

### Seedlet

Seedlet WordPress Theme  
Author: Automattic  
License: GPLv2 or later  
Source: https://github.com/Automattic/themes/tree/master/seedlet  
Version: 1.1.1-2

Bundled resources and derived works noted in the original readme:

- Derived from Twenty Nineteen, Copyright 2018-2020 WordPress.org, licensed GPLv2 or later
- Based on Underscores, Copyright 2012-2018 Automattic, Inc., licensed GPLv2 or later
- Normalizing styles helped by normalize.css
- WordPress Icons Library icons, licensed GPLv2 or later
- Social Icons from the WordPress Social Link Block, licensed GPLv2 or later
- Code from Twenty Twenty, Copyright 2020 WordPress.org, licensed GPLv2
- Color Contrast Validation, Copyright 2016 Per Soderlind, licensed GPLv3
- Images from Smithsonian Institution, licensed CC0, included in the theme screenshot and block patterns

Directory:

```text
/layout/wordpress/seedlet/
```

ZP.CMS layout value:

```php
'layout'=>'wordpress/seedlet'
```

Modifications: none

### Independent Publisher 2

Independent Publisher 2 WordPress Theme  
Author: Raam Dev  
License: GNU General Public License v3 or later  
Source: https://wordpress.org/themes/independent-publisher-2/  
Version: not specified in the supplied readme; snapshot changelog through 12 July 2017

Bundled resources noted in the original readme:

- Genericons font by Automattic, licensed GPLv2
- normalize.css, Copyright 2012-2015 Nicolas Gallagher and Jonathan Neal, licensed MIT
- Based on Underscores, Copyright 2012-2017 Automattic, Inc., licensed GPLv2 or later

Directory:

```text
/layout/wordpress/independent-publisher-2/
```

ZP.CMS layout value:

```php
'layout'=>'wordpress/independent-publisher-2'
```

Modifications: none

### GeneratePress

GeneratePress WordPress Theme  
Author: edge22  
License: GPLv2 or later  
Source: https://wordpress.org/themes/generatepress/  
Version: 2.0.2

Bundled resources noted in the original readme:

- Screenshot images licensed CC0 1.0 Universal
- Unsemantic Framework, licensed MIT / GPL
- Font Awesome font, licensed SIL OFL 1.1
- Font Awesome code, licensed MIT
- classList by Eli Grey, dedicated to the public domain
- selectWoo, licensed MIT

Directory:

```text
/layout/wordpress/generatepress/
```

ZP.CMS layout value:

```php
'layout'=>'wordpress/generatepress'
```

Modifications: none
