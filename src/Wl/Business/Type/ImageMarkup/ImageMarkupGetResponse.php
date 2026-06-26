<?php

namespace WlSdk\Wl\Business\Type\ImageMarkup;

/**
 * Response from GET
 */
class ImageMarkupGetResponse
{
    /**
     * Link of the image markup.
     *
     * @var string|null
     */
    public ?string $s_link_markup_image = null;

    /**
     * Url of the default image markup.
     *
     * @var string|null
     */
    public ?string $url_image_markup = null;

    public function __construct(array $data)
    {
        $this->s_link_markup_image = isset($data['s_link_markup_image']) ? (string)$data['s_link_markup_image'] : null;
        $this->url_image_markup = isset($data['url_image_markup']) ? (string)$data['url_image_markup'] : null;
    }
}
