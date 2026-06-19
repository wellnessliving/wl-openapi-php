<?php
namespace WlSdk\Wl\Profile\Edit\Email;

use WlSdk\WlSdkClient;

/**
 * Adds user to business.
 *
 * @deprecated
 */
class EditEmailPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds user to business.
     *
     * Registers the found user as a member of the specified business. If required profile fields
     *  are missing, grants temporary access until the profile is completed. Sends a welcome
     *  notification once the user is fully registered.
     *
     * @return EditEmailPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EditEmailPostRequest $request): EditEmailPostResponse
    {
        return new EditEmailPostResponse($this->client->request('/Wl/Profile/Edit/Email/EditEmail.json', $request->params(), 'POST'));
    }
}
