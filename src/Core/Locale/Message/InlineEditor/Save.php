<?php

namespace WlSdk\Core\Locale\Message\InlineEditor;

use WlSdk\WlSdkClient;

/**
 * Saves new translation of a translated message.
 */
class Save
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves new translation of a translated message.
     *
     * @return SavePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(SavePutRequest $request): SavePutResponse
    {
        return new SavePutResponse($this->client->request('/Core/Locale/Message/InlineEditor/Save.json', $request->params(), 'PUT'));
    }
}
