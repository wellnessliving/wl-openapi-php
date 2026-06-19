<?php
namespace WlSdk\Wl\Reception\Application;

use WlSdk\WlSdkClient;

/**
 * Performs authorization based on the given authorization value and business settings.
 */
class ReceptionAuthorizeApi
{
    /**
     * Key of the business, where Check In application is started.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location, where Check In application is started.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key of the Check In application.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * Authorization value - it's a value, which client entered on authorization form.
     * 
     * It can be client ID, email or phone number. Depends on the business settings.
     *
     * @var string|null
     */
    public ?string $text_authorize = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs authorization based on the given authorization value and business settings.
     *
     * Looks up clients by member ID, email address, or phone number and returns matching user records for
     * selection
     * in the Self Check-In Web App.
     *
     * @return ReceptionAuthorizeApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ReceptionAuthorizeApiPostResponse
    {
        return new ReceptionAuthorizeApiPostResponse($this->client->request('/Wl/Reception/Application/ReceptionAuthorize.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            's_secret' => $this->s_secret,
            'text_authorize' => $this->text_authorize,
            ],
            static fn($v) => $v !== null
        );
    }
}
