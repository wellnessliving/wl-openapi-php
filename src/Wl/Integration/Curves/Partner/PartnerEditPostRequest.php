<?php

namespace WlSdk\Wl\Integration\Curves\Partner;

class PartnerEditPostRequest
{
    /**
     * If a partner is edited, its key is stored here.
     *
     * Primary key in PartnerSql table.
     *
     * `null` if a new partner should be created.
     * This value is required for edit and delete operations.
     *
     * @var string|null
     */
    public ?string $k_partner = null;

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
     * Name of the curves partner.
     *
     * @var string|null
     */
    public ?string $text_partner = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_partner' => $this->k_partner,
            'id_channel_type' => $this->id_channel_type,
            'id_curves_country' => $this->id_curves_country,
            'id_deal_type' => $this->id_deal_type,
            'id_reimbursement_type' => $this->id_reimbursement_type,
            'is_active' => $this->is_active,
            'is_reimbursement_information_required' => $this->is_reimbursement_information_required,
            'text_partner' => $this->text_partner,
            ],
            static fn ($v) => $v !== null
        );
    }
}
