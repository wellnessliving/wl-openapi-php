<?php
namespace WlSdk\Wl\Business\AuthorizeSupport\Response;

use WlSdk\WlSdkClient;

/**
 * Grants or denies access to business location for staff member.
 */
class ResponseApi
{
    /**
     * Determines whether the user will be granted access or if access will be revoked.
     * If `true` - then grant access; If `false` - then revoke access.
     * Revoking access is a scheduled task set to be run within the next 15 minutes.
     *
     * @var bool|null
     */
    public ?bool $is_grant = null;

    /**
     * The key of the location to access.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the user who will be granted access.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Grants or denies access to business location for staff member.
     *
     * Used to respond to a support access request: a business owner accepts or rejects temporary entry for
     * a WellnessLiving support agent. Requires the Manage Business permission. Granting access triggers an
     * email notification and expires after 24 hours; the result is broadcast in real time to the requesting
     * staff member.
     *
     * @return ResponseApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ResponseApiGetResponse
    {
        return new ResponseApiGetResponse($this->client->request('/Wl/Business/AuthorizeSupport/Response/Response.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_grant' => $this->is_grant,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
