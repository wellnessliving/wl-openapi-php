<?php

namespace WlSdk\Wl\Integration\Curves\Partner;

/**
 * Response from GET
 */
class PartnerEditGetResponse
{
    /**
     * Channel type ID. One of {@link \WlSdk\Wl\Integration\Curves\ChannelTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Integration\Curves\ChannelTypeSid
     */
    public ?int $id_channel_type = null;

    /**
     * Curves country ID. One of {@link \WlSdk\Wl\Integration\Curves\CurvesCountrySid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Integration\Curves\CurvesCountrySid
     */
    public ?int $id_curves_country = null;

    /**
     * Deal type ID. One of {@link \WlSdk\Wl\Integration\Curves\DealTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Integration\Curves\DealTypeSid
     */
    public ?int $id_deal_type = null;

    /**
     * Reimbursement type ID. One of {@link \WlSdk\Wl\Insurance\Reimbursement\ReimbursementTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Insurance\Reimbursement\ReimbursementTypeSid
     */
    public ?int $id_reimbursement_type = null;

    /**
     * Determines whether the program is active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Determines whether the ACH account is required.
     *
     * @var bool|null
     */
    public ?bool $is_reimbursement_information_required = null;

    /**
     * Partner key in Curves. Need for update wellness program.
     *
     * @var string|null
     */
    public ?string $s_partner = null;

    /**
     * Name of the curves partner.
     *
     * @var string|null
     */
    public ?string $text_partner = null;

    public function __construct(array $data)
    {
        $this->id_channel_type = isset($data['id_channel_type']) ? (int)$data['id_channel_type'] : null;
        $this->id_curves_country = isset($data['id_curves_country']) ? (int)$data['id_curves_country'] : null;
        $this->id_deal_type = isset($data['id_deal_type']) ? (int)$data['id_deal_type'] : null;
        $this->id_reimbursement_type = isset($data['id_reimbursement_type']) ? (int)$data['id_reimbursement_type'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_reimbursement_information_required = isset($data['is_reimbursement_information_required']) ? (bool)$data['is_reimbursement_information_required'] : null;
        $this->s_partner = isset($data['s_partner']) ? (string)$data['s_partner'] : null;
        $this->text_partner = isset($data['text_partner']) ? (string)$data['text_partner'] : null;
    }
}
