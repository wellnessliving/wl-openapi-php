<?php

namespace WlSdk\Wl\Lead;

class LeadStatusPostRequest
{
    /**
     * Status of the lead record. One of {@link \WlSdk\RsLeadStatusSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsLeadStatusSid
     */
    public ?int $id_lead_status = null;

    /**
     * Whether to create lead if it does not exist.
     *
     * If `true` and lead does not exist, create it, otherwise throw an error.
     *
     * @var bool|null
     */
    public ?bool $is_lead_create_nx = null;

    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key. Primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_lead_status' => $this->id_lead_status,
            'is_lead_create_nx' => $this->is_lead_create_nx,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
