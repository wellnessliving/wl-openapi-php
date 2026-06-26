<?php

namespace WlSdk\Wl\Business\Franchise\Push;

use WlSdk\WlSdkClient;

/**
 * Performs validation of pushed data and schedules push tasks.
 */
class ModuleSetup
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs validation of pushed data and schedules push tasks.
     *
     * @return ModuleSetupPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ModuleSetupPostRequest $request): ModuleSetupPostResponse
    {
        return new ModuleSetupPostResponse($this->client->request('/Wl/Business/Franchise/Push/ModuleSetup.json', $request->params(), 'POST'));
    }
}
