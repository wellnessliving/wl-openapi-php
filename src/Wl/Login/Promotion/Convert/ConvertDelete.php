<?php
namespace WlSdk\Wl\Login\Promotion\Convert;

use WlSdk\WlSdkClient;

/**
 * Removes conversion and reset the after expiration setting to previous state.
 */
class ConvertDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Removes conversion and reset the after expiration setting to previous state.
     *
     * Validates access, removes the scheduled conversion record for the given purchased promotion, restores the
     * previous auto-renew state, and reschedules the payment if the promotion is a membership type.
     *
     * @return ConvertDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ConvertDeleteRequest $request): ConvertDeleteResponse
    {
        return new ConvertDeleteResponse($this->client->request('/Wl/Login/Promotion/Convert/Convert.json', $request->params(), 'DELETE'));
    }
}
