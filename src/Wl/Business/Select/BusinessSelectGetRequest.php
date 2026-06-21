<?php

namespace WlSdk\Wl\Business\Select;

class BusinessSelectGetRequest
{
    /**
     * Configuration data used to determine the list of businesses returned. This array has the following keys:
     *
     * @var array|null
     */
    public ?array $a_config = null;

    /**
     * Business in which a list of business is requested.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User who is requesting the list of businesses.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_config' => $this->a_config,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
