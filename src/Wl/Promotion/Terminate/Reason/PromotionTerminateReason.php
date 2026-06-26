<?php

namespace WlSdk\Wl\Promotion\Terminate\Reason;

use WlSdk\WlSdkClient;

/**
 * Gets list of available termination reasons for a promotions.
 */
class PromotionTerminateReason
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of available termination reasons for a promotions.
     *
     * @return PromotionTerminateReasonGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PromotionTerminateReasonGetRequest $request): PromotionTerminateReasonGetResponse
    {
        return new PromotionTerminateReasonGetResponse($this->client->request('/Wl/Promotion/Terminate/Reason/PromotionTerminateReason.json', $request->params(), 'GET'));
    }

    /**
     * Edits or creates new reason.
     *
     * @return PromotionTerminateReasonPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PromotionTerminateReasonPostRequest $request): PromotionTerminateReasonPostResponse
    {
        return new PromotionTerminateReasonPostResponse($this->client->request('/Wl/Promotion/Terminate/Reason/PromotionTerminateReason.json', $request->params(), 'POST'));
    }

    /**
     * Deletes the reason.
     *
     * @return PromotionTerminateReasonDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(PromotionTerminateReasonDeleteRequest $request): PromotionTerminateReasonDeleteResponse
    {
        return new PromotionTerminateReasonDeleteResponse($this->client->request('/Wl/Promotion/Terminate/Reason/PromotionTerminateReason.json', $request->params(), 'DELETE'));
    }
}
