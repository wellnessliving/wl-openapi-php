<?php
namespace WlSdk\Wl\Profile\Edit;

use WlSdk\WlSdkClient;

/**
 * Updates values of profile fields.
 */
class EditPut
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
     * @return EditPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(EditPutRequest $request): EditPutResponse
    {
        return new EditPutResponse($this->client->request('/Wl/Profile/Edit/Edit.json', $request->params(), 'PUT'));
    }
}
