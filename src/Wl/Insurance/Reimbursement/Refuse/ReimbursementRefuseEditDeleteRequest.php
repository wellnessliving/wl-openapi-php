<?php

namespace WlSdk\Wl\Insurance\Reimbursement\Refuse;

class ReimbursementRefuseEditDeleteRequest
{
    /**
     * Reimbursement refuse key. Primary key in ReimbursementRefuseSql table,
     * `null` if field is not set.
     *
     * @var string|null
     */
    public ?string $k_reimbursement_refuse = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_reimbursement_refuse' => $this->k_reimbursement_refuse,
            ],
            static fn ($v) => $v !== null
        );
    }
}
