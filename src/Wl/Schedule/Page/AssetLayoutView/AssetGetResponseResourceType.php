<?php

namespace WlSdk\Wl\Schedule\Page\AssetLayoutView;

class AssetGetResponseResourceType
{
    /**
     * List of available assets. Every element has next keys:
     *
     * @var AssetGetResponseResourceTypeResourceList|null
     */
    public ?AssetGetResponseResourceTypeResourceList $a_resource_list = null;

    /**
     * `true` - client selected resource from current group; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_client_select = null;

    /**
     * `true` - assets of this category do not belong to certain users but belong to session in general; `false` -
     * assets belong to certain users.
     *
     * @var bool|null
     */
    public ?bool $is_share = null;

    /**
     * Key of asset layout. Primary key in Sql table.
     *
     * @var string|null
     */
    public ?string $k_resource_layout = null;

    /**
     * Key of asset category. Primary key in RsResourceTypeSql table.
     *
     * @var string|null
     */
    public ?string $k_resource_type = null;

    /**
     * Title of asset category.
     *
     * @var string|null
     */
    public ?string $s_resource_type = null;

    public function __construct(array $data)
    {
        $this->a_resource_list = isset($data['a_resource_list']) ? new AssetGetResponseResourceTypeResourceList((array)$data['a_resource_list']) : null;
        $this->is_client_select = isset($data['is_client_select']) ? (bool)$data['is_client_select'] : null;
        $this->is_share = isset($data['is_share']) ? (bool)$data['is_share'] : null;
        $this->k_resource_layout = isset($data['k_resource_layout']) ? (string)$data['k_resource_layout'] : null;
        $this->k_resource_type = isset($data['k_resource_type']) ? (string)$data['k_resource_type'] : null;
        $this->s_resource_type = isset($data['s_resource_type']) ? (string)$data['s_resource_type'] : null;
    }
}
