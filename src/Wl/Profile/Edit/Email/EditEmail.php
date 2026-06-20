<?php

namespace WlSdk\Wl\Profile\Edit\Email;

use WlSdk\WlSdkClient;

/**
 * Checks if specified email address is busy.
 */
class EditEmail
{
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
     * @deprecated Use {@link \Wl\Profile\Edit\Email\EditEmail67Api} instead.
     *
     * @return EditEmailGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EditEmailGetRequest $request): EditEmailGetResponse
    {
        return new EditEmailGetResponse($this->client->request('/Wl/Profile/Edit/Email/EditEmail.json', $request->params(), 'GET'));
    }

    /**
     * Adds user to business.
     *
     * Registers the found user as a member of the specified business. If required profile fields
     *  are missing, grants temporary access until the profile is completed. Sends a welcome
     *  notification once the user is fully registered.
     *
     * @deprecated Use {@link \Wl\Profile\Edit\Email\EditEmail67Api} instead.
     *
     * @return EditEmailPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EditEmailPostRequest $request): EditEmailPostResponse
    {
        return new EditEmailPostResponse($this->client->request('/Wl/Profile/Edit/Email/EditEmail.json', $request->params(), 'POST'));
    }
}
