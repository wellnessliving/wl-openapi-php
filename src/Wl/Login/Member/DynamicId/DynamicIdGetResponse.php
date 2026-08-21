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
     * `true` if the business uses QR code as the client check-in scan format, `false` if it uses the classic
     * barcode.
     *
     * @var bool|null
     */
    public ?bool $is_qr = null;

    /**
     * Barcode of the member.
     *
     * Dynamic, if business uses barcode as dynamic ID.
     * Or static, if business uses static ID. In this case {@link
     * \WlSdk\Wl\Login\Member\DynamicId\DynamicIdGetResponse::$i_expire} will be zero.
     *
     * @var string|null
     */
    public ?string $text_barcode = null;

    /**
     * Unix time in seconds at which {@link \WlSdk\Wl\Login\Member\DynamicId\DynamicIdGetResponse::$text_barcode}
     * was issued.
     *
     * Only meaningful when {@link \WlSdk\Wl\Login\Member\DynamicId\DynamicIdGetResponse::$is_qr} is `true`. The
     * Achieve app combines this value with
     * {@link \WlSdk\Wl\Login\Member\DynamicId\DynamicIdGetResponse::$text_barcode} and a hardcoded 30-second
     * validity window to build the QR code payload,
     * and increments it locally every 30 seconds to refresh the QR code without an additional request to the
     * server.
     *
     * @var int|null
     */
    public ?int $tu_qr_issued = null;

    /**
     * URL of the barcode image.
     *
     * @var string|null
     */
    public ?string $url_barcode = null;

    public function __construct(array $data)
    {
        $this->i_expire = isset($data['i_expire']) ? (int)$data['i_expire'] : null;
        $this->is_qr = isset($data['is_qr']) ? (bool)$data['is_qr'] : null;
        $this->text_barcode = isset($data['text_barcode']) ? (string)$data['text_barcode'] : null;
        $this->tu_qr_issued = isset($data['tu_qr_issued']) ? (int)$data['tu_qr_issued'] : null;
        $this->url_barcode = isset($data['url_barcode']) ? (string)$data['url_barcode'] : null;
    }
}
