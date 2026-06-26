<?php

namespace WlSdk\Wl\Report\Collection\Dynamic;

class ReportListGetRequest
{
    /**
     * CID of a subclass of {@link \WlSdk\Wl\Report\Collection\DynamicCollection}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Report\Collection\DynamicCollection
     */
    public ?int $cid_dynamic_collection = null;

    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key. Primary key in the PassportLoginSql table.
     *
     * Must be the same as currently logged-in user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_dynamic_collection' => $this->cid_dynamic_collection,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
