<?php
namespace WlSdk\Core\Request\Api\Application\Credential;

/**
 * Base class for work with credential for application.
 * 
 * Values:
 * - 973 (`Core\Request\Api\Application\Credential\FacebookCredential`): Class for manage Facebook credential.
 * - 972 (`Core\Request\Api\Application\Credential\GoogleCredential`): Class for manage Google credential.
 */
enum CredentialAbstract: int
{
    case Core\Request\Api\Application\Credential\FacebookCredential = 973;
    case Core\Request\Api\Application\Credential\GoogleCredential = 972;
}
