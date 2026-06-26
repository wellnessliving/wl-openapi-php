<?php

namespace WlSdk\Core\Request\Api\Application;

class ApplicationElementPostRequest
{
    /**
     * If an application is edited, its key is stored here.
     *
     * Primary key in Sql table.
     *
     * `null` if a new group should be created.
     * This value is required for edit and delete operations.
     *
     * @var string|null
     */
    public ?string $k_api_application = null;

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
     * Secret code to authorize application.
     * When editing, it is not displayed and can only be replaced with a new one.
     *
     * @var string|null
     */
    public ?string $s_code = null;

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

    /**
     * UID of the bot user, primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid_bot = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_api_application' => $this->k_api_application,
            'a_application_group' => $this->a_application_group,
            's_code' => $this->s_code,
            's_group' => $this->s_group,
            's_id' => $this->s_id,
            'text_application' => $this->text_application,
            'uid_bot' => $this->uid_bot,
            ],
            static fn ($v) => $v !== null
        );
    }
}
