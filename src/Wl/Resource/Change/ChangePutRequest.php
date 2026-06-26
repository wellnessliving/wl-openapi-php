<?php

namespace WlSdk\Wl\Resource\Change;

class ChangePutRequest
{
    /**
     * Index of asset to be set.
     *
     * @var int|null
     */
    public ?int $i_index = null;

    /**
     * Primary key in table RsResourceSql of asset to be set.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Primary key in table RsVisitSql of visit.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_index' => $this->i_index,
            'k_resource' => $this->k_resource,
            'k_visit' => $this->k_visit,
            ],
            static fn ($v) => $v !== null
        );
    }
}
