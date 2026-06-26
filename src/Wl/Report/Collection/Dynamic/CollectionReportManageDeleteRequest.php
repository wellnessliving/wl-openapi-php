<?php

namespace WlSdk\Wl\Report\Collection\Dynamic;

class CollectionReportManageDeleteRequest
{
    /**
     * Report ID within the collection, one of {@link \WlSdk\RsReportSid}.
     *
     * Must be provided in combination with `k_dynamic_collection`.
     * Ignored if `k_dynamic_collection_report` is provided.
     *
     * `null` if `k_dynamic_collection_report` is provided instead.
     *
     * @var int|null
     * @see \WlSdk\RsReportSid
     */
    public ?int $id_report = null;

    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of dynamic collection to which `id_report` belongs. Primary key in DynamicCollectionSql table.
     *
     * Must be provided in combination with `id_report`.
     * Ignored if `k_dynamic_collection_report` is provided.
     *
     * `null` if `k_dynamic_collection_report` is provided instead.
     *
     * @var string|null
     */
    public ?string $k_dynamic_collection = null;

    /**
     * Key of the dynamic collection report to manage. Primary key in DynamicCollectionReportSql table.
     *
     * Must be provided if `k_dynamic_collection` and `id_report` are empty.
     *
     * `null` if `k_dynamic_collection` and `id_report` pair are provided instead.
     *
     * @var string|null
     */
    public ?string $k_dynamic_collection_report = null;

    /**
     * Key of the user performing the request. Must be the same as currently logged-in user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_report' => $this->id_report,
            'k_business' => $this->k_business,
            'k_dynamic_collection' => $this->k_dynamic_collection,
            'k_dynamic_collection_report' => $this->k_dynamic_collection_report,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
