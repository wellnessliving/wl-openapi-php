<?php

namespace WlSdk\Wl\Schedule\Page\AssetLayoutView;

class AssetGetResponseResourceTypeResourceList
{
    /**
     * Asset image data. See RsResourceImage::data() for details.
     *
     * @var array|null
     */
    public ?array $a_image = null;

    /**
     * Number of asset. Actual for assets with quantity more than `1`.
     *
     * @var int|null
     */
    public ?int $i_index = null;

    /**
     * `true` means that this asset is selected by client, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_current = null;

    /**
     * Key of asset. Primary key RsResourceSql table.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Title of asset.
     *
     * @var string|null
     */
    public ?string $s_resource = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? (array)$data['a_image'] : null;
        $this->i_index = isset($data['i_index']) ? (int)$data['i_index'] : null;
        $this->is_current = isset($data['is_current']) ? (bool)$data['is_current'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->s_resource = isset($data['s_resource']) ? (string)$data['s_resource'] : null;
    }
}
