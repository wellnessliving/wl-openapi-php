<?php
namespace WlSdk\Core\Passport\Login\Register;

/**
 * Response from POST
 */
class RegisterConfirmPostResponse
{
    /**
     * The key of the new registered user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
