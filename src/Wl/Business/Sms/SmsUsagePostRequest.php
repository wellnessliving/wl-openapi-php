<?php

namespace WlSdk\Wl\Business\Sms;

class SmsUsagePostRequest
{
    /**
     * SMS usage limit.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Key of the business. Primary key RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Whether sms usage limit message should be ignored.
     *
     * `null` if not set yet.
     *
     * @var bool|null
     */
    public ?bool $is_usage_limit_ignore = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_limit' => $this->i_limit,
            'k_business' => $this->k_business,
            'is_usage_limit_ignore' => $this->is_usage_limit_ignore,
            ],
            static fn ($v) => $v !== null
        );
    }
}
