<?php
namespace WlSdk\Wl\Member\Progress\Log;

use WlSdk\WlSdkClient;

/**
 * Verifies client's progress log data.
 */
class VerifyApi
{
    /**
     * Local date without time of the progress log.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
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
     * Verifies client's progress log data.
     *
     * Marks all unverified progress log entries for the specified user and date as verified by the currently
     * signed-in staff member, then triggers a search index reindex for the user.
     *
     * @return VerifyApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): VerifyApiPutResponse
    {
        return new VerifyApiPutResponse($this->client->request('/Wl/Member/Progress/Log/Verify.json', $this->params(), 'PUT'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
