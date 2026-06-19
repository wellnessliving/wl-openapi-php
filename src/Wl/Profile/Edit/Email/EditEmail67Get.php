<?php
namespace WlSdk\Wl\Profile\Edit\Email;

use WlSdk\WlSdkClient;

/**
 * Checks if specified email address is busy.
 */
class EditEmail67Get
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
}
