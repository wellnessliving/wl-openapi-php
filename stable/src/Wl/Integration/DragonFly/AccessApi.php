<?php
namespace WlSdk\Wl\Integration\DragonFly;

use WlSdk\WlSdkClient;

/**
 * Checks if the user can physically access the location.
 */
class AccessApi
{
    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The member ID.
     * Member ID is intended to work with barcode scanners.
     * If this is specified the user key does not need to be set.
     *
     * @var string|null
     */
    public ?string $s_member = null;

    /**
     * The user key.
     * This should be specified if the member ID is not set or not known.
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
     * Checks if the user can physically access the location.
     *
     * There are 3 scenarios where a user can be given access.
     * Scenario 1 - If a valid member ID used, for instance from a bar code scanner, then the user may have access.
     * Scenario 2 - If a valid uid is used and the user is a staff member, then the user may have access.
     * Scenario 3 - If a valid uid is used and the client has a session or gym access at this location, then the
     * user may have access.
     *
     * @return AccessApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AccessApiGetResponse
    {
        return new AccessApiGetResponse($this->client->request('/Wl/Integration/DragonFly/Access.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_location' => $this->k_location,
            's_member' => $this->s_member,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
