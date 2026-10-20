<?php

namespace WlSdk\Wl\Event;

class EventListGetResponseEventListLogo
{
    /**
     * Thumbnail height in pixels.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Thumbnail width in pixels.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * `false` for the new wide-rectangle format; `true` for the legacy square format.
     *
     * @var bool|null
     */
    public ?bool $is_old = null;

    /**
     * Thumbnail URL.
     *
     * @var string|null
     */
    public ?string $s_url = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->is_old = isset($data['is_old']) ? (bool)$data['is_old'] : null;
        $this->s_url = isset($data['s_url']) ? (string)$data['s_url'] : null;
    }
}
