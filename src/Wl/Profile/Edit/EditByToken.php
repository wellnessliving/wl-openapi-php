<?php
namespace WlSdk\Wl\Profile\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns current user profile information.
 */
class EditByToken
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns current user profile information.
     *
     * Returns the profile field definitions and current values for the specified user, or an empty
     *  structure when creating a new account. Used to populate the profile edit form with the
     *  correct fields, validation rules, and inheritance options for the business.
     *
     * @return EditByTokenGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EditByTokenGetRequest $request): EditByTokenGetResponse
    {
        return new EditByTokenGetResponse($this->client->request('/Wl/Profile/Edit/EditByToken.json', $request->params(), 'GET'));
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

    /**
     * Updates values of profile fields.
     *
     * Saves the updated profile field values for the existing user, propagates phone and address
     *  inheritance changes, triggers relevant notifications, and re-indexes the user for search.
     *
     * @return EditByTokenPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(EditByTokenPutRequest $request): EditByTokenPutResponse
    {
        return new EditByTokenPutResponse($this->client->request('/Wl/Profile/Edit/EditByToken.json', $request->params(), 'PUT'));
    }
}
