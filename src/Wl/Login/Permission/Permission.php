<?php
namespace WlSdk\Wl\Login\Permission;

use WlSdk\WlSdkClient;

/**
 * Saves the auto-renew setting for a purchased promotion.
 */
class Permission
{
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
     * @return PermissionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PermissionPostRequest $request): PermissionPostResponse
    {
        return new PermissionPostResponse($this->client->request('/Wl/Login/Permission/Permission.json', $request->params(), 'POST'));
    }
}
