<?php

namespace WlSdk\Core\Prg\XDebug;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Prg/XDebug/ProfilerMode.json
 */
class ProfilerMode
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Core/Prg/XDebug/ProfilerMode.json.
     *
     * @return ProfilerModePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ProfilerModePostRequest $request): ProfilerModePostResponse
    {
        return new ProfilerModePostResponse($this->client->request('/Core/Prg/XDebug/ProfilerMode.json', $request->params(), 'POST'));
    }
}
