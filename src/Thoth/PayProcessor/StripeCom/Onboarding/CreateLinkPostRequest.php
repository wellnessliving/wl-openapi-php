<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom\Onboarding;

class CreateLinkPostRequest
{
    /**
     * Key of the business within which the account should be created.
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
