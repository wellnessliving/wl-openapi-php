<?php

namespace WlSdk\Wl\Mail\Pattern;

use WlSdk\WlSdkClient;

/**
 * Gets the list of available template variables.
 */
class PatternVariable
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the list of available template variables.
     *
     * @return PatternVariableGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PatternVariableGetRequest $request): PatternVariableGetResponse
    {
        return new PatternVariableGetResponse($this->client->request('/Wl/Mail/Pattern/PatternVariable.json', $request->params(), 'GET'));
    }
}
