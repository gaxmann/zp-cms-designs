# CHANGELOG

## v1.6.2 - 2026-06-10

- Replaced repeated `~~ZBASEURL~~layout/...` asset paths with `~~ZDIRDESIGN~~` and `~~ZDIRSCRIPTS~~`.

## v1.6.1 - 2026-06-10

- scripts dir moved to _script.

## v1.5.1 - 2026-05-26

- The design templates were migrated from the legacy ZP-HVAR notation to the new HVAR tokens format `~~Z...~~` because they are much easier to write and completely prevent parsing issues within links and URLs.

## v1.4.2 - 2026-05-26

- All static asset paths for stylesheets, JavaScript, and images across the standard themes were systematically updated to use the global dynamic `{%%ZP_BASEURL%%}` token, making the layout engines fully independent of the installation directory.

## v1.4.1 - 2026-05-24

- The core system constants were renamed across the codebase, changing `ZP_TITLE` to `ZP_SITETITLE` and `ZP_SUBTITLE` to `ZP_SITESUB`.

## v1.3.1 - 2026-05-20

- To ensure full future proofing against impending PHP updates and potential incompatibilities, nine historical WordPress templates along with the default layouts were heavily simplified and converted into clean HTML blueprints, specifically affecting `wordpress/graphy`, `wordpress/syntax`, `wordpress/independent-publisher-2`, `editorial/editorial`, `paradigm-shift/paradigm-shift`, `wordpress/editor`, `wordpress/minnow`, `wordpress/sosimple`, `wordpress/noto-simple`, `wordpress/seedlet`, and `wordpress/generatepress`.