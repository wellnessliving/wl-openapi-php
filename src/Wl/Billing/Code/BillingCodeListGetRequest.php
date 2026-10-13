<?php

namespace WlSdk\Wl\Billing\Code;

class BillingCodeListGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Part of a code value or of a description to search for, in any case. Empty string to get the whole list.
     *
     * A code is returned if its value or its description contains this text. The case does not matter, and a code
     * value is matched by a part of it: `99` matches `99213`. A longer text than a description can not match
     * anything, so it is not accepted.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_search' => $this->text_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
