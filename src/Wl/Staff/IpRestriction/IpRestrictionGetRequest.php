<?php

namespace WlSdk\Wl\Staff\IpRestriction;

class IpRestrictionGetRequest
{
    /**
     * List of IP restrictions to check against the current logged-in user.
     *
     * @var array[]|null
     */
    public ?array $a_ip_restriction = null;

    /**
     * Business key, primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_ip_restriction' => $this->a_ip_restriction,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
