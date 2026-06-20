<?php

namespace WlSdk\Wl\Login\Attendance\Add;

class AddGetResponseSessionPass
{
    /**
     * The session pass key, available to pay for the session.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    /**
     * The title of the session pass.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_session_pass = isset($data['k_session_pass']) ? (string)$data['k_session_pass'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
