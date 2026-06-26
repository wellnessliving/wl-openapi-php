<?php

namespace WlSdk\Wl\Schedule\Page\AssetLayoutView;

/**
 * Response from GET
 */
class AssetGetResponse
{
    /**
     * Asset category data of selected asset. Has next structure:
     *
     * @var AssetGetResponseResourceType|null
     */
    public ?AssetGetResponseResourceType $a_resource_type = null;

    public function __construct(array $data)
    {
        $this->a_resource_type = isset($data['a_resource_type']) ? new AssetGetResponseResourceType((array)$data['a_resource_type']) : null;
    }
}
