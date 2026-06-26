<?php

namespace WlSdk\Wl\Eml;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Eml/EmlEdit.json
 */
class EmlEdit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls PUT /Wl/Eml/EmlEdit.json.
     *
     * @return EmlEditPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(EmlEditPutRequest $request): EmlEditPutResponse
    {
        return new EmlEditPutResponse($this->client->request('/Wl/Eml/EmlEdit.json', $request->params(), 'PUT'));
    }
}
