<?php

namespace WlSdk\Wl\Business\Sms\Settings;

class SmsAdminApplicationResubmitPostRequest
{
    /**
     * Business key, primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
