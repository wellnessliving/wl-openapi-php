<?php

namespace WlSdk\Core\Prg\Branch;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Prg/Branch/BranchSwitchLog.json
 */
class BranchSwitchLog
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Core/Prg/Branch/BranchSwitchLog.json.
     *
     * @return BranchSwitchLogGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BranchSwitchLogGetRequest $request): BranchSwitchLogGetResponse
    {
        return new BranchSwitchLogGetResponse($this->client->request('/Core/Prg/Branch/BranchSwitchLog.json', $request->params(), 'GET'));
    }
}
