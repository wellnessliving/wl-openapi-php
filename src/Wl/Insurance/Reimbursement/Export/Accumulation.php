<?php

namespace WlSdk\Wl\Insurance\Reimbursement\Export;

use WlSdk\WlSdkClient;

/**
 * Generates reimbursement export files for providers and uploads them into S3.
 */
class Accumulation
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Generates reimbursement export files for providers and uploads them into S3.
     *
     * @return AccumulationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AccumulationPostRequest $request): AccumulationPostResponse
    {
        return new AccumulationPostResponse($this->client->request('/Wl/Insurance/Reimbursement/Export/Accumulation.json', $request->params(), 'POST'));
    }
}
