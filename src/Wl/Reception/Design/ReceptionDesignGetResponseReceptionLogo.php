<?php

namespace WlSdk\Wl\Reception\Design;

class ReceptionDesignGetResponseReceptionLogo
{
    /**
     * url for full image.
     *
     * @var string|null
     */
    public ?string $url_view = null;

    /**
     * url for thumbnail version of image.
     *
     * @var string|null
     */
    public ?string $url_thumbnail = null;

    public function __construct(array $data)
    {
        $this->url_view = isset($data['url_view']) ? (string)$data['url_view'] : null;
        $this->url_thumbnail = isset($data['url_thumbnail']) ? (string)$data['url_thumbnail'] : null;
    }
}
