# Third-party design snapshots tested with ZANACMS

This repository contains unchanged third-party design/theme snapshots tested with ZANACMS.

The files in this repository are **not** part of the ZANACMS source code and are **not** licensed under the ZANACMS AGPL-3.0 licence. Each included design/theme remains under its original upstream licence.

See the original readme/licence files inside each design directory and `THIRD-PARTY-NOTICES.md`, if present.

## Purpose

ZANACMS uses a two-level layout structure:

```text
layout/<family>/<design>/
```

This repository contains third-party design/theme files prepared and tested for use with ZANACMS. (Sorted after how well the CSS currently works with/are adapted to ZP. Feel free to add your custom.css in the design folder, and share it with us.)

## Included designs

```text
layout/wordpress/graphy/
layout/wordpress/syntax/
layout/wordpress/independent-publisher-2/
layout/editorial/editorial/
layout/paradigm-shift/paradigm-shift/
layout/wordpress/twentytwentyfive/
layout/wordpress/editor/
layout/wordpress/minnow/
layout/wordpress/sosimple/
layout/wordpress/noto-simple/
layout/wordpress/seedlet/
layout/wordpress/generatepress/
```

_Designs with 2 hyphens at the beginning currently dont work correctly with the wp-2015 generator and need fixing, e.g. `layout/wordpress/--*/`_

## ZANACMS layout values

Use one of these values in the ZANACMS config after copying the corresponding design directory into the ZANACMS `layout/` directory. Examples:

```php
$GLOBALS['zconf']=[
	'layout'=>'wordpress/graphy',
];
```

```php
$GLOBALS['zconf']=[
	'layout'=>'wordpress/sosimple',
];
```

```php
$GLOBALS['zconf']=[
	'layout'=>'editorial/editorial',
];
```

```php
$GLOBALS['zconf']=[
	'layout'=>'paradigm-shift/paradigm-shift',
];
```

## Repository scope

This repository is only a third-party design archive. It does not contain the ZANACMS generator code.

The corresponding ZANACMS generators are part of ZANACMS itself. Shared ZP generators are loaded from:

```text
layout/_zpgen/<family>/zpgen.php
```

A layout family may also provide its own local generator under:

```text
layout/<family>/_generator/zpgen.php
```

This repository contains neither of these generator directories.

## Usage

Copy the required design directory into the ZANACMS `layout/` directory. Example:

```text
this repository:
layout/wordpress/graphy/

ZANACMS installation:
layout/wordpress/graphy/
```

Then select it in the ZANACMS config:

```php
$GLOBALS['zconf']=[
	'layout'=>'wordpress/graphy',
];
```

## ZANACMS placeholders

Design templates use ZANACMS HVAR placeholders for local assets:

```text
~~ZDIRDESIGN~~   selected design directory, for example /layout/wordpress/graphy/
~~ZDIRSCRIPTS~~  shared script directory, /layout/_scripts/
```

Use `~~ZDIRDESIGN~~` for CSS, JavaScript, fonts and images inside the current design directory. Use `~~ZDIRSCRIPTS~~` only for shared script files provided by ZANACMS.

## Licensing

There is no single project licence for this repository. Each included design/theme remains under its original upstream licence, including its original copyright notices and attribution requirements.

The ZANACMS licence does not apply to this repository as a whole.

## Notes

The design/theme files are archived as tested snapshots. They may not be the latest upstream versions.
