<?php

namespace WlSdk\Wl\Profile\Overview\QuickContact;

/**
 * Response from GET
 */
class QuickContactOptionGetResponse
{
    /**
     * Whether the Brivo mobile pass invitation action is available for this client.
     * `true` if Brivo invitation is available, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_brivo = null;

    /**
     * Whether the Password Reset email action is available for this client.
     * `true` if the password reset template is enabled, the client login is not disabled
     * and the client is not a virtual user, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_password_reset = null;

    /**
     * Whether the Welcome email action is available for this client.
     * `true` if the Welcome email template is enabled for this business and the client has
     * an email address, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_welcome = null;

    /**
     * Whether the Welcome email has already been sent to this client.
     * `true` if a Welcome email was sent previously, `false` otherwise.
     * Only meaningful when {@link
     * \WlSdk\Wl\Profile\Overview\QuickContact\QuickContactOptionGetResponse::$is_welcome} is `true`.
     *
     * @var bool|null
     */
    public ?bool $is_welcome_sent = null;

    public function __construct(array $data)
    {
        $this->is_brivo = isset($data['is_brivo']) ? (bool)$data['is_brivo'] : null;
        $this->is_password_reset = isset($data['is_password_reset']) ? (bool)$data['is_password_reset'] : null;
        $this->is_welcome = isset($data['is_welcome']) ? (bool)$data['is_welcome'] : null;
        $this->is_welcome_sent = isset($data['is_welcome_sent']) ? (bool)$data['is_welcome_sent'] : null;
    }
}
