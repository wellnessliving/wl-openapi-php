<?php

namespace WlSdk\Wl\Insurance\Reimbursement\Refuse;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Insurance/Reimbursement/Refuse/ReimbursementRefuseList.json
 */
class ReimbursementRefuseList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Insurance/Reimbursement/Refuse/ReimbursementRefuseList.json.
     *
     * @return ReimbursementRefuseListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReimbursementRefuseListGetRequest $request): ReimbursementRefuseListGetResponse
    {
        return new ReimbursementRefuseListGetResponse($this->client->request('/Wl/Insurance/Reimbursement/Refuse/ReimbursementRefuseList.json', $request->params(), 'GET'));
    }
}
