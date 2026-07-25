<?php

namespace WlSdk\Wl\Business\Search;

class BusinessSearchUserGetRequest
{
    /**
     * If `true`, the return only active customers, `false` - all business.
     *
     * @var bool|null
     */
    public ?bool $is_customer = true;

    /**
     * User email to search business keys.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

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
            'text_mail' => $this->text_mail,
            'text_name' => $this->text_name,
            ],
            static fn ($v) => $v !== null
        );
    }
}
