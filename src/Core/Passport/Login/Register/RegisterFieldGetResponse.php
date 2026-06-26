<?php

namespace WlSdk\Core\Passport\Login\Register;

/**
 * Response from GET
 */
class RegisterFieldGetResponse
{
    /**
     * Information about profile fields:
     *
     *
     * `null` until loaded.
     *
     * @var RegisterFieldGetResponseProfileField|null
     */
    public ?RegisterFieldGetResponseProfileField $a_profile_field = null;

    public function __construct(array $data)
    {
        $this->a_profile_field = isset($data['a_profile_field']) ? new RegisterFieldGetResponseProfileField((array)$data['a_profile_field']) : null;
    }
}
