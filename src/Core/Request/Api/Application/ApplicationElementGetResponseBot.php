<?php

namespace WlSdk\Core\Request\Api\Application;

class ApplicationElementGetResponseBot
{
    /**
     * Bot login. Copy of PassportLoginSql.`s_login` field.
     *
     * @var string|null
     */
    public ?string $s_login = null;

    /**
     * UID of the bot user, primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid_bot = null;

    public function __construct(array $data)
    {
        $this->s_login = isset($data['s_login']) ? (string)$data['s_login'] : null;
        $this->uid_bot = isset($data['uid_bot']) ? (string)$data['uid_bot'] : null;
    }
}
