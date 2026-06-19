<?php
namespace WlSdk\Wl\Member\Group\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns data for group edit form.
 */
class EditApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

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
Primary key in the SearchTemplateSql table.

Can be empty if template needs to be created.
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
Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Entity in array format.
For more information about the format, see SearchCriteriaList::createArray() method.
     *
     * @var array|null
     */
    public ?array $a_criteria = null;

    /**
     * Logic connection between criteria.
See `a_criteria_logic` for details.
     *
     * @var string[][][][]|null
     */
    public ?array $a_logic = null;

    /**
     * Search entity CID list.
Constants from [SearchEntityAbstract](#/components/schemas/Wl.Search.SearchEntityAbstract) subclasses.
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
`null` if this group is not used for to track lead conversion.
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
One of [ShareSid](#/components/schemas/Wl.Share.ShareSid) constants.
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
For more information about the format, see SearchCriteriaList::createArray() method.
Alternative of self::$a_criteria to transfer data via HTTP as one variable.
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns data for group edit form.
     *
     * Gets full information about a client group.
     *
     * @return array Parsed JSON response data.
     *   - int id_conversion_type: Lead conversion type.
`null` if this group is not used for to track lead conversion.
     *   - int id_member_group_shape: Shape of icon. One of [ShapeSid](#/components/schemas/Wl.Member.Group.ShapeSid) constants.
     *   - bool is_brivo_active: Whether Facility Access enabled for group.
     *   - bool is_brivo_invitation_active: Whether Brivo invitation feature enabled for the group.
     *   - bool is_icon: `true` to enable group icon. `false` to disable.
     *   - bool is_update: Whether auto-update enabled for group.
     *   - string k_search_template: Key of existing template.
Primary key in the SearchTemplateSql table.

Can be empty if template needs to be created.
     *   - string s_color_background: Hexadecimal color of icon background.
     *   - string s_color_foreground: Hexadecimal color of icon foreground.
     *   - string s_icon: Characters on icon.
     *   - string text_title: Title for a client group.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Member/Group/Edit/Edit.json', $this->params(), 'GET');
    }

    /**
     * Adds or changes a client group.
     *
     * Use to update existing client group or create a new one.
     *
     * @return array Parsed JSON response data.
     *   - string k_member_group: Member group primary key in Sql table.
     *   - string k_search_template: Key of existing template.
Primary key in the SearchTemplateSql table.

Can be empty if template needs to be created.
     *   - string text_warning: Additional warning message if there were some minor issues with request.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Member/Group/Edit/Edit.json', $this->params(), 'POST');
    }

    /**
     * Adds or edit client group Query.
     *
     * Use to update existing client group search query or create a new one. Member group should be already
     * created.
     *
     * @return array Parsed JSON response data.
     *   - string text_warning: Additional warning message if there were some minor issues with request.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Member/Group/Edit/Edit.json', $this->params(), 'PUT');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
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
