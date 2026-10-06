<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseGuestPass
{
    /**
     * Number of times guest pass can be used per period. `null` for unlimited guest pass.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Number of times guest pass can be used per day. `null` for limited guest pass.
     *
     * @var int|null
     */
    public ?int $i_limit_daily = null;

    /**
     * Number of periods after which guest pass limits are reset. `null` for unlimited guest pass.
     *
     * @var int|null
     */
    public ?int $i_period = null;

    /**
     * Period type by which guest pass limits are reset. One of the {@link \WlSdk\ADurationSid} constants. `null`
     * for unlimited guest pass.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_period = null;

    /**
     * Type by which guest pass limits are reset. One of {@link
     * \WlSdk\Wl\Promotion\Guest\Pass\GuestPassResetTypeSid} constants.
     *     `null` for unlimited guest pass.
     *
     * @var int|null
     * @see \WlSdk\Wl\Promotion\Guest\Pass\GuestPassResetTypeSid
     */
    public ?int $id_reset_type = null;

    /**
     * Guest pass promotion key.
     *
     * @var string|null
     */
    public ?string $k_promotion_guest = null;

    /**
     * Formatted guest pass limits.
     *
     * @var string|null
     */
    public ?string $text_limit = null;

    /**
     * Guest pass promotion title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_limit_daily = isset($data['i_limit_daily']) ? (int)$data['i_limit_daily'] : null;
        $this->i_period = isset($data['i_period']) ? (int)$data['i_period'] : null;
        $this->id_period = isset($data['id_period']) ? (int)$data['id_period'] : null;
        $this->id_reset_type = isset($data['id_reset_type']) ? (int)$data['id_reset_type'] : null;
        $this->k_promotion_guest = isset($data['k_promotion_guest']) ? (string)$data['k_promotion_guest'] : null;
        $this->text_limit = isset($data['text_limit']) ? (string)$data['text_limit'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
