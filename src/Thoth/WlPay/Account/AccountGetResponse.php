<?php

namespace WlSdk\Thoth\WlPay\Account;

/**
 * Response from GET
 */
class AccountGetResponse
{
    /**
     * A list of the user's accounts.
     *
     * Keys are account keys. This could be `0` if the user has no accounts in the currency of the given business.
     * Values are account data:
     *
     * @var AccountGetResponseAccount|null
     */
    public ?AccountGetResponseAccount $a_account = null;

    /**
     * A list of accounts that have not been created for this user yet.
     *
     * Keys are composed of `{k_pay_method}:{k_currency}`. Each element:
     *
     * @var AccountGetResponseAccountNx[]|null
     */
    public ?array $a_account_nx = null;

    /**
     * Determines whether the user is a debtor. If `true` - the owner of this account is a debtor.
     * If `false` - the user is not a debtor or the information is not returned for the
     * account owner ([AccountApi](/Thoth/WlPay/Account/Account.json) is `false`).
     *
     * @var bool|null
     */
    public ?bool $is_debtor = null;

    public function __construct(array $data)
    {
        $this->a_account = isset($data['a_account']) ? new AccountGetResponseAccount((array)$data['a_account']) : null;
        $this->a_account_nx = isset($data['a_account_nx']) ? array_map(static fn ($item) => new AccountGetResponseAccountNx((array)$item), (array)$data['a_account_nx']) : null;
        $this->is_debtor = isset($data['is_debtor']) ? (bool)$data['is_debtor'] : null;
    }
}
