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
            $document->head[] = '<link href="https://pagecdn.io/lib/easyfonts/fonts.css" rel="stylesheet" />';
        }),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[f={TEXT1}]{TEXT2}[/f]',
                '<span class="font-{TEXT1}">{TEXT2}</span>'
            );
        })
];
