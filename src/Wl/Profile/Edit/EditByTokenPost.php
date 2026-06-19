<?php
namespace WlSdk\Wl\Profile\Edit;

use WlSdk\WlSdkClient;

/**
 * Creates a new user.
 */
class EditByTokenPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new user.
     *
     * Registers a new user in the business using the submitted profile field values, enforces
     *  IP-based registration rate limiting, and handles family relations and phone or address
     *  inheritance. Returns the identifier of the newly created account.
     *
     * @return EditByTokenPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EditByTokenPostRequest $request): EditByTokenPostResponse
    {
        return new EditByTokenPostResponse($this->client->request('/Wl/Profile/Edit/EditByToken.json', $request->params(), 'POST'));
    }
}
