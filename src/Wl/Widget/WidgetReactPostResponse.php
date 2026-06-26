<?php

namespace WlSdk\Wl\Widget;

/**
 * Response from POST
 */
class WidgetReactPostResponse
{
    /**
     * New url for the widget frontend.
     * Empty string for reset to default.
     *
     * @var string|null
     */
    public ?string $url_frontend = null;

    public function __construct(array $data)
    {
        $this->url_frontend = isset($data['url_frontend']) ? (string)$data['url_frontend'] : null;
    }
}
