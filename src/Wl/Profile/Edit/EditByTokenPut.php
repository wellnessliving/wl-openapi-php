<?php
namespace WlSdk\Wl\Profile\Edit;

use WlSdk\WlSdkClient;

/**
 * Updates values of profile fields.
 */
class EditByTokenPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
