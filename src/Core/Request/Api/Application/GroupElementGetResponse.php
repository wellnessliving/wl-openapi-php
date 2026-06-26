<?php

namespace WlSdk\Core\Request\Api\Application;

/**
 * Response from GET
 */
class GroupElementGetResponse
{
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

    public function __construct(array $data)
    {
        $this->text_access = isset($data['text_access']) ? (string)$data['text_access'] : null;
        $this->text_privilege = isset($data['text_privilege']) ? (string)$data['text_privilege'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
