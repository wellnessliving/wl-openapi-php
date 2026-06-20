<?php
namespace WlSdk\Wl\Login\Mail;

/**
 * Response from GET
 */
class MailUseGetResponse
{
    /**
     * If `true`, the user with the specified email address exists in specified business. Otherwise, this will
     * be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_exists = null;

    /**
     * Key of the user who using email within the business.
     *
     * @var string|null
     */
    public ?string $uid_use = null;

    public function __construct(array $data)
    {
        $this->is_exists = isset($data['is_exists']) ? (bool)$data['is_exists'] : null;
        $this->uid_use = isset($data['uid_use']) ? (string)$data['uid_use'] : null;
    }
}
