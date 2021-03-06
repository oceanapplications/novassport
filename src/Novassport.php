<?php

namespace Kristories\Novassport;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class Novassport extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('novassport', __DIR__ . '/../dist/js/tool.js');
        Nova::style('novassport', __DIR__ . '/../dist/css/tool.css');

        Nova::resources([
            \Kristories\Novassport\Resources\OauthMyApps::class,
        ]);
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('novassport::navigation');
    }
}
