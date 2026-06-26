<?php

namespace WlSdk\Core\Tool\Combobox;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Tool/Combobox/ToolComboboxService.json
 */
class ToolComboboxService
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Core/Tool/Combobox/ToolComboboxService.json.
     *
     * @return ToolComboboxServicePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ToolComboboxServicePostRequest $request): ToolComboboxServicePostResponse
    {
        return new ToolComboboxServicePostResponse($this->client->request('/Core/Tool/Combobox/ToolComboboxService.json', $request->params(), 'POST'));
    }
}
