<?php

namespace WlSdk\Wl\Business\Search;

class BusinessSearchGetRequest
{
    /**
     * If `true`, the return only active customers, `false` - all business.
     *
     * @var bool|null
     */
    public ?bool $is_customer = true;

    /**
     * If `true`, returns only active customer businesses, if `false`, returns all businesses.
     *
     * @var bool|null
     */
    public ?bool $is_strict = null;

    /**
     * Given business name to search by.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_customer' => $this->is_customer,
            'is_strict' => $this->is_strict,
            'text_name' => $this->text_name,
            ],
            static fn ($v) => $v !== null
        );
    }
}
