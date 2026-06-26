<?php

namespace WlSdk\Core\Tool\Combobox;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Tool/Combobox/ToolCombobox.json
 */
class ToolCombobox
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Core/Tool/Combobox/ToolCombobox.json.
     *
     * @return ToolComboboxPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ToolComboboxPostRequest $request): ToolComboboxPostResponse
    {
        return new ToolComboboxPostResponse($this->client->request('/Core/Tool/Combobox/ToolCombobox.json', $request->params(), 'POST'));
    }
}
