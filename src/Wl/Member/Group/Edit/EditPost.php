<?php
namespace WlSdk\Wl\Member\Group\Edit;

use WlSdk\WlSdkClient;

/**
 * Adds or changes a client group.
 */
class EditPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
