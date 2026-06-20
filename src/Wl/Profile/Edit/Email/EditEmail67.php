<?php

namespace WlSdk\Wl\Profile\Edit\Email;

use WlSdk\WlSdkClient;

/**
 * Checks if specified email address is busy.
 */
class EditEmail67
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
     * @return EditEmail67GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EditEmail67GetRequest $request): EditEmail67GetResponse
    {
        return new EditEmail67GetResponse($this->client->request('/Wl/Profile/Edit/Email/EditEmail67.json', $request->params(), 'GET'));
    }

    /**
     * Adds user to business.
     *
     * Registers the found user as a member of the specified business. If required profile fields
     *  are missing, grants temporary access until the profile is completed. Sends a welcome
     *  notification once the user is fully registered.
     *
     * @return EditEmail67PostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EditEmail67PostRequest $request): EditEmail67PostResponse
    {
        return new EditEmail67PostResponse($this->client->request('/Wl/Profile/Edit/Email/EditEmail67.json', $request->params(), 'POST'));
    }
}
