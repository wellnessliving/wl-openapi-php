<?php

namespace WlSdk\Wl\Import\Application;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Import/Application/Attachment.json
 */
class Attachment
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Import/Application/Attachment.json.
     *
     * @return AttachmentPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AttachmentPostRequest $request): AttachmentPostResponse
    {
        return new AttachmentPostResponse($this->client->request('/Wl/Import/Application/Attachment.json', $request->params(), 'POST'));
    }
}
