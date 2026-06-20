<?php
namespace WlSdk\Wl\Member\Info;

use WlSdk\WlSdkClient;

/**
 * Returns information about specified member.
 */
class Info
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about specified member.
     *
     * Supports both single-user and batch modes: when `$a_uid` is provided, returns a keyed list of user data in
     * `$a_result_list`; otherwise returns data for the single user identified by `$uid`. When `$is_full` is
     * `true`,
     * additional profile details, group membership, visit history, and lifetime value are included.
     *
     * @return InfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InfoGetRequest $request): InfoGetResponse
    {
        return new InfoGetResponse($this->client->request('/Wl/Member/Info/Info.json', $request->params(), 'GET'));
    }
}
