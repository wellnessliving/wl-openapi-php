<?php

namespace WlSdk\Core\Amazon\Ses\Blacklist;

/**
 * Response from GET
 */
class BlacklistGetResponse
{
    /**
     * Indicates if the email address is blacklisted.
     *
     * @var bool|null
     */
    public ?bool $is_mail_blacklisted = null;

    public function __construct(array $data)
    {
        $this->is_mail_blacklisted = isset($data['is_mail_blacklisted']) ? (bool)$data['is_mail_blacklisted'] : null;
    }
}
