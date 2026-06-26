<?php

namespace WlSdk\Wl\Report\Collection\Dynamic;

class CollectionManagePutRequest
{
    /**
     * Business key.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the dynamic collection to manage. Primary key in DynamicCollectionSql table.
     *
     * @var string|null
     */
    public ?string $k_dynamic_collection = null;

    /**
     * Key of the user performing the request. Must be the same as currently logged-in user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * List of widgets that are displayed on the dashboard.
     *
     * `null` if list of widgets doesn't need to be updated.
     *
     * Structure of each item:
     *
     * @var array[]|null
     */
    public ?array $a_report_list = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_dynamic_collection' => $this->k_dynamic_collection,
            'uid' => $this->uid,
            'a_report_list' => $this->a_report_list,
            ],
            static fn ($v) => $v !== null
        );
    }
}
