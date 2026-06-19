<?php
namespace WlSdk\Wl\Profile\Edit\Email;

use WlSdk\WlSdkClient;

/**
 * Checks if specified email address is busy.
 */
class EditEmailApi
{
    /**
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The business key where the check must be performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The email address to be checked.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The key of user whose email will be edited.
     * This will be `0` in the case of a new user creation.
     *
     * @var string|null
     */
    public ?string $uid_want = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if specified email address is busy.
     *
     * Looks up whether the given email is already registered and returns user info, membership
     *  status, staff flags, and password status if found; guest requests are subject to a per-IP
     *  rate limit.
     *
     * @deprecated
     *
     * @return EditEmailApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): EditEmailApiGetResponse
    {
        return new EditEmailApiGetResponse($this->client->request('/Wl/Profile/Edit/Email/EditEmail.json', $this->params(), 'GET'));
    }

    /**
     * Adds user to business.
     *
     * Registers the found user as a member of the specified business. If required profile fields
     *  are missing, grants temporary access until the profile is completed. Sends a welcome
     *  notification once the user is fully registered.
     *
     * @deprecated
     *
     * @return EditEmailApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): EditEmailApiPostResponse
    {
        return new EditEmailApiPostResponse($this->client->request('/Wl/Profile/Edit/Email/EditEmail.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'text_mail' => $this->text_mail,
            'uid_want' => $this->uid_want,
            ],
            static fn($v) => $v !== null
        );
    }
}
