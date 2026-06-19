<?php
namespace WlSdk\Wl\Purchase\Mail;

use WlSdk\WlSdkClient;

/**
 * Sends mail message with list of purchased items for specified purchase.
 */
class PurchaseMailApi
{
    /**
     * Determines whether mail sending should be forced.
     *
     * @var bool|null
     */
    public ?bool $is_send_force = null;

    /**
     * The key of the purchase.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

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
     * @return PurchaseMailApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): PurchaseMailApiPostResponse
    {
        return new PurchaseMailApiPostResponse($this->client->request('/Wl/Purchase/Mail/PurchaseMail.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_send_force' => $this->is_send_force,
            'k_purchase' => $this->k_purchase,
            ],
            static fn($v) => $v !== null
        );
    }
}
