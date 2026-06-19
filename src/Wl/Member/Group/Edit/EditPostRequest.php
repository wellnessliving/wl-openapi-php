<?php
namespace WlSdk\Wl\Member\Group\Edit;

class EditPostRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Member group primary key in Sql table.
     *
     * @var string|null
     */
    public ?string $k_member_group = null;

    /**
     * Key of existing template.
     * Primary key in the SearchTemplateSql table.
     * 
     * Can be empty if template needs to be created.
     *
     * @var string|null
     */
    public ?string $k_search_template = null;

    /**
     * Unique string identifying the name of the search group.
     *
     * @var string|null
     */
    public ?string $s_search_group = null;

    /**
     * User key.
     * Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Entity in array format.
     * For more information about the format, see SearchCriteriaList::createArray() method.
     *
     * @var array|null
     */
    public ?array $a_criteria = null;

    /**
     * Logic connection between criteria.
     * See `a_criteria_logic` for details.
     *
     * @var string[][][][]|null
     */
    public ?array $a_logic = null;

    /**
     * Search entity CID list.
     * Constants from [SearchEntityAbstract](#/components/schemas/Wl.Search.SearchEntityAbstract) subclasses.
     *
     * @var int[]|null
     */
    public ?array $a_search_entity = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_staff_role_selected = null;

    /**
     * Lead conversion type.
     * `null` if this group is not used for to track lead conversion.
     *
     * @var int|null
     */
    public ?int $id_conversion_type = null;

    /**
     * Shape of icon. One of [ShapeSid](#/components/schemas/Wl.Member.Group.ShapeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_member_group_shape = null;

    /**
     * Type of share option.
     * One of [ShareSid](#/components/schemas/Wl.Share.ShareSid) constants.
     *
     * @var int|null
     */
    public ?int $id_share = null;

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
     * Entity in array format.
     * For more information about the format, see SearchCriteriaList::createArray() method.
     * Alternative of self::$a_criteria to transfer data via HTTP as one variable.
     *
     * @var array|null
     */
    public ?array $json_criteria = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_member_group' => $this->k_member_group,
            'k_search_template' => $this->k_search_template,
            's_search_group' => $this->s_search_group,
            'uid' => $this->uid,
            'a_criteria' => $this->a_criteria,
            'a_logic' => $this->a_logic,
            'a_search_entity' => $this->a_search_entity,
            'a_staff_role_selected' => $this->a_staff_role_selected,
            'id_conversion_type' => $this->id_conversion_type,
            'id_member_group_shape' => $this->id_member_group_shape,
            'id_share' => $this->id_share,
            'is_brivo_active' => $this->is_brivo_active,
            'is_brivo_invitation_active' => $this->is_brivo_invitation_active,
            'is_icon' => $this->is_icon,
            'is_update' => $this->is_update,
            'json_criteria' => $this->json_criteria,
            's_color_background' => $this->s_color_background,
            's_color_foreground' => $this->s_color_foreground,
            's_icon' => $this->s_icon,
            'text_title' => $this->text_title,
            ],
            static fn($v) => $v !== null
        );
    }
}
