<?php

namespace WlSdk\Wl\Insurance\Reimbursement\Refuse;

class ReimbursementRefuseEditPostRequest
{
    /**
     * Reimbursement refuse key. Primary key in ReimbursementRefuseSql table,
     * `null` if field is not set.
     *
     * @var string|null
     */
    public ?string $k_reimbursement_refuse = null;

    /**
     * Insurance provider key. Primary key in PartnerSql table,
     * `null` if field is not set.
     *
     * @var string|null
     */
    public ?string $k_insurance_provider = null;

    /**
     * Code of the reason, which should be unique per partner.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    /**
     * Description of the refuse from provider.
     *
     * @var string|null
     */
    public ?string $text_description_provider = null;

    /**
     * Description of the refuse, which should be shown in reimbursement reports. This field is filled by franchise
     * owner.
     *
     * @var string|null
     */
    public ?string $text_display = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_reimbursement_refuse' => $this->k_reimbursement_refuse,
            'k_insurance_provider' => $this->k_insurance_provider,
            'text_code' => $this->text_code,
            'text_description_provider' => $this->text_description_provider,
            'text_display' => $this->text_display,
            ],
            static fn ($v) => $v !== null
        );
    }
}
