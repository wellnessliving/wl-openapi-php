<?php
namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseStaffLogo
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
     * Key of the user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * URL to image.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
    }
}
