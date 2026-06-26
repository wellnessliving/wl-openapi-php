<?php

namespace WlSdk\Wl\Search\Template\Panel;

class PanelPutRequest
{
    /**
     * Business key.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of existing template.
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
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Entity in array format.
     *
     * @var array[]|null
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
     * Constants from {@link \WlSdk\Wl\Search\SearchEntityAbstract} subclasses.
     *
     * @var int[]|null
     */
    public ?array $a_search_entity = null;

    /**
     * Selected staff roles of the search template.
     *
     * @var array[]|null
     */
    public ?array $a_staff_role_selected = null;

    /**
     * Type of share option.
     * One of {@link \WlSdk\Wl\Share\ShareSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Share\ShareSid
     */
    public ?int $id_share = null;

    /**
     * Entity in array format.
     * Alternative of `a_criteria` to transfer data via HTTP as one variable.
     *
     * @var string|null
     */
    public ?string $json_criteria = null;

    /**
     * Search template title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_search_template' => $this->k_search_template,
            's_search_group' => $this->s_search_group,
            'uid' => $this->uid,
            'a_criteria' => $this->a_criteria,
            'a_logic' => $this->a_logic,
            'a_search_entity' => $this->a_search_entity,
            'a_staff_role_selected' => $this->a_staff_role_selected,
            'id_share' => $this->id_share,
            'json_criteria' => $this->json_criteria,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
