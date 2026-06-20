<?php

namespace WlSdk\Wl\Integration\Saml;

/**
 * Response from POST
 */
class SamlUserDeactivationPostResponse
{
    /**
     * The key of the SAML identifier.
     *
     * This value is `true` if an active user is found in the business, `false` if otherwise.
     *
     * @var bool[]|null
     */
    public ?array $a_result = null;

    public function __construct(array $data)
    {
        $this->a_result = isset($data['a_result']) ? (array)$data['a_result'] : null;
    }
}
