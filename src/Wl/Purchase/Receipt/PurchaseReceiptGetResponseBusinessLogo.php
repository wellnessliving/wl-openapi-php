<?php
namespace WlSdk\Wl\Purchase\Receipt;

class PurchaseReceiptGetResponseBusinessLogo
{
    /**
     * The image height.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * The image width.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * This will be `true` if the image is empty. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * The URL of the image.
     *
     * @var string|null
     */
    public ?string $text_url = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->text_url = isset($data['text_url']) ? (string)$data['text_url'] : null;
    }
}
