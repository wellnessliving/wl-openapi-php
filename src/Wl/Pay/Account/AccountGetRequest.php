<?php

namespace WlSdk\Wl\Pay\Account;

class AccountGetRequest
{
    /**
     * If `true`, information for the account's owner is returned. Clients can be configured to pay for a
     * relative's
     * expenses. For example, a parent can pay for their child.
     * Otherwise, `false` to indicate information strictly for the specified user is returned.
     *
     * @var bool|null
     */
    public ?bool $is_owner = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user to show information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_owner' => $this->is_owner,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
