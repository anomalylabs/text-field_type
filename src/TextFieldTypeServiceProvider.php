<?php

namespace Anomaly\TextFieldType;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

/**
 * Class TextFieldTypeServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class TextFieldTypeServiceProvider extends AddonServiceProvider implements DeferrableProvider
{

    /**
     * Boot the addon.
     */
    public function boot()
    {
        assets('scripts.js')->add('public::vendor/anomaly/field_type/text/js/input.js');
    }

    /**
     * Return the provided services.
     * 
     * @return array
     */
    public function provides()
    {
        return [TextFieldType::class, 'anomaly.field_type.text'];
    }
}
