<?php

namespace WlSdk\Wl\Page\Backend;

/**
 * Response from GET
 */
class ConfigGetResponse
{
    /**
     * Each element is about one panel in the left navigation. Any number of panels can be sent. All panels, which
     * are not
     * sent, will not be changed.
     *
     *
     *
     * `null` to not change current setting in put requests.
     *
     * @var ConfigGetResponseMapState[]|null
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

    public function __construct(array $data)
    {
        $this->a_map_state = isset($data['a_map_state']) ? array_map(static fn ($item) => new ConfigGetResponseMapState((array)$item), (array)$data['a_map_state']) : null;
        $this->is_search_lock = isset($data['is_search_lock']) ? (bool)$data['is_search_lock'] : null;
    }
}
