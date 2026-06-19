<?php
namespace WlSdk\Wl\Book\Cancel;

use WlSdk\WlSdkClient;

/**
 * Returns information about whether the given user can cancel the booking and the expected consequences.
 */
class CancelCanApi
{
    /**
     * Key of the business within which the action is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key.
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
     * Returns information about whether the given user can cancel the booking and the expected consequences.
     *
     * Accepts a business key and a visit key, validates access, and performs a dry-run cancellation to determine
     * whether the visit can be cancelled online, whether a late-cancel penalty applies, and whether the purchase
     * option credit would be refunded.
     *
     * @return CancelCanApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CancelCanApiGetResponse
    {
        return new CancelCanApiGetResponse($this->client->request('/Wl/Book/Cancel/CancelCan.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            ],
            static fn($v) => $v !== null
        );
    }
}
