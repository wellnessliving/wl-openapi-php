<?php

namespace WlSdk\Wl\Login\Member\DynamicId;

/**
 * Response from GET
 */
class DynamicIdGetResponse
{
    /**
     * Number of seconds left until the dynamic ID expires.
     * Zero means that business uses static barcode.
     *
     * @var int|null
     */
    public ?int $i_expire = null;

    /**
     * Barcode of the member.
     *
     * Dynamic, if business uses barcode as dynamic ID.
     * Or static, if business uses static ID. In this case `i_expire` will be zero.
     *
     * @var string|null
     */
    public ?string $text_barcode = null;

    /**
     * URL of the barcode image.
     *
     * @var string|null
     */
    public ?string $url_barcode = null;

    public function __construct(array $data)
    {
        $this->i_expire = isset($data['i_expire']) ? (int)$data['i_expire'] : null;
        $this->text_barcode = isset($data['text_barcode']) ? (string)$data['text_barcode'] : null;
        $this->url_barcode = isset($data['url_barcode']) ? (string)$data['url_barcode'] : null;
    }
}
