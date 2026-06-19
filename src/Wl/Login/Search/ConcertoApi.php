<?php
namespace WlSdk\Wl\Login\Search;

use WlSdk\WlSdkClient;

/**
 * Finds a user by their email or phone within the specified business.
 */
class ConcertoApi
{
    /**
     * Business to search user in.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Email to search.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Phone to search.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Finds a user by their email or phone within the specified business.
     *
     * Accepts exactly one of `text_mail` or `text_phone`, validates the value, and returns the user key if a
     * matching
     * active member of the business is found. Returns an error if the user is not found or if multiple users share
     * the given phone number.
     *
     * @return ConcertoApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ConcertoApiGetResponse
    {
        return new ConcertoApiGetResponse($this->client->request('/Wl/Login/Search/Concerto.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_mail' => $this->text_mail,
            'text_phone' => $this->text_phone,
            ],
            static fn($v) => $v !== null
        );
    }
}
