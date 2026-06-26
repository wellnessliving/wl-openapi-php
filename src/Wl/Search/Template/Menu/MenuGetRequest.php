<?php

namespace WlSdk\Wl\Search\Template\Menu;

class MenuGetRequest
{
    /**
     * Business key.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Unique string identifying the name of the search group.
     *
     * @var string|null
     */
    public ?string $s_search_group = null;

    /**
     * User key.
     * Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_search_group' => $this->s_search_group,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
