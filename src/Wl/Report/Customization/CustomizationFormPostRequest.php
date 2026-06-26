<?php

namespace WlSdk\Wl\Report\Customization;

class CustomizationFormPostRequest
{
    /**
     * Report page CID.
     *
     * @var int|null
     */
    public ?int $cid_page = null;

    /**
     * Page CID.
     *
     * @var int|null
     */
    public ?int $cid_report = null;

    /**
     * Business primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Primary key of a saved report in RsReportSaveSql table.
     *
     * `null` means that report is not saved.
     *
     * @var string|null
     */
    public ?string $k_report_save = null;

    /**
     * Current user's primary key in PassportLoginAr table.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    /**
     * Customization form data.
     * See CustomizationFormAbstract::toArray() for details.
     *
     * @var array|null
     */
    public ?array $a_customization_form = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_page' => $this->cid_page,
            'cid_report' => $this->cid_report,
            'k_business' => $this->k_business,
            'k_report_save' => $this->k_report_save,
            'uid_actor' => $this->uid_actor,
            'a_customization_form' => $this->a_customization_form,
            ],
            static fn ($v) => $v !== null
        );
    }
}
