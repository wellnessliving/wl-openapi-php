<?php

namespace WlSdk\Wl\Insurance\Enrollment;

class EnrollmentPanelGetResponseInfo
{
    /**
     * Determines whether the requiring ACH account.
     *
     * @var bool|null
     */
    public ?bool $is_reimbursement_information_required = null;

    /**
     * Part of reimbursement account number.
     *
     * @var string|null
     */
    public ?string $s_account = null;

    /**
     * Insurance organization name.
     *
     * @var string|null
     */
    public ?string $text_insurance_organization = null;

    public function __construct(array $data)
    {
        $this->is_reimbursement_information_required = isset($data['is_reimbursement_information_required']) ? (bool)$data['is_reimbursement_information_required'] : null;
        $this->s_account = isset($data['s_account']) ? (string)$data['s_account'] : null;
        $this->text_insurance_organization = isset($data['text_insurance_organization']) ? (string)$data['text_insurance_organization'] : null;
    }
}
