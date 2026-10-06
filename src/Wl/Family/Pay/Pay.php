<?php

namespace WlSdk\Wl\Family\Pay;

use WlSdk\WlSdkClient;

/**
 * Gets data about who pays for a given user.
 */
class Pay
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets data about who pays for a given user.
     *
     * Checks that the current user has access to the target user's profile, either through general
     *  profile access or through store-sell privilege combined with business access, and that neither
     *  user is restricted from this operation by franchise rules. Returns the current payer for the
     *  user, or an empty value if the user pays for themself.
     *
     * @return PayGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PayGetRequest $request): PayGetResponse
    {
        return new PayGetResponse($this->client->request('/Wl/Family/Pay/Pay.json', $request->params(), 'GET'));
    }

    /**
     * Sets that user {@link \WlSdk\Wl\Family\Pay\PayGetResponse::$uid_payer} pays for user {@link \WlSdk\Wl\Family\Pay\Pay}.
     *
     * Validates that the current user has access to the target user's profile and that the payer and
     *  the target user are family relatives. Rejects the request if the payer already pays for another
     *  user, if another user already pays for the target user, or if either user is restricted by
     *  franchise rules. Persists the new payer relationship in a database transaction.
     *
     * @return PayPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PayPostRequest $request): PayPostResponse
    {
        return new PayPostResponse($this->client->request('/Wl/Family/Pay/Pay.json', $request->params(), 'POST'));
    }
}
