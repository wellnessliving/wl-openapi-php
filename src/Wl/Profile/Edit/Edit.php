<?php
namespace WlSdk\Wl\Profile\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns current user profile information.
 */
class Edit
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
     * @return EditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EditGetRequest $request): EditGetResponse
    {
        return new EditGetResponse($this->client->request('/Wl/Profile/Edit/Edit.json', $request->params(), 'GET'));
    }

    /**
     * Creates a new user.
     *
     * Registers a new user in the business using the submitted profile field values, enforces
     *  IP-based registration rate limiting, and handles family relations and phone or address
     *  inheritance. Returns the identifier of the newly created account.
     *
     * @return EditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EditPostRequest $request): EditPostResponse
    {
        return new EditPostResponse($this->client->request('/Wl/Profile/Edit/Edit.json', $request->params(), 'POST'));
    }

    /**
     * Updates values of profile fields.
     *
     * Saves the updated profile field values for the existing user, propagates phone and address
     *  inheritance changes, triggers relevant notifications, and re-indexes the user for search.
     *
     * @return EditPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(EditPutRequest $request): EditPutResponse
    {
        return new EditPutResponse($this->client->request('/Wl/Profile/Edit/Edit.json', $request->params(), 'PUT'));
    }
}
