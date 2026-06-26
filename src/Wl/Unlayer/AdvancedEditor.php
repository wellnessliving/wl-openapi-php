<?php

namespace WlSdk\Wl\Unlayer;

use WlSdk\WlSdkClient;

/**
 * Gets email variables for merge-tags feature of Unlayer editor. https://docs.unlayer.com/docs/merge-tags
 */
class AdvancedEditor
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets email variables for merge-tags feature of Unlayer editor. https://docs.unlayer.com/docs/merge-tags
     *
     * @return AdvancedEditorGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AdvancedEditorGetRequest $request): AdvancedEditorGetResponse
    {
        return new AdvancedEditorGetResponse($this->client->request('/Wl/Unlayer/AdvancedEditor.json', $request->params(), 'GET'));
    }
}
