<?php

namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseClassLogo
{
    /**
     * Is returned only if staff has a photo. Image height.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Is returned only if staff has a photo. Image width.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * Is returned only if staff does not have a photo. ID of staff gender. One of {@link \WlSdk\AGenderSid}
     * constants.
     *
     * @var int|null
     * @see \WlSdk\AGenderSid
     */
    public ?int $id_gender = null;

    /**
     * Is returned only if staff has a photo. URL to image.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->id_gender = isset($data['id_gender']) ? (int)$data['id_gender'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
    }
}
