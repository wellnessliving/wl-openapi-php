<?php

namespace WlSdk\Wl\Business\Custom\Terms;

class CustomTermsPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Current value of every term slot. Returned by `get()`, posted to
     * `post()` to save.
     *
     * @var array[]|null
     */
    public ?array $a_term_option = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_term_option' => $this->a_term_option,
            ],
            static fn ($v) => $v !== null
        );
    }
}
