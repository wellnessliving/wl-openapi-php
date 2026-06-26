<?php

namespace WlSdk\Wl\Report\Mail;

class PostcardSummaryGetRequest
{
    /**
     * Business in which clients must be searched.
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of the element with the list of receivers.
     * See RsReportMail::list_set().
     *
     * @var string|null
     */
    public ?string $s_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_id' => $this->s_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
