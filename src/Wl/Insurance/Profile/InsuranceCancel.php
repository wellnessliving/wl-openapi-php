<?php

namespace WlSdk\Wl\Insurance\Profile;

use WlSdk\WlSdkClient;

/**
 * Api method to cancel client's Wellness Program membership together with all upcoming visits related to it.
 */
class InsuranceCancel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Api method to cancel client's Wellness Program membership together with all upcoming visits related to it.
     *
     * @return InsuranceCancelPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(InsuranceCancelPutRequest $request): InsuranceCancelPutResponse
    {
        return new InsuranceCancelPutResponse($this->client->request('/Wl/Insurance/Profile/InsuranceCancel.json', $request->params(), 'PUT'));
    }

    /**
     * Reactivates cancelled Wellness Program membership.
     *
     * @return InsuranceCancelDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(InsuranceCancelDeleteRequest $request): InsuranceCancelDeleteResponse
    {
        return new InsuranceCancelDeleteResponse($this->client->request('/Wl/Insurance/Profile/InsuranceCancel.json', $request->params(), 'DELETE'));
    }
}
