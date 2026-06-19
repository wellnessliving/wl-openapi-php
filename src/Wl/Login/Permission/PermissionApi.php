<?php
namespace WlSdk\Wl\Login\Permission;

use WlSdk\WlSdkClient;

/**
 * Saves the auto-renew setting for a purchased promotion.
 */
class PermissionApi
{
    /**
     * The key of the purchased promotion.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * If `true`, the purchased promotion has been made auto-renewable. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_renew = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the auto-renew setting for a purchased promotion.
     *
     * Validates the purchased promotion, checks profile access, and sets the auto-renew flag to the value of
     * `is_renew`. Returns an error if the promotion does not support auto-renewal or if the client is a debtor.
     *
     * @return PermissionApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): PermissionApiPostResponse
    {
        return new PermissionApiPostResponse($this->client->request('/Wl/Login/Permission/Permission.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_login_promotion' => $this->k_login_promotion,
            'is_renew' => $this->is_renew,
            ],
            static fn($v) => $v !== null
        );
    }
}
