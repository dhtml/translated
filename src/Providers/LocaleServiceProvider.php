<?php

namespace Dhtml\Translated\Providers;

use Flarum\Foundation\AbstractServiceProvider;
use Flarum\Locale\LocaleManager;

class LocaleServiceProvider extends AbstractServiceProvider
{
    public function register()
    {
        $locales = resolve(LocaleManager::class);


        $languages = [
            'ar', 'az', 'bg', 'bn', 'ca', 'cs', 'da', 'de', 'el', 'en', 'eo', 'es', 'et', 'fa',
            'fi', 'fr', 'ga', 'he', 'hi', 'hu', 'id', 'it', 'ja', 'ko', 'lt', 'lv', 'ms', 'nb',
            'nl', 'pl', 'pt', 'ro', 'ru', 'sk', 'sl', 'sq', 'sr', 'sv', 'th', 'tl', 'tr', 'uk',
            'ur', 'vi', 'zh', 'zt'
        ];

        //$locales->addTranslations('ar', __DIR__.'/../../locale/ar.yml');
        foreach($languages as $language) {
            $locales->addTranslations($language, __DIR__.'/../../locale/' . $language . '.yml');
        }
    }
}
