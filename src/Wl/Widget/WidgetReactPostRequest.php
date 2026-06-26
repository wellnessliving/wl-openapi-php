<?php

namespace WlSdk\Wl\Widget;

class WidgetReactPostRequest
{
    /**
     * New url for the widget frontend.
     * Empty string for reset to default.
     *
     * @var string|null
     */
    public ?string $url_frontend = null;

    public function params(): array
    {
        return array_filter(
            [
            'url_frontend' => $this->url_frontend,
            ],
            static fn ($v) => $v !== null
        );
    }
}
