<?php

namespace WlSdk\Wl\Appointment\Book\Asset;

class CategoryGetRequest
{
    /**
     * If `true`, asset categories are loaded for backend mode. Otherwise, this will be `false` if asset categories
     * are loaded for frontend mode.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * `true` - search in all tabs.
     * `false` - search only for the selected book tab.
     *
     * @var bool|null
     */
    public ?bool $is_tab_all = null;

    /**
     * The class tab key to use for filtering services.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * The key of the location to show information for.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            'is_tab_all' => $this->is_tab_all,
            'k_class_tab' => $this->k_class_tab,
            'k_location' => $this->k_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
