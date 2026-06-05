# ZANACMS html/pico layout

This repository contains the former `html/pico` layout for ZANACMS as a separate design package.

## Installation

Copy the layout directory into a ZANACMS installation:

```text
layout/html/pico/
```

Then select it in `/__config/conf.php`:

```php
'layout'=>'html/pico',
```

## Files

```text
layout/html/pico/design.html    ZANACMS HTML template
layout/html/pico/pico.min.css   Pico CSS v2.1.1
layout/html/pico/theme.js       small light/dark theme toggle
layout/html/pico/zp.css         ZANACMS-specific CSS adjustments
```

## Third-party component

The layout includes Pico CSS v2.1.1.

```text
Project: https://picocss.com/
Source:  https://github.com/picocss/pico
License: MIT for code; Pico documentation is licensed separately upstream
```

The included `LICENSE` file contains the upstream Pico CSS MIT licence text for `pico.min.css`.

## ZANACMS

This layout uses the generic ZANACMS `html` layout family and its `design.html` placeholder replacement. It does not need its own PHP generator.
