<?php

namespace WlSdk\Wl\Staff\Location;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * List of business staffs with the locations available to them, keyed by `uid_staff`.
     * For applications in the `APPS_USE_OLD_K_STAFF` allow-list, keys are legacy `k_staff`.
     * Each value is a list of locations available to that staff member:
     *
     * @var ListGetResponseLocation[]|null
     */
    public ?array $a_location = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? array_map(static fn ($item) => new ListGetResponseLocation((array)$item), (array)$data['a_location']) : null;
    }
}
