<?php

namespace WlSdk\Wl\Resource\Layout;

class LayoutGetResponseShapeCustom
{
    /**
     * The height for the shape {@link \WlSdk\Wl\Resource\Layout\Shape\LayoutShapeSid}. Empty for other shapes.
     *
     * @var float|null
     */
    public ?float $f_height = null;

    /**
     * The width for the shape {@link \WlSdk\Wl\Resource\Layout\Shape\LayoutShapeSid}. Empty for other shapes.
     *
     * @var float|null
     */
    public ?float $f_width = null;

    /**
     * The start angle for the shape {@link \WlSdk\Wl\Resource\Layout\Shape\LayoutShapeSid}. Empty for other
     * shapes.
     *
     * @var int|null
     */
    public ?int $i_degree_from = null;

    /**
     * The start angle for shape {@link \WlSdk\Wl\Resource\Layout\Shape\LayoutShapeSid}. Empty for other shapes.
     *
     * @var int|null
     */
    public ?int $i_degree_to = null;

    /**
     * The position of the shape by horizontal axis.
     *
     * @var int|null
     */
    public ?int $i_left = null;

    /**
     * The radius for shapes {@link \WlSdk\Wl\Resource\Layout\Shape\LayoutShapeSid} and
     * {@link \WlSdk\Wl\Resource\Layout\Shape\LayoutShapeSid}. Empty for other shapes.
     *
     * @var int|null
     */
    public ?int $i_radius = null;

    /**
     * The position of the shape by vertical axis.
     *
     * @var int|null
     */
    public ?int $i_top = null;

    /**
     * The shape type ID. One of the {@link \WlSdk\Wl\Resource\Layout\Shape\LayoutShapeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Resource\Layout\Shape\LayoutShapeSid
     */
    public ?int $id_resource_layout_shape = null;

    /**
     * The shape key.
     *
     * @var string|null
     */
    public ?string $k_resource_layout_shape = null;

    /**
     * The shape's background color.
     *
     * @var string|null
     */
    public ?string $s_color_background = null;

    /**
     * The shape's foreground color.
     *
     * @var string|null
     */
    public ?string $s_color_foreground = null;

    /**
     * The shape's title.
     *
     * @var string|null
     */
    public ?string $s_text = null;

    public function __construct(array $data)
    {
        $this->f_height = isset($data['f_height']) ? (float)$data['f_height'] : null;
        $this->f_width = isset($data['f_width']) ? (float)$data['f_width'] : null;
        $this->i_degree_from = isset($data['i_degree_from']) ? (int)$data['i_degree_from'] : null;
        $this->i_degree_to = isset($data['i_degree_to']) ? (int)$data['i_degree_to'] : null;
        $this->i_left = isset($data['i_left']) ? (int)$data['i_left'] : null;
        $this->i_radius = isset($data['i_radius']) ? (int)$data['i_radius'] : null;
        $this->i_top = isset($data['i_top']) ? (int)$data['i_top'] : null;
        $this->id_resource_layout_shape = isset($data['id_resource_layout_shape']) ? (int)$data['id_resource_layout_shape'] : null;
        $this->k_resource_layout_shape = isset($data['k_resource_layout_shape']) ? (string)$data['k_resource_layout_shape'] : null;
        $this->s_color_background = isset($data['s_color_background']) ? (string)$data['s_color_background'] : null;
        $this->s_color_foreground = isset($data['s_color_foreground']) ? (string)$data['s_color_foreground'] : null;
        $this->s_text = isset($data['s_text']) ? (string)$data['s_text'] : null;
    }
}
