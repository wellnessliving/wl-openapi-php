<?php

namespace WlSdk\Wl\Login\Attendance;

class AttendanceListGetResponseListWaitInfoIcon
{
    /**
     * Color of background.
     *
     * @var string|null
     */
    public ?string $s_color_background = null;

    /**
     * Color of letter.
     *
     * @var string|null
     */
    public ?string $s_color_foreground = null;

    /**
     * Icon letter.
     *
     * @var string|null
     */
    public ?string $s_letter = null;

    /**
     * Symbol from font of shapes.
     *
     * @var string|null
     */
    public ?string $s_shape = null;

    /**
     * Title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * SID of the icon type shape. Constant from {@link \WlSdk\Wl\Login\Type\ShapeSid}.
     *
     * @var string|null
     */
    public ?string $sid_shape = null;

    public function __construct(array $data)
    {
        $this->s_color_background = isset($data['s_color_background']) ? (string)$data['s_color_background'] : null;
        $this->s_color_foreground = isset($data['s_color_foreground']) ? (string)$data['s_color_foreground'] : null;
        $this->s_letter = isset($data['s_letter']) ? (string)$data['s_letter'] : null;
        $this->s_shape = isset($data['s_shape']) ? (string)$data['s_shape'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->sid_shape = isset($data['sid_shape']) ? (string)$data['sid_shape'] : null;
    }
}
