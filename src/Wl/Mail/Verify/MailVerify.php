<?php

namespace WlSdk\Wl\Mail\Verify;

use WlSdk\WlSdkClient;

/**
 * Adds an email address to the list of identities for our Amazon SES account in the current AWS region and attempts to
 * verify it.
 * As a result of executing this operation, a verification email is sent to the specified address.
 * If the operation to Amazon is successful this method changes status of the
 * [MailVerifyStatusOption](#/components/schemas/Wl.Business.Config.Option.OptionSidAbstract) option in
 * BusinessConfigOptionSql table and adds task to check mail verification status.
 */
class MailVerify
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds an email address to the list of identities for our Amazon SES account in the current AWS region and attempts to verify it.
As a result of executing this operation, a verification email is sent to the specified address.
If the operation to Amazon is successful this method changes status of the {@link \WlSdk\Wl\Business\Config\Option\OptionSidAbstract} option in
BusinessConfigOptionSql table and adds task to check mail verification status.
     *
     * @return MailVerifyPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MailVerifyPostRequest $request): MailVerifyPostResponse
    {
        return new MailVerifyPostResponse($this->client->request('/Wl/Mail/Verify/MailVerify.json', $request->params(), 'POST'));
    }
}
