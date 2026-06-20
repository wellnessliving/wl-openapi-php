<?php
namespace WlSdk\Wl\Member\Group\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns data for group edit form.
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
     * Returns data for group edit form.
     *
     * Gets full information about a client group.
     *
     * @return EditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EditGetRequest $request): EditGetResponse
    {
        return new EditGetResponse($this->client->request('/Wl/Member/Group/Edit/Edit.json', $request->params(), 'GET'));
    }

    /**
     * Adds or changes a client group.
     *
     * Use to update existing client group or create a new one.
     *
     * @return EditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EditPostRequest $request): EditPostResponse
    {
        return new EditPostResponse($this->client->request('/Wl/Member/Group/Edit/Edit.json', $request->params(), 'POST'));
    }

    /**
     * Adds or edit client group Query.
     *
     * Use to update existing client group search query or create a new one. Member group should be already
     * created.
     *
     * @return EditPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(EditPutRequest $request): EditPutResponse
    {
        return new EditPutResponse($this->client->request('/Wl/Member/Group/Edit/Edit.json', $request->params(), 'PUT'));
    }
}
