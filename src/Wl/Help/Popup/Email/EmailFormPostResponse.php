<?php

namespace WlSdk\Wl\Help\Popup\Email;

/**
 * Response from POST
 */
class EmailFormPostResponse
{
    /**
     * The reply to address for the email. This will be the email of the staff member.
     * The empty string will be returned if the validation is not passed.
     *
     * @var string|null
     */
    public ?string $s_reply = null;

    public function __construct(array $data)
    {
        $this->s_reply = isset($data['s_reply']) ? (string)$data['s_reply'] : null;
    }
}
