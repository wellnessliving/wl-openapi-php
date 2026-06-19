<?php
namespace WlSdk\Wl\Profile\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns current user profile information.
 */
class EditByTokenGet
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
}
