<?php

namespace WlSdk\Wl\Resource\Layout;

/**
 * Response from GET
 */
class LayoutGetResponse
{
    /**
     * The list of assets. Every element contains the following keys:
     *
     * @var LayoutGetResponseResource[]|null
     */
    public ?array $a_resource = null;

    /**
     * A list of custom shapes. Every element is an array with the following keys:
     *
     * @var LayoutGetResponseShapeCustom[]|null
     */
    public ?array $a_shape_custom = null;

    /**
     * A list of shapes and icons. Every element is an array with the following keys:
     *
     * @var LayoutGetResponseShapeIcon[]|null
     */
    public ?array $a_shape_icon = null;

    /**
     * The grid size.
     *
     * @var int|null
     */
    public ?int $i_grid = null;

    /**
     * This will be `true` if snap to grid is enabled. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_grid = null;

    /**
     * The key of the asset category.
     *
     * @var string|null
     */
    public ?string $k_resource_type = null;

    /**
     * The color for active assets. Hex encoding with prefix `#`.
     *
     * @var string|null
     */
    public ?string $s_color_active = null;

    /**
     * This will be `true` if asset names are displayed. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $show_name = null;

    /**
     * This will be `true` if asset numbers are displayed. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $show_number = null;

    public function __construct(array $data)
    {
        $this->a_resource = isset($data['a_resource']) ? array_map(static fn ($item) => new LayoutGetResponseResource((array)$item), (array)$data['a_resource']) : null;
        $this->a_shape_custom = isset($data['a_shape_custom']) ? array_map(static fn ($item) => new LayoutGetResponseShapeCustom((array)$item), (array)$data['a_shape_custom']) : null;
        $this->a_shape_icon = isset($data['a_shape_icon']) ? array_map(static fn ($item) => new LayoutGetResponseShapeIcon((array)$item), (array)$data['a_shape_icon']) : null;
        $this->i_grid = isset($data['i_grid']) ? (int)$data['i_grid'] : null;
        $this->is_grid = isset($data['is_grid']) ? (bool)$data['is_grid'] : null;
        $this->k_resource_type = isset($data['k_resource_type']) ? (string)$data['k_resource_type'] : null;
        $this->s_color_active = isset($data['s_color_active']) ? (string)$data['s_color_active'] : null;
        $this->show_name = isset($data['show_name']) ? (bool)$data['show_name'] : null;
        $this->show_number = isset($data['show_number']) ? (bool)$data['show_number'] : null;
    }
}
