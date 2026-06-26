<?php

namespace WlSdk\Wl\ClassPass;

class BookableListGetResponseBookableImage
{
    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $url = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->url = isset($data['url']) ? (int)$data['url'] : null;
    }
}
