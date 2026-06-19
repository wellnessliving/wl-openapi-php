<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Checks whether anything prevents the user from using the business and returns any blocking conditions found.
 *
 * @deprecated
 */
class MemberValidateGet
{
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
     * @return MemberValidateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MemberValidateGetRequest $request): MemberValidateGetResponse
    {
        return new MemberValidateGetResponse($this->client->request('/Wl/Login/Member/MemberValidate.json', $request->params(), 'GET'));
    }
}
