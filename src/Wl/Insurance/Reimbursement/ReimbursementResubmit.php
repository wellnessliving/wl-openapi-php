<?php

namespace WlSdk\Wl\Insurance\Reimbursement;

use WlSdk\WlSdkClient;

/**
 * Triggers resubmission of the reimbursement record.
 */
class ReimbursementResubmit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Triggers resubmission of the reimbursement record.
     *
     * @return ReimbursementResubmitGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReimbursementResubmitGetRequest $request): ReimbursementResubmitGetResponse
    {
        return new ReimbursementResubmitGetResponse($this->client->request('/Wl/Insurance/Reimbursement/ReimbursementResubmit.json', $request->params(), 'GET'));
    }
}
