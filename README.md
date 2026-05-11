# Third-party design snapshots tested with ZP.CMS

This repository contains unchanged third-party design/theme snapshots tested with ZP.CMS.

The files in this repository are **not** part of the ZP.CMS source code and are **not** licensed under the ZP.CMS AGPL-3.0 licence. Each included design/theme remains under its original upstream licence.

See the original readme/licence files inside each design directory and `THIRD-PARTY-NOTICES.md`, if present.

## Purpose

ZP.CMS uses a two-level layout structure:

```text
layout/<generator>/<design>/
```

This repository archives the external design/theme files that were tested with ZP.CMS, so a known working design state can be restored later.

## Included designs

```text
layout/wordpress/graphy/
layout/wordpress/syntax/
layout/wordpress/twentytwentyfive/
layout/editorial/editorial/
```

## ZP.CMS layout values

Use these values in the ZP.CMS config after copying the corresponding design directory into the ZP.CMS `layout/` directory:

```php
$GLOBALS['zconf']=[
	'layout'=>'wordpress/graphy',
];
```

Other examples:

```php
$GLOBALS['zconf']=[
	'layout'=>'wordpress/syntax',
];
```

```php
$GLOBALS['zconf']=[
	'layout'=>'wordpress/twentytwentyfive',
];
```

```php
$GLOBALS['zconf']=[
	'layout'=>'editorial/editorial',
];
```

## Repository scope

This repository is only a third-party design archive.

It does not contain the ZP.CMS generator code. The corresponding generators are part of ZP.CMS itself, for example:

```text
zp/wordpress.php
zp/editorial.php
```

## Usage

Copy the required design directory into the ZP.CMS `layout/` directory.

Example:

```text
this repository:
layout/wordpress/graphy/

ZP.CMS installation:
layout/wordpress/graphy/
```

Then select it in the ZP.CMS config:

```php
$GLOBALS['zconf']=[
	'layout'=>'wordpress/graphy',
];
```

## Licensing

There is no single project licence for this repository.

Each included design/theme remains under its original upstream licence, including its original copyright notices and attribution requirements.

The ZP.CMS licence does not apply to this repository as a whole.

## Notes

The design/theme files are archived as tested snapshots. They may not be the latest upstream versions.
