<?php

namespace WlSdk\Wl\Spivi;

/**
 * Response from GET
 */
class SpiviClientMetricGetResponse
{
    /**
     * URL to the Spivi widget for the client.
     *
     * @var string|null
     */
    public ?string $url_widget = null;

    public function __construct(array $data)
    {
        $this->url_widget = isset($data['url_widget']) ? (string)$data['url_widget'] : null;
    }
}
