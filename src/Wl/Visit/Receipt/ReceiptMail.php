<?php

namespace WlSdk\Wl\Visit\Receipt;

use WlSdk\WlSdkClient;

/**
 * Performs data checks, checks the availability of the mail, as well as the access policy.
 * If the checks are successful, the mail will be sent, otherwise the client will see an error.
 */
class ReceiptMail
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs data checks, checks the availability of the mail, as well as the access policy.
If the checks are successful, the mail will be sent, otherwise the client will see an error.
     *
     * @return ReceiptMailPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReceiptMailPostRequest $request): ReceiptMailPostResponse
    {
        return new ReceiptMailPostResponse($this->client->request('/Wl/Visit/Receipt/ReceiptMail.json', $request->params(), 'POST'));
    }
}
