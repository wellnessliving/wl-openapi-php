<?php
namespace WlSdk\Wl\Profile\Edit;

use WlSdk\WlSdkClient;

/**
 * Saves new password for user.
 */
class EditPasswordApi
{
    /**
     * Checks if the current password is required or not to update the password.
     *
     * @var bool|null
     */
    public ?bool $is_old_password_required = null;

    /**
     * The key ID of business where actions take place.
     * Business is necessary for mail sending only.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The confirmation of new password.
     *
     * @var string|null
     */
    public ?string $s_password_confirm = null;

    /**
     * The new password.
     *
     * @var string|null
     */
    public ?string $s_password_new = null;

    /**
     * The old password.
     *
     * @var string|null
     */
    public ?string $s_password_old = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves new password for user.
     *
     * Changes the user's password after verifying the current one, enforcing complexity and
     *  length rules, and sends a password-change notification email. The old password check can
     *  be skipped by staff with the appropriate access level.
     *
     * @return EditPasswordApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): EditPasswordApiPostResponse
    {
        return new EditPasswordApiPostResponse($this->client->request('/Wl/Profile/Edit/EditPassword.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_old_password_required' => $this->is_old_password_required,
            'k_business' => $this->k_business,
            's_password_confirm' => $this->s_password_confirm,
            's_password_new' => $this->s_password_new,
            's_password_old' => $this->s_password_old,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
