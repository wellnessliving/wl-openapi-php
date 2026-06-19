<?php
namespace WlSdk\Wl\Login\Add;

use WlSdk\WlSdkClient;

/**
 * Checks required profile fields and, if complete, registers the existing user in the specified business.
 */
class MailUseOkPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks required profile fields and, if complete, registers the existing user in the specified business.
     *
     * Validates the user's profile for any missing required fields and, if all fields are complete, adds the user
     * as
     * a member of the business. Returns a status code and a list of any fields that still need to be filled in.
     *
     * @return MailUseOkPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MailUseOkPostRequest $request): MailUseOkPostResponse
    {
        return new MailUseOkPostResponse($this->client->request('/Wl/Login/Add/MailUseOk.json', $request->params(), 'POST'));
    }
}
