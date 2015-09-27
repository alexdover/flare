<?php

namespace LaravelFlare\Flare\Admin\Widgets;

use LaravelFlare\Flare\Admin\AdminCollection;

class WidgetAdminCollection extends AdminCollection
{
    /**
     * Admin Config Key.
     *
     * Key which defined where in the Flare Admin Config to
     * load the WidgetAdmin classes from.
     *
     * @var string
     */
    const ADMIN_KEY = 'widgets';

    /**
     * Base Class.
     *
     * The Base Class for Module Admin's
     */
    const BASE_CLASS = 'LaravelFlare\Flare\Admin\Widgets\WidgetAdmin';

    /**
     * __construct.
     */
    public function __construct()
    {
        parent::__construct();

        $this->items = $this->getAdminClasses();
    }
}