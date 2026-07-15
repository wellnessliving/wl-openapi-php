<?php

namespace WlSdk\Wl\Profile\Account\Select;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about user specified in {@link \WlSdk\Wl\Profile\Account\Select\Select}
 * and his relationship with sub accounts.
 */
class Select
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about user specified in {@link \WlSdk\Wl\Profile\Account\Select\Select}
and his relationship with sub accounts.
     *
     * Returns all user's relatives and type of relationship, which are allowed to sign in with.
     * So, you can use this list to sign in user as hist relative, but this is not the best way to get full family.
     * Business can set that parent can sign in as his child, but child cannot sign in as his parent. So, this
     * method
     * will return children for parent, but will not return parents for child.
     *
     * @return SelectGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SelectGetRequest $request): SelectGetResponse
    {
        return new SelectGetResponse($this->client->request('/Wl/Profile/Account/Select/Select.json', $request->params(), 'GET'));
    }

    /**
     * Signs in user specified in {@link \WlSdk\Wl\Profile\Account\Select\Select}.
     *
     * Returns an error if you try to sign in user not according to the business permissions.
     *
     * @return SelectPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SelectPostRequest $request): SelectPostResponse
    {
        return new SelectPostResponse($this->client->request('/Wl/Profile/Account/Select/Select.json', $request->params(), 'POST'));
    }
}
