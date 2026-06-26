<?php

namespace WlSdk\Wl\Hint;

use WlSdk\WlSdkClient;

/**
 * Stores that user has seen the hint and returns a flag allowing to show a hint if it has not yet been shown earlier.
 */
class Hint
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Stores that user has seen the hint and returns a flag allowing to show a hint if it has not yet been shown earlier.
     *
     * @return HintPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(HintPutRequest $request): HintPutResponse
    {
        return new HintPutResponse($this->client->request('/Wl/Hint/Hint.json', $request->params(), 'PUT'));
    }
}
