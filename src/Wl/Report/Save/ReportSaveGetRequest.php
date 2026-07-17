<?php

namespace WlSdk\Wl\Report\Save;

class ReportSaveGetRequest
{
    /**
     * Business key of the saved report.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Report save key.
     *
     * @var string|null
     */
    public ?string $k_report_save = null;

    /**
     * UID user's key of the actor.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_report_save' => $this->k_report_save,
            'uid_actor' => $this->uid_actor,
            ],
            static fn ($v) => $v !== null
        );
    }
}
