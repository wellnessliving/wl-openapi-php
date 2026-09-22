<?php

namespace WlSdk\Wl\Business\Custom\Terms;

class CustomTermsPostRequest
{
    /**
     * Current value of every term slot to save. Has the following structure:
     *
     * @var array[]|null
     */
    public ?array $a_term_option = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_term_option' => $this->a_term_option,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
