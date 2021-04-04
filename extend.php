<?php

/*
 * A Flarum extension created by Billy Wilcosky.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For instructions, please view the README file.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '<link rel="preconnect" href="https://fonts.gstatic.com">
                                 <link href="https://fonts.googleapis.com/css2?family=Beth+Ellen&family=Cutive+Mono&family=Dancing+Script&family=Didact+Gothic&family=Libre+Baskerville&family=Nothing+You+Could+Do&family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">
                                 <link rel="stylesheet" type="text/css" href="../assets/extensions/zerosonesfun-google-fonts/styles.css">';
        }),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[f={TEXT1}]{TEXT2}[/f]',
                '<span class="{TEXT1}">{TEXT2}</span>'
            );
        })
];
