<?php

namespace WlSdk\Wl\Business\NameList;

class NameListPostRequest
{
    /**
     * Array of business keys, encoded to string to get names for.
     * Each element is a primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $s_business = null;

    public function params(): array
    {
        return array_filter(
            [
            's_business' => $this->s_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
