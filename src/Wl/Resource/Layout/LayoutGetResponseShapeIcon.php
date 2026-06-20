<?php
namespace WlSdk\Wl\Resource\Layout;

class LayoutGetResponseShapeIcon
{
    /**
     * The cell number, positioned by the horizontal axis. Empty if grid is turned off.
     *
     * @var int|null
     */
    public ?int $i_cell_x = null;

    /**
     * The cell number, positioned by the vertical axis. Empty if grid is turned off.
     *
     * @var int|null
     */
    public ?int $i_cell_y = null;

    /**
     * The horizontal position in pixels. Empty if grid is turned on.
     *
     * @var int|null
     */
    public ?int $i_left = null;

    /**
     * The vertical position in pixels. Empty if grid is turned on.
     *
     * @var int|null
     */
    public ?int $i_top = null;

    /**
     * The icon ID. One of the {@link \WlSdk\Wl\Resource\Image\ImageIconSid} constants.
     *
     * @var \WlSdk\Wl\Resource\Image\ImageIconSid|null
     */
    public ?\WlSdk\Wl\Resource\Image\ImageIconSid $id_shape_icon = null;

    public function __construct(array $data)
    {
        $this->i_cell_x = isset($data['i_cell_x']) ? (int)$data['i_cell_x'] : null;
        $this->i_cell_y = isset($data['i_cell_y']) ? (int)$data['i_cell_y'] : null;
        $this->i_left = isset($data['i_left']) ? (int)$data['i_left'] : null;
        $this->i_top = isset($data['i_top']) ? (int)$data['i_top'] : null;
        $this->id_shape_icon = isset($data['id_shape_icon']) ? \WlSdk\Wl\Resource\Image\ImageIconSid::tryFrom((int)$data['id_shape_icon']) : null;
    }
}
