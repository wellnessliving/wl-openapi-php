<?php

namespace WlSdk\Wl\User\Info;

class UserInfoGetResponsePhoto
{
    /**
     * The height of the photo.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * The width of the photo.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * The URL of the photo.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
