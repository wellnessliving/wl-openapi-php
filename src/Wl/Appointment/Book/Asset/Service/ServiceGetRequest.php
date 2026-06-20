<?php

namespace WlSdk\Wl\Appointment\Book\Asset\Service;

class ServiceGetRequest
{
    /**
     * The appointment booking date selected by the user.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * Mode type, one of {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * If `true`, back-end mode is selected.
     * In this mode, the list of asset categories must be returned even if asset selection is disabled for clients.
     *
     * If `false` for a case of front-end mode.
     * In this mode, the list of asset categories won't be returned if asset selection is disabled for clients.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Whether to show both grid layouts and custom layouts.
     *
     * `true` if custom layout should be included in the result.
     * `false` if only grid layout can be used.
     *
     * @var bool|null
     */
    public ?bool $is_grid_any = null;

    /**
     * Whether unavailable assets should be included.
     *
     * @var bool|null
     */
    public ?bool $is_show_unavailable_assets = null;

    /**
     * The appointment booking key to ignore when `a_resource_busy` is derived.
     *
     * `null` if no appointment booking must be ignored.
     *
     * @var string|null
     */
    public ?string $k_appointment_ignore = null;

    /**
     * The selected location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The selected service's key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Timezone of date and time of service start.
     *
     * Empty if client can't change in which timezone dates should be shown.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * User to get information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_start' => $this->dt_start,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_grid_any' => $this->is_grid_any,
            'is_show_unavailable_assets' => $this->is_show_unavailable_assets,
            'k_appointment_ignore' => $this->k_appointment_ignore,
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'k_timezone' => $this->k_timezone,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
