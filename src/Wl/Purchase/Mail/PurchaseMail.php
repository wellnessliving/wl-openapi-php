<?php
namespace WlSdk\Wl\Purchase\Mail;

use WlSdk\WlSdkClient;

/**
 * Sends mail message with list of purchased items for specified purchase.
 */
class PurchaseMail
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends mail message with list of purchased items for specified purchase.
     *
     * Validates the caller's access to the purchase and sends a receipt email to the appropriate recipient
     * (staff member or client), recording the action in the mail history log.
     *
     * @return PurchaseMailPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PurchaseMailPostRequest $request): PurchaseMailPostResponse
    {
        return new PurchaseMailPostResponse($this->client->request('/Wl/Purchase/Mail/PurchaseMail.json', $request->params(), 'POST'));
    }
}
