<?php

namespace WlSdk\Wl\Resource\Layout;

class LayoutGetResponseResource
{
    /**
     * The asset's appearance information.
     *
     * @var LayoutGetResponseResourceImage|null
     */
    public ?LayoutGetResponseResourceImage $a_image = null;

    /**
     * The vertical cell number. Not empty if assets are snapped to grid.
     *
     * @var int|null
     */
    public ?int $i_cell_x = null;

    /**
     * The horizontal cell number. Not empty if assets are snapped to grid.
     *
     * @var int|null
     */
    public ?int $i_cell_y = null;

    /**
     * The horizontal offset in pixels. Not empty if assets aren't snapped to grid.
     *
     * @var int|null
     */
    public ?int $i_left = null;

    /**
     * The vertical offset in pixels. Not empty if assets aren't snapped to grid.
     *
     * @var int|null
     */
    public ?int $i_top = null;

    /**
     * Asset number.
     *
     * @var int|null
     */
    public ?int $i_index = null;

    /**
     * The asset key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Asset name.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * The asset title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new LayoutGetResponseResourceImage((array)$data['a_image']) : null;
        $this->i_cell_x = isset($data['i_cell_x']) ? (int)$data['i_cell_x'] : null;
        $this->i_cell_y = isset($data['i_cell_y']) ? (int)$data['i_cell_y'] : null;
        $this->i_left = isset($data['i_left']) ? (int)$data['i_left'] : null;
        $this->i_top = isset($data['i_top']) ? (int)$data['i_top'] : null;
        $this->i_index = isset($data['i_index']) ? (int)$data['i_index'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
