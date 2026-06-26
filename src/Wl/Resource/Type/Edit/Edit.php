<?php

namespace WlSdk\Wl\Resource\Type\Edit;

use WlSdk\WlSdkClient;

/**
 * This method is called to process POST query.
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
     * This method is called to process POST query.
     *
     * @return EditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EditPostRequest $request): EditPostResponse
    {
        return new EditPostResponse($this->client->request('/Wl/Resource/Type/Edit/Edit.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process PUT query.
     *
     * @return EditPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(EditPutRequest $request): EditPutResponse
    {
        return new EditPutResponse($this->client->request('/Wl/Resource/Type/Edit/Edit.json', $request->params(), 'PUT'));
    }
}
