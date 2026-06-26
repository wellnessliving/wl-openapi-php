<?php

namespace WlSdk\Core\Request\Api\Application;

class GroupElementPostRequest
{
    /**
     * If a group is edited, its key is stored here.
     *
     * Primary key in GroupSql table.
     *
     * `null` if a new group should be created.
     * This value is required for edit and delete operations.
     *
     * @var string|null
     */
    public ?string $k_application_group = null;

    /**
     * Title of the group.
     *
     * @var string|null
     */
    public ?string $text_access = null;

    /**
     * Title of the group.
     *
     * @var string|null
     */
    public ?string $text_privilege = null;

    /**
     * Title of the group.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_application_group' => $this->k_application_group,
            'text_access' => $this->text_access,
            'text_privilege' => $this->text_privilege,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
