<?php
namespace WlSdk\Wl\Member\Group\Edit;

use WlSdk\WlSdkClient;

/**
 * Adds or edit client group Query.
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
