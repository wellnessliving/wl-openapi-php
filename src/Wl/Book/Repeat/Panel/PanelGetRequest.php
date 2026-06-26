<?php

namespace WlSdk\Wl\Book\Repeat\Panel;

class PanelGetRequest
{
    /**
     * Business key. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key. Primary key in RsVisitSql.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * User key. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
