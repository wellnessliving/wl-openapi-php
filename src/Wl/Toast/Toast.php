<?php

namespace WlSdk\Wl\Toast;

use WlSdk\WlSdkClient;

/**
 * Get all toasts by uid of current user.
 */
class Toast
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get all toasts by uid of current user.
     *
     * @return ToastGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ToastGetRequest $request): ToastGetResponse
    {
        return new ToastGetResponse($this->client->request('/Wl/Toast/Toast.json', $request->params(), 'GET'));
    }

    /**
     * Update one or many toast.
     *
     * @return ToastPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ToastPutRequest $request): ToastPutResponse
    {
        return new ToastPutResponse($this->client->request('/Wl/Toast/Toast.json', $request->params(), 'PUT'));
    }
}
