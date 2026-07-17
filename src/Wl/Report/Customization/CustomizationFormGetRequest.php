<?php

namespace WlSdk\Wl\Report\Customization;

class CustomizationFormGetRequest
{
    /**
     * Report page CID.
     *
     * @var int|null
     * @see \WlSdk\Thoth\ReportCore\Generator\ReportPageAbstract
     */
    public ?int $cid_page = null;

    /**
     * Report CID.
     *
     * @var int|null
     * @see \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract
     */
    public ?int $cid_report = null;

    /**
     * Business primary key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Primary key of a saved report.
     *
     * `null` means that report is not saved.
     *
     * @var string|null
     */
    public ?string $k_report_save = null;

    /**
     * Report CID list to that page customization form must be converted. String separated with `,`.
     *
     * May be specified only if {@link \WlSdk\Wl\Report\Customization\CustomizationForm} in not empty.
     *
     * @var string|null
     */
    public ?string $s_report = null;

    /**
     * Current user's primary key.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_page' => $this->cid_page,
            'cid_report' => $this->cid_report,
            'k_business' => $this->k_business,
            'k_report_save' => $this->k_report_save,
            's_report' => $this->s_report,
            'uid_actor' => $this->uid_actor,
            ],
            static fn ($v) => $v !== null
        );
    }
}
