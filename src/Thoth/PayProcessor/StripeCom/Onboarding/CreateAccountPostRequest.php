<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom\Onboarding;

class CreateAccountPostRequest
{
    /**
     * Key of the business within which the account should be created.
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
