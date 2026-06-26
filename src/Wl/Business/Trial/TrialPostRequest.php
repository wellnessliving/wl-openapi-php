<?php

namespace WlSdk\Wl\Business\Trial;

class TrialPostRequest
{
    /**
     * Business key to remove trial from.
     *
     * Primary key in RsBusinessSql table.
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
