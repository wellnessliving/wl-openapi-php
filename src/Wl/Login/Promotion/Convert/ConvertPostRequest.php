<?php
namespace WlSdk\Wl\Login\Promotion\Convert;

class ConvertPostRequest
{
    /**
     * The conversion date, in the local time zone.
     *
     * @var string|null
     */
    public ?string $dl_convert = null;

    /**
     * The conversion ID. One of the {@link \WlSdk\Wl\Promotion\Convert\PromotionConvertSid} constants.
     *
     * @var int|null
     */
    public ?int $id_convert = null;

    /**
     * When conversion should be done. One of the {@link \WlSdk\Wl\Login\Promotion\Convert\ConvertWhenSid}
     * constants.
     * 
     * `null` if it's not set yet.
     *
     * @var int|null
     */
    public ?int $id_convert_when = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The login promotion key.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The promotion key the given promotion will be converted to.
     *
     * @var string|null
     */
    public ?string $k_promotion_to = null;

    /**
     * The note for the promotion conversion.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_convert' => $this->dl_convert,
            'id_convert' => $this->id_convert,
            'id_convert_when' => $this->id_convert_when,
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'k_promotion_to' => $this->k_promotion_to,
            'text_note' => $this->text_note,
            ],
            static fn($v) => $v !== null
        );
    }
}
