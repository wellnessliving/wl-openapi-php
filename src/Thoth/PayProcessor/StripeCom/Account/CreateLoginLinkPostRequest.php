<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom\Account;

class CreateLoginLinkPostRequest
{
    /**
     * Key of the business within which the link should be created.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of the account for which link should be created.
     *
     * @var string|null
     */
    public ?string $s_account = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_account' => $this->s_account,
            ],
            static fn ($v) => $v !== null
        );
    }
}
