<?php

namespace WlSdk\Wl\Business\Franchise\Push;

class ModuleSetupPostRequest
{
    /**
     * CID of the module to push.
     *
     * @var int|null
     */
    public ?int $cid_module = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Data for loading public variables of push module.
     *
     * @var array|null
     */
    public ?array $a_data = null;

    /**
     * Locations in which it is necessary to push an item.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_module' => $this->cid_module,
            'k_business' => $this->k_business,
            'a_data' => $this->a_data,
            'a_location' => $this->a_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
