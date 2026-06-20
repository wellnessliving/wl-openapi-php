<?php

namespace WlSdk\Core\Passport\ChangePassword;

/**
 * Response from POST
 */
class ChangePasswordBeginPostResponse
{
    /**
     * The error code. This will be an empty string if the email has been sent successfully.
     *
     * @var string|null
     */
    public ?string $text_error = null;

    public function __construct(array $data)
    {
        $this->text_error = isset($data['text_error']) ? (string)$data['text_error'] : null;
    }
}
