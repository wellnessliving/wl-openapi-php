<?php

namespace WlSdk\Core\Prg\Branch;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Prg/Branch/BranchSwitch.json
 */
class BranchSwitch
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Core/Prg/Branch/BranchSwitch.json.
     *
     * @return BranchSwitchPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BranchSwitchPostRequest $request): BranchSwitchPostResponse
    {
        return new BranchSwitchPostResponse($this->client->request('/Core/Prg/Branch/BranchSwitch.json', $request->params(), 'POST'));
    }
}
