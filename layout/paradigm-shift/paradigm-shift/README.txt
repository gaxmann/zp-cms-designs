Paradigm Shift by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)


Say hello to Paradigm Shift, my first addition to HTML5 UP in more than a year (!!!).
Took things in a slightly different direction with this one, partly to mess with CSS
grid (which this one relies on pretty heavily) but mostly to get back to making weirder
and more experimental designs/layouts. Anyway, hope you dig it, and thanks for the
continued support despite the lack of updates :)

Demo images* courtesy of Unsplash, a radtastic collection of CC0 (public domain) images
you can use for pretty much whatever.

(* = not included)

AJ
aj@lkn.io | @ajlkn


Credits:

	Demo Images:
		Unsplash (unsplash.com)

	Icons:
		Font Awesome (fontawesome.io)

	Other:
		jQuery (jquery.com)
		Responsive Tools (github.com/ajlkn/responsive-tools)

---

## ZANACMS Modifications: 

Unused demo files, Sass sources, gallery images and icon webfonts removed for the ZANACMS package.

`paradigm-shift/paradigm-shift` uses `layoutimg` for its large intro image:

```php
'layoutimg'=>['img'=>'./img/example.jpg', 'pos'=>'center'],
```

`img` is the image path. `pos` is passed to the layout as image position, for example `center`, `top`, `bottom`, `left`, `right`, `top left` or `bottom right`. In PHP mode, the current page may override individual values through `$GLOBALS['zdata']['layoutimg']`; values not mentioned there keep the global `zconf` default.
