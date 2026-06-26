<?php

namespace WlSdk\Wl\Insurance\Reimbursement\Refuse;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Insurance/Reimbursement/Refuse/ReimbursementRefuseEdit.json
 */
class ReimbursementRefuseEdit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Insurance/Reimbursement/Refuse/ReimbursementRefuseEdit.json.
     *
     * @return ReimbursementRefuseEditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReimbursementRefuseEditGetRequest $request): ReimbursementRefuseEditGetResponse
    {
        return new ReimbursementRefuseEditGetResponse($this->client->request('/Wl/Insurance/Reimbursement/Refuse/ReimbursementRefuseEdit.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Insurance/Reimbursement/Refuse/ReimbursementRefuseEdit.json.
     *
     * @return ReimbursementRefuseEditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReimbursementRefuseEditPostRequest $request): ReimbursementRefuseEditPostResponse
    {
        return new ReimbursementRefuseEditPostResponse($this->client->request('/Wl/Insurance/Reimbursement/Refuse/ReimbursementRefuseEdit.json', $request->params(), 'POST'));
    }

    /**
     * Calls DELETE /Wl/Insurance/Reimbursement/Refuse/ReimbursementRefuseEdit.json.
     *
     * @return ReimbursementRefuseEditDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ReimbursementRefuseEditDeleteRequest $request): ReimbursementRefuseEditDeleteResponse
    {
        return new ReimbursementRefuseEditDeleteResponse($this->client->request('/Wl/Insurance/Reimbursement/Refuse/ReimbursementRefuseEdit.json', $request->params(), 'DELETE'));
    }
}
