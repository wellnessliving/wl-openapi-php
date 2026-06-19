<?php
namespace WlSdk\Wl\Member\Group\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns data for group edit form.
 */
class EditGet
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
}
