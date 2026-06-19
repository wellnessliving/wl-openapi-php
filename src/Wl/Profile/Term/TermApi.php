<?php
namespace WlSdk\Wl\Profile\Term;

use WlSdk\WlSdkClient;

/**
 * Returns online waiver information for the specified user and business.
 */
class TermApi
{
    /**
     * The key of the current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user to show information for.
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
     * Returns online waiver information for the specified user and business.
     *
     * Returns the rendered online waiver text for the business along with the client's current
     *  agreement status. Used to display the waiver page and show whether the client has already
     *  signed, including their signature image and the confirmation timestamp.
     *
     * @return TermApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): TermApiGetResponse
    {
        return new TermApiGetResponse($this->client->request('/Wl/Profile/Term/Term.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
