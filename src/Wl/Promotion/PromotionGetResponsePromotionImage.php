<?php

namespace WlSdk\Wl\Promotion;

class PromotionGetResponsePromotionImage
{
    /**
     * The height of the image.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * The width of the image.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * The link to the image.
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
