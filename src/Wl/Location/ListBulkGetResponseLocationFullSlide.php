<?php

namespace WlSdk\Wl\Location;

class ListBulkGetResponseLocationFullSlide
{
    /**
     * Height.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Width.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * URL to image preview.
     *
     * @var string|null
     */
    public ?string $url_preview = null;

    /**
     * URL to full image.
     *
     * @var string|null
     */
    public ?string $url_slide = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->url_preview = isset($data['url_preview']) ? (string)$data['url_preview'] : null;
        $this->url_slide = isset($data['url_slide']) ? (string)$data['url_slide'] : null;
    }
}
