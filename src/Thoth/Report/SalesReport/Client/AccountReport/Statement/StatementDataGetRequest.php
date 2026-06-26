<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\AccountReport\Statement;

class StatementDataGetRequest
{
    /**
     * Period end date.
     *
     * Written back as result after period resolution so callers can read the effective date.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Period start date.
     *
     * Written back as result after period resolution so callers can read the effective date.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Whether to include account activity from the payer's relationships.
     *
     * `true` to include the account activity of all members for whom the client is the payer.
     *
     * @var bool|null
     */
    public ?bool $is_include_relationship = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Account method key. `null` for the default account balance.
     *
     * @var string|null
     */
    public ?string $k_pay_method = null;

    /**
     * Client user key.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'is_include_relationship' => $this->is_include_relationship,
            'k_business' => $this->k_business,
            'k_pay_method' => $this->k_pay_method,
            'uid_client' => $this->uid_client,
            ],
            static fn ($v) => $v !== null
        );
    }
}
