<?php

namespace WlSdk\Core\Prg\Branch;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Prg/Branch/BranchRepairVerify.json
 */
class BranchRepairVerify
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Core/Prg/Branch/BranchRepairVerify.json.
     *
     * @return BranchRepairVerifyPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BranchRepairVerifyPostRequest $request): BranchRepairVerifyPostResponse
    {
        return new BranchRepairVerifyPostResponse($this->client->request('/Core/Prg/Branch/BranchRepairVerify.json', $request->params(), 'POST'));
    }
}
