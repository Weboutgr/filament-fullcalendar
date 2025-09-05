<?php

namespace Weboutgr\FilamentFullCalendar\Widgets\Concerns;

use function Weboutgr\FilamentFullCalendar\array_merge_recursive_unique;

use Weboutgr\FilamentFullCalendar\FilamentFullCalendarPlugin;

trait CanBeConfigured
{
    public function config(): array
    {
        return [];
    }

    protected function getConfig(): array
    {
        return array_merge_recursive_unique(
            FilamentFullCalendarPlugin::get()->getConfig(),
            $this->config(),
        );
    }
}
