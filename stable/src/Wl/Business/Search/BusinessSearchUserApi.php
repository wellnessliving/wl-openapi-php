<?php
namespace WlSdk\Wl\Business\Search;

use WlSdk\WlSdkClient;

/**
 * Searches for businesses by name and email address and returns matching business keys.
 */
class BusinessSearchUserApi
{
    /**
     * If `true`, the return only active customers, `false` - all business.
     *
     * @var bool|null
     */
    public ?bool $is_customer = null;

    /**
     * User email to search business keys.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Given business name to search by.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Searches for businesses by name and email address and returns matching business keys.
     *
     * Used to locate a specific business for a given client, for example during a password reset or
     * membership lookup. Returns only businesses where the email belongs to a registered member, so
     * a match confirms the client actually has an account at that business.
     *
     * @return BusinessSearchUserApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): BusinessSearchUserApiGetResponse
    {
        return new BusinessSearchUserApiGetResponse($this->client->request('/Wl/Business/Search/BusinessSearchUser.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_customer' => $this->is_customer,
            'text_mail' => $this->text_mail,
            'text_name' => $this->text_name,
            ],
            static fn($v) => $v !== null
        );
    }
}
