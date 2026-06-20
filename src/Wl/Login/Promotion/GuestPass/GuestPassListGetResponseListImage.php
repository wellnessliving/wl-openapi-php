<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass;

class GuestPassListGetResponseListImage
{
    /**
     * Image height.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Image width.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * Thumbnail url.
     *
     * @var string|null
     */
    public ?string $url_thumbnail = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->url_thumbnail = isset($data['url-thumbnail']) ? (string)$data['url-thumbnail'] : null;
    }
}
