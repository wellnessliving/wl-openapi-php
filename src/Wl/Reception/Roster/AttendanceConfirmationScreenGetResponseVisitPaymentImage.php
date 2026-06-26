<?php

namespace WlSdk\Wl\Reception\Roster;

class AttendanceConfirmationScreenGetResponseVisitPaymentImage
{
    /**
     * Height of the image in pixels.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Width of the image in pixels.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * `true` means that image is empty.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * Link on the image.
     *
     * @var string|null
     */
    public ?string $url_thumbnail = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->url_thumbnail = isset($data['url_thumbnail']) ? (string)$data['url_thumbnail'] : null;
    }
}
