<?php

namespace WlSdk\Wl\Resource\Select;

class ResourceGetResponseResourcePeriod
{
    /**
     * Title of resources period.
     *
     * @var string|null
     */
    public ?string $html_title = null;

    /**
     * Duration of asset.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * `true` if asset was selected. `false` in other cases.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * `true` if asset are visible. `false` in other cases.
     *
     * @var bool|null
     */
    public ?bool $is_visible = null;

    /**
     * Asset key. Primary key in RsResourceSql table.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Key of asset category. Primary key in RsResourceTypeSql table.
     *
     * @var string|null
     */
    public ?string $k_resource_type = null;

    public function __construct(array $data)
    {
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->is_visible = isset($data['is_visible']) ? (bool)$data['is_visible'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->k_resource_type = isset($data['k_resource_type']) ? (string)$data['k_resource_type'] : null;
    }
}
