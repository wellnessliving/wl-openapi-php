<?php
namespace WlSdk\Wl\Login\Add;

use WlSdk\WlSdkClient;

/**
 * Checks required profile fields and, if complete, registers the existing user in the specified business.
 */
class MailUseOkApi
{
    /**
     * This value is `true` if this user is a lead. `false` if otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_lead = null;

    /**
     * The business key used internally by WellnessLiving.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The Lead Capture Widget skin key. This is used only if a lead was added.
     *
     * @var string|null
     */
    public ?string $k_skin = null;

    /**
     * The user key.
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
     * Checks required profile fields and, if complete, registers the existing user in the specified business.
     *
     * Validates the user's profile for any missing required fields and, if all fields are complete, adds the user
     * as
     * a member of the business. Returns a status code and a list of any fields that still need to be filled in.
     *
     * @return MailUseOkApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): MailUseOkApiPostResponse
    {
        return new MailUseOkApiPostResponse($this->client->request('/Wl/Login/Add/MailUseOk.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_lead' => $this->is_lead,
            'k_business' => $this->k_business,
            'k_skin' => $this->k_skin,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
