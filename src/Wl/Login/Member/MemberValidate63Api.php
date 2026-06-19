<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Checks whether anything prevents the user from using the business and returns details about missing required fields.
 */
class MemberValidate63Api
{
    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user's key.
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
     * Checks whether anything prevents the user from using the business and returns details about missing required fields.
     *
     * Extends the base validation by additionally returning separate lists of missing profile fields grouped by
     * their
     * required context: booking and purchase, self-registration, or general requirement.
     *
     * @return MemberValidate63ApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): MemberValidate63ApiGetResponse
    {
        return new MemberValidate63ApiGetResponse($this->client->request('/Wl/Login/Member/MemberValidate63.json', $this->params(), 'GET'));
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
