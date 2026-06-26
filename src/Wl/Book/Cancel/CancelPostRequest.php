<?php

namespace WlSdk\Wl\Book\Cancel;

class CancelPostRequest
{
    /**
     * Array of visit's key. Each key is primary key in RsVisitSql table.
     *
     * @var string[]|null
     */
    public ?array $a_visit = null;

    /**
     * Key of the business within which the action is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
            'a_visit' => $this->a_visit,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
