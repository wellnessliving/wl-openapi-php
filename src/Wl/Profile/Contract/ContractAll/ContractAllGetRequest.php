<?php

namespace WlSdk\Wl\Profile\Contract\ContractAll;

class ContractAllGetRequest
{
    /**
     * Business to get information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User to get information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
