<?php

namespace WlSdk\Wl\Schedule\Page\AssetLayoutView;

class AssetGetRequest
{
    /**
     * Date and time when class or appointment occurs.
     *
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * Index of booked asset.
     *
     * `null` if not initialized yet.
     *
     * @var int|null
     */
    public ?int $i_index = null;

    /**
     * Class period key. Primary key in RsClassPeriodSql table.
     *
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Location key. Primary key in RsLocationSql table.
     *
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Asset key. Primary key in RsResourceSql table.
     *
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Service key. Primary key in RsServiceSql table.
     *
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtu_date' => $this->dtu_date,
            'i_index' => $this->i_index,
            'k_class_period' => $this->k_class_period,
            'k_location' => $this->k_location,
            'k_resource' => $this->k_resource,
            'k_service' => $this->k_service,
            ],
            static fn ($v) => $v !== null
        );
    }
}
