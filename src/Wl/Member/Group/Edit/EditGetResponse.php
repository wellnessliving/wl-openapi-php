<?php

namespace WlSdk\Wl\Member\Group\Edit;

/**
 * Response from GET
 */
class EditGetResponse
{
    /**
     * Lead conversion type.
     * `null` if this group is not used for to track lead conversion.
     *
     * @var int|null
     * @see \WlSdk\Wl\Lead\Conversion\LeadConversionTypeSid
     */
    public ?int $id_conversion_type = null;

    /**
     * Shape of icon. One of {@link \WlSdk\Wl\Member\Group\ShapeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Member\Group\ShapeSid
     */
    public ?int $id_member_group_shape = null;

    /**
     * Whether Facility Access enabled for group.
     *
     * @var bool|null
     */
    public ?bool $is_brivo_active = null;

    /**
     * Whether Brivo invitation feature enabled for the group.
     *
     * @var bool|null
     */
    public ?bool $is_brivo_invitation_active = null;

    /**
     * `true` to enable group icon. `false` to disable.
     *
     * @var bool|null
     */
    public ?bool $is_icon = null;

    /**
     * Whether auto-update enabled for group.
     *
     * @var bool|null
     */
    public ?bool $is_update = null;

    /**
     * Key of existing template.
     *
     * Can be empty if template needs to be created.
     *
     * @var string|null
     */
    public ?string $k_search_template = null;

    /**
     * Hexadecimal color of icon background.
     *
     * @var string|null
     */
    public ?string $s_color_background = null;

    /**
     * Hexadecimal color of icon foreground.
     *
     * @var string|null
     */
    public ?string $s_color_foreground = null;

    /**
     * Characters on icon.
     *
     * @var string|null
     */
    public ?string $s_icon = null;

    /**
     * Title for a client group.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_conversion_type = isset($data['id_conversion_type']) ? (int)$data['id_conversion_type'] : null;
        $this->id_member_group_shape = isset($data['id_member_group_shape']) ? (int)$data['id_member_group_shape'] : null;
        $this->is_brivo_active = isset($data['is_brivo_active']) ? (bool)$data['is_brivo_active'] : null;
        $this->is_brivo_invitation_active = isset($data['is_brivo_invitation_active']) ? (bool)$data['is_brivo_invitation_active'] : null;
        $this->is_icon = isset($data['is_icon']) ? (bool)$data['is_icon'] : null;
        $this->is_update = isset($data['is_update']) ? (bool)$data['is_update'] : null;
        $this->k_search_template = isset($data['k_search_template']) ? (string)$data['k_search_template'] : null;
        $this->s_color_background = isset($data['s_color_background']) ? (string)$data['s_color_background'] : null;
        $this->s_color_foreground = isset($data['s_color_foreground']) ? (string)$data['s_color_foreground'] : null;
        $this->s_icon = isset($data['s_icon']) ? (string)$data['s_icon'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
