<?php

namespace WlSdk\Wl\Insurance\Reimbursement\Import;

class FileImportSosDeleteRequest
{
    /**
     * Year, when reimbursement import was started.
     *
     * @var int|null
     */
    public ?int $i_year = null;

    /**
     * Month, when reimbursement import was started.
     *
     * @var int|null
     * @see \WlSdk\ADateMonthSid
     */
    public ?int $id_month = null;

    /**
     * Business key, where reimbursement import was started.
     *
     * Primary key in the table RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Insurance partner key, where reimbursement import was started.
     *
     * Primary key in the table PartnerSql.
     *
     * @var string|null
     */
    public ?string $k_partner = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_year' => $this->i_year,
            'id_month' => $this->id_month,
            'k_business' => $this->k_business,
            'k_partner' => $this->k_partner,
            ],
            static fn ($v) => $v !== null
        );
    }
}
