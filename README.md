# Flarum Google Fonts BBCode

Adds various BBCode for changing font within a post to a particular Google Font.

BBCode format (use f for font, equals name):

`[f=script]Your font will be all fancy now.[/f]`

Names to use within BBCode opening tag:

- beth
- mono
- script
- gothic
- baskerville
- hand
- playfair
- roboto

Font Families:
~~~
font-family: 'Beth Ellen', cursive;
font-family: 'Cutive Mono', monospace;
font-family: 'Dancing Script', cursive;
font-family: 'Didact Gothic', sans-serif;
font-family: 'Libre Baskerville', serif;
font-family: 'Nothing You Could Do', cursive;
font-family: 'Playfair Display', serif;
font-family: 'Roboto', sans-serif;
~~~

## Install & Update
`composer require zerosonesfun/flarum-google-fonts`

`php flarum cache:clear`

## Remove
`composer remove zerosonesfun/flarum-google-fonts`

(then, manually delete proper folder in your public assets folder)

## Links
- https://github.com/zerosonesfun/flarum-google-fonts
- https://www.wilcosky.com
