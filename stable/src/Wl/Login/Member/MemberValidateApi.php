<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Checks whether anything prevents the user from using the business and returns any blocking conditions found.
 */
class MemberValidateApi
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
     * Checks whether anything prevents the user from using the business and returns any blocking conditions found.
     *
     * Returns flags indicating whether the user has an outstanding waiver, an unconfirmed contract, pending
     * registration quizzes, a required credit card on file, and lists of missing required profile fields for
     * booking and registration.
     *
     * @deprecated
     *
     * @return MemberValidateApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): MemberValidateApiGetResponse
    {
        return new MemberValidateApiGetResponse($this->client->request('/Wl/Login/Member/MemberValidate.json', $this->params(), 'GET'));
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
