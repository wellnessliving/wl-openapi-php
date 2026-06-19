<?php
namespace WlSdk\Wl\Member\Group\Edit;

/**
 * Response from POST
 */
class EditPostResponse
{
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
     * Additional warning message if there were some minor issues with request.
     *
     * @var string|null
     */
    public ?string $text_warning = null;

    public function __construct(array $data)
    {
        $this->k_member_group = isset($data['k_member_group']) ? (string)$data['k_member_group'] : null;
        $this->k_search_template = isset($data['k_search_template']) ? (string)$data['k_search_template'] : null;
        $this->text_warning = isset($data['text_warning']) ? (string)$data['text_warning'] : null;
    }
}
