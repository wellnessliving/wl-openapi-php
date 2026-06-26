<?php

namespace WlSdk\Wl\Insurance\Reimbursement\Refuse;

class ReimbursementRefuseListGetResponseList
{
    /**
     * Insurance reimbursement refuse key. Primary key from ReimbursementRefuseSql table.
     *
     * @var string|null
     */
    public ?string $k_reimbursement_refuse = null;

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

    /**
     * Insurance provider name.
     *
     * @var string|null
     */
    public ?string $text_insurance_provider = null;

    public function __construct(array $data)
    {
        $this->k_reimbursement_refuse = isset($data['k_reimbursement_refuse']) ? (string)$data['k_reimbursement_refuse'] : null;
        $this->text_code = isset($data['text_code']) ? (string)$data['text_code'] : null;
        $this->text_description_provider = isset($data['text_description_provider']) ? (string)$data['text_description_provider'] : null;
        $this->text_display = isset($data['text_display']) ? (string)$data['text_display'] : null;
        $this->text_insurance_provider = isset($data['text_insurance_provider']) ? (string)$data['text_insurance_provider'] : null;
    }
}
