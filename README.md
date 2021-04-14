# Flarum Google Fonts BBCode
Use most any Google Font thanks to Page CDN's "Easy Fonts" stylesheet.
Reference: https://pagecdn.com/lib/easyfonts

The BBCode starts simply with f for font.

To use, after the opening tag's equals sign, enter the appropriate class name found on the reference page (link above), but leave off the beginning "font-." To save a little bit of typing time, the beginning "font-" part of the class name is added for you. 

Example:
`[f=beth-ellen]This will be a handwritten cursive font called Beth Ellen.[/f]`

## Install & Update
`composer require zerosonesfun/flarum-google-fonts`

`php flarum cache:clear`

## Remove
`composer remove zerosonesfun/flarum-google-fonts`

(then, manually delete proper folder in your public assets folder)

## Links
- https://github.com/zerosonesfun/flarum-google-fonts
- https://www.wilcosky.com
