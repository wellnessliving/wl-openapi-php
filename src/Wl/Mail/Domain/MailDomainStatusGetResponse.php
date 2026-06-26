<?php

namespace WlSdk\Wl\Mail\Domain;

/**
 * Response from GET
 */
class MailDomainStatusGetResponse
{
    /**
     * Indicates if the current user has access to Setup > Business > Email Settings.
     * `true` if the user may follow the domain verification link.
     * `false` if the user should be directed to ask an administrator instead.
     *
     * @var bool|null
     */
    public ?bool $is_domain_settings_access = null;

    /**
     * Indicates if the business email domain is verified.
     * `true` if the domain is configured and its status is {@link \WlSdk\Wl\Mail\Domain\DomainVerifyStatusSid}.
     *
     * @var bool|null
     */
    public ?bool $is_domain_verified = null;

    public function __construct(array $data)
    {
        $this->is_domain_settings_access = isset($data['is_domain_settings_access']) ? (bool)$data['is_domain_settings_access'] : null;
        $this->is_domain_verified = isset($data['is_domain_verified']) ? (bool)$data['is_domain_verified'] : null;
    }
}
