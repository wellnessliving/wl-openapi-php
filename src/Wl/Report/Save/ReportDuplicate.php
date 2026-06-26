<?php

namespace WlSdk\Wl\Report\Save;

use WlSdk\WlSdkClient;

/**
 * Duplicates the given saved report with new parameters:
 *  - filters;
 *  - sorting order.
 */
class ReportDuplicate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Duplicates the given saved report with new parameters:
 - filters;
 - sorting order.
     *
     * @return ReportDuplicatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReportDuplicatePostRequest $request): ReportDuplicatePostResponse
    {
        return new ReportDuplicatePostResponse($this->client->request('/Wl/Report/Save/ReportDuplicate.json', $request->params(), 'POST'));
    }
}
