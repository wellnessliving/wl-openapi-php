<?php

namespace WlSdk\Wl\Search\Template\Panel;

class PanelGetResponsePanel
{
    /**
     * List of user keys of shared search template.
     *
     * @var string[]|null
     */
    public ?array $a_staff_selected = null;

    /**
     * Search entity CID. Constant from {@link \WlSdk\Wl\Search\SearchEntityAbstract} subclasses.
     *
     * @var int|null
     * @see \WlSdk\Wl\Search\SearchEntityAbstract
     */
    public ?int $cid_search_entity = null;

    /**
     * Share option constant. See {@link \WlSdk\Wl\Share\ShareSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Share\ShareSid
     */
    public ?int $id_share = null;

    /**
     * Key of existing template. Primary key in the SearchTemplateSql table.
     *
     * @var string|null
     */
    public ?string $k_search_template = null;

    /**
     * Whether staff role list should be shown for share.
     *
     * @var bool|null
     */
    public ?bool $show_staff_role_list = null;

    /**
     * Search template title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_staff_selected = isset($data['a_staff_selected']) ? (array)$data['a_staff_selected'] : null;
        $this->cid_search_entity = isset($data['cid_search_entity']) ? (int)$data['cid_search_entity'] : null;
        $this->id_share = isset($data['id_share']) ? (int)$data['id_share'] : null;
        $this->k_search_template = isset($data['k_search_template']) ? (string)$data['k_search_template'] : null;
        $this->show_staff_role_list = isset($data['show_staff_role_list']) ? (bool)$data['show_staff_role_list'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
