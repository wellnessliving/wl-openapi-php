<?php
namespace WlSdk\Wl\Integration\Autymate;

use WlSdk\WlSdkClient;

/**
 * Returns or changes the Autymate enrollment status for the specified business.
 * Autymate specifically requested this method be a get.
 */
class AutymateActivateApi
{
    /**
     * The mode of the request.
     * 
     * One of [AutymateAccessModeSid](#/components/schemas/Wl.Integration.Autymate.AutymateAccessModeSid)
     * constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * The new status of the enrollment. If `0`, the current status is returned.
     * 
     * One of [AutymateStatusSid](#/components/schemas/Wl.Integration.Autymate.AutymateStatusSid) constants.
     *
     * @var int|null
     */
    public ?int $id_status = null;

    /**
     * The key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The randomly generated 32 character string used to authenticate Autymate requests for the business.
     *
     * @var string|null
     */
    public ?string $s_guid = null;

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
     * Returns or changes the Autymate enrollment status for the specified business.
Autymate specifically requested this method be a get.
     *
     * Authenticates the request using the business GUID, then either reads or updates the enrollment status
     * depending on the mode and the supplied `id_status` value. When activating enrollment, also provisions a
     * Professional subscription for the business if one is not already active.
     *
     * @return AutymateActivateApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AutymateActivateApiGetResponse
    {
        return new AutymateActivateApiGetResponse($this->client->request('/Wl/Integration/Autymate/AutymateActivate.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_mode' => $this->id_mode,
            'id_status' => $this->id_status,
            'k_business' => $this->k_business,
            's_guid' => $this->s_guid,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
