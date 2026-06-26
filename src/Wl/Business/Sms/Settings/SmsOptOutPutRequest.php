<?php

namespace WlSdk\Wl\Business\Sms\Settings;

class SmsOptOutPutRequest
{
    /**
     * Business key, primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Indicates if the business has opted-out of all SMS features entirely.
     *
     * @var bool|null
     */
    public ?bool $is_opt_out = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'is_opt_out' => $this->is_opt_out,
            ],
            static fn ($v) => $v !== null
        );
    }
}
