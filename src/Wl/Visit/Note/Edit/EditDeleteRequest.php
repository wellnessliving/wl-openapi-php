<?php

namespace WlSdk\Wl\Visit\Note\Edit;

class EditDeleteRequest
{
    /**
     * Business key. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit note key, primary key in Sql.
     *
     * @var string|null
     */
    public ?string $k_visit_note = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit_note' => $this->k_visit_note,
            ],
            static fn ($v) => $v !== null
        );
    }
}
