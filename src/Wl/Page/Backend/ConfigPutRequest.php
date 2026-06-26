<?php

namespace WlSdk\Wl\Page\Backend;

class ConfigPutRequest
{
    /**
     * Key of the business, where we want to change staff back office settings.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Each element is about one panel in the left navigation. Any number of panels can be sent. All panels, which
     * are not
     * sent, will not be changed.
     *
     *
     *
     * `null` to not change current setting in put requests.
     *
     * @var array[]|null
     */
    public ?array $a_map_state = null;

    /**
     * `true` if search field is locked in opened mode.
     * `false` if search field is closed until user clicks on it.
     * `null` to not change current setting in put requests.
     *
     * @var bool|null
     */
    public ?bool $is_search_lock = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_map_state' => $this->a_map_state,
            'is_search_lock' => $this->is_search_lock,
            ],
            static fn ($v) => $v !== null
        );
    }
}
