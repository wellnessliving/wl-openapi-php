<?php

namespace WlSdk\Wl\Resource\Select;

class ResourceGetRequest
{
    /**
     * Duration of the service in minutes.
     * `null` if duration not set.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * ID of the purchase item.
     * One of {@link \WlSdk\RsPurchaseItemSid} constants.
     * `null` if purchase item id not set.
     *
     * @var int|null
     * @see \WlSdk\RsPurchaseItemSid
     */
    public ?int $id_purchase_item = null;

    /**
     * If return only bookable resources. If `false` returns all resources.
     *
     * @var bool|null
     */
    public ?bool $is_book = null;

    /**
     * If need period only data.
     *
     * @var bool|null
     */
    public ?bool $is_period_only = null;

    /**
     * Is resource period data needed. `true` if need resource period data.
     *   `false` if this data not need.
     *
     * @var bool|null
     */
    public ?bool $is_resource_period = null;

    /**
     * Business key, primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location to show resource.
     * Primary key in RsLocationSql table.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Asset primary key in RsResourceSql table.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Whether duration is empty. `true` if duration not empty.
     *   `false` if duration empty.
     *
     * @var bool|null
     */
    public ?bool $not_duration_empty = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_duration' => $this->i_duration,
            'id_purchase_item' => $this->id_purchase_item,
            'is_book' => $this->is_book,
            'is_period_only' => $this->is_period_only,
            'is_resource_period' => $this->is_resource_period,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_resource' => $this->k_resource,
            'not_duration_empty' => $this->not_duration_empty,
            ],
            static fn ($v) => $v !== null
        );
    }
}
