<?php

namespace WlSdk\Wl\Insurance\Reimbursement;

class ReimbursementResubmitGetRequest
{
    /**
     * Key of the reimbursement record to be resubmitted.
     *
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_insurance_reimbursement = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_insurance_reimbursement' => $this->k_insurance_reimbursement,
            ],
            static fn ($v) => $v !== null
        );
    }
}
