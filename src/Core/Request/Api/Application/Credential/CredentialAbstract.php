<?php

namespace WlSdk\Core\Request\Api\Application\Credential;

/**
 * Base class for work with credential for application.
 *
 * Values:
 * - 973 (`Core\Request\Api\Application\Credential\FacebookCredential`): Class for manage Facebook credential.
 * - 972 (`Core\Request\Api\Application\Credential\GoogleCredential`): Class for manage Google credential.
 */
class CredentialAbstract
{
    /** Class for manage Facebook credential. */
    public const FacebookCredential = 973;

    /** Class for manage Google credential. */
    public const GoogleCredential = 972;
}
