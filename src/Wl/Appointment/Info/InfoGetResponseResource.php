<?php
namespace WlSdk\Wl\Appointment\Info;

class InfoGetResponseResource
{
    /**
     * Background color of the asset as an integer (RGB).
     *
     * @var int|null
     */
    public ?int $i_color_background = null;

    /**
     * Border color of the asset as an integer (RGB).
     *
     * @var int|null
     */
    public ?int $i_color_border = null;

    /**
     * Index of the booked asset slot.
     *
     * @var int|null
     */
    public ?int $i_index = null;

    /**
     * `true` if the asset was removed from the booking, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_remove = null;

    /**
     * Asset key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Asset category key.
     *
     * @var string|null
     */
    public ?string $k_resource_type = null;

    /**
     * Asset name.
     *
     * @var string|null
     */
    public ?string $s_resource = null;

    /**
     * Asset category name.
     *
     * @var string|null
     */
    public ?string $s_resource_type = null;

    /**
     * Display alias for the asset slot, if configured.
     *
     * @var string|null
     */
    public ?string $text_resource_alias = null;

    public function __construct(array $data)
    {
        $this->i_color_background = isset($data['i_color_background']) ? (int)$data['i_color_background'] : null;
        $this->i_color_border = isset($data['i_color_border']) ? (int)$data['i_color_border'] : null;
        $this->i_index = isset($data['i_index']) ? (int)$data['i_index'] : null;
        $this->is_remove = isset($data['is_remove']) ? (bool)$data['is_remove'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->k_resource_type = isset($data['k_resource_type']) ? (string)$data['k_resource_type'] : null;
        $this->s_resource = isset($data['s_resource']) ? (string)$data['s_resource'] : null;
        $this->s_resource_type = isset($data['s_resource_type']) ? (string)$data['s_resource_type'] : null;
        $this->text_resource_alias = isset($data['text_resource_alias']) ? (string)$data['text_resource_alias'] : null;
    }
}
