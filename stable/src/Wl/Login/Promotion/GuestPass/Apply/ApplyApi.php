<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Apply;

use WlSdk\WlSdkClient;

/**
 * Applies the guest pass of the specified login promotion to the attendee's visit.
 */
class ApplyApi
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login promotion key of the host member's class membership whose guest pass
     * balance will be used.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Visit key of the attendee to whom the guest pass is applied.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Applies the guest pass of the specified login promotion to the attendee's visit.
     *
     * If the visit is already paid (with a regular session pass or an existing guest pass),
     * the previous payment is unwound before the new guest pass is applied.
     *
     * @return ApplyApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ApplyApiPostResponse
    {
        return new ApplyApiPostResponse($this->client->request('/Wl/Login/Promotion/GuestPass/Apply/Apply.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'k_visit' => $this->k_visit,
            ],
            static fn($v) => $v !== null
        );
    }
}
