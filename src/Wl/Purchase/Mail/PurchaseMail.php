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
     * A guest, who is not signed in, can ask for the receipt of the purchase that the guest has just made: the
     * email
     * goes to the address that the guest gave when buying, at most three emails for one purchase. Then the error
     * `access` means that the session of the guest knows nothing of the purchase (the purchase was made in another
     * session, or more than an hour ago), `access-purchase` that the guest gave no email, and `mail-limit` that
     * the
     * three emails are sent already. {@link \WlSdk\Wl\Purchase\Mail\PurchaseMail} does not apply to a guest. The
     * receipt of
     * a guest is not sent, and the call still succeeds and uses one of the three emails, when the receipt email is
     * turned off in the business, when the business has no email address, or when the payment is not confirmed
     * yet.
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
