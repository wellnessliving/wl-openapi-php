<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Checks whether anything prevents the user from using the business and returns details about missing required fields.
 */
class MemberValidate63
{
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
     * @return MemberValidate63GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MemberValidate63GetRequest $request): MemberValidate63GetResponse
    {
        return new MemberValidate63GetResponse($this->client->request('/Wl/Login/Member/MemberValidate63.json', $request->params(), 'GET'));
    }
}
