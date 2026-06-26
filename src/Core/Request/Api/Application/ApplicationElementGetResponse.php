<?php

namespace WlSdk\Core\Request\Api\Application;

/**
 * Response from GET
 */
class ApplicationElementGetResponse
{
    /**
     * The array of keys of access groups of current application.
     * `null` when application doesn't have access groups.
     *
     * Primary key in GroupSql table.
     *
     * @var string[]|null
     */
    public ?array $a_application_group = null;

    /**
     * A bot user which is a deemed actor in all API requests made by this application.
     * Empty array if no bot user is assigned to this application.
     *
     * Here, an array is used instead of two separate fields because rendering a dropdown for user search
     * requires these two values, and in `Core_Request_Api_Application_ApplicationEditor.editStructure`,
     * only one value is passed through the variable name `s_field`.
     *
     * @var ApplicationElementGetResponseBot|null
     */
    public ?ApplicationElementGetResponseBot $a_bot = null;

    /**
     * Which groups this user belongs to.
     *
     * @var string|null
     */
    public ?string $s_group = null;

    /**
     * Application identifier to authenticate application.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * Name of application.
     *
     * @var string|null
     */
    public ?string $text_application = null;

    public function __construct(array $data)
    {
        $this->a_application_group = isset($data['a_application_group']) ? (array)$data['a_application_group'] : null;
        $this->a_bot = isset($data['a_bot']) ? new ApplicationElementGetResponseBot((array)$data['a_bot']) : null;
        $this->s_group = isset($data['s_group']) ? (string)$data['s_group'] : null;
        $this->s_id = isset($data['s_id']) ? (string)$data['s_id'] : null;
        $this->text_application = isset($data['text_application']) ? (string)$data['text_application'] : null;
    }
}
