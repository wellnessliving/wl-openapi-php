<?php

namespace WlSdk\Wl\Business\Franchise\Member;

use WlSdk\WlSdkClient;

/**
 * Checks type of the client, whether client can be added to the current business or not and his relationships, which
 * should be added with him.
 */
class FranchiseMember
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks type of the client, whether client can be added to the current business or not and his relationships, which
should be added with him.
     *
     * @return FranchiseMemberGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FranchiseMemberGetRequest $request): FranchiseMemberGetResponse
    {
        return new FranchiseMemberGetResponse($this->client->request('/Wl/Business/Franchise/Member/FranchiseMember.json', $request->params(), 'GET'));
    }

    /**
     * Adds client and all his relatives to the business as travellers.
     *
     * @return FranchiseMemberPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(FranchiseMemberPutRequest $request): FranchiseMemberPutResponse
    {
        return new FranchiseMemberPutResponse($this->client->request('/Wl/Business/Franchise/Member/FranchiseMember.json', $request->params(), 'PUT'));
    }
}
