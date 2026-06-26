<?php

namespace WlSdk\Wl\Insurance\Reimbursement\Refuse;

/**
 * Response from GET
 */
class ReimbursementRefuseEditGetResponse
{
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

    public function __construct(array $data)
    {
        $this->k_insurance_provider = isset($data['k_insurance_provider']) ? (string)$data['k_insurance_provider'] : null;
        $this->text_code = isset($data['text_code']) ? (string)$data['text_code'] : null;
        $this->text_description_provider = isset($data['text_description_provider']) ? (string)$data['text_description_provider'] : null;
        $this->text_display = isset($data['text_display']) ? (string)$data['text_display'] : null;
    }
}
