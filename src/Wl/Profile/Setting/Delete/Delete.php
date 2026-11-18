<?php

namespace WlSdk\Wl\Profile\Setting\Delete;

use WlSdk\WlSdkClient;

/**
 * Checks whether the users can be deleted from the businesses.
 */
class Delete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether the users can be deleted from the businesses.
     *
     * Checks the users of {@link \WlSdk\Wl\Profile\Setting\Delete\Delete} in the businesses of {@link
     * \WlSdk\Wl\Profile\Setting\Delete\Delete}, and returns
     * the users that can be deleted in {@link \WlSdk\Wl\Profile\Setting\Delete\DeleteGetResponse::$a_uid_valid}
     * and the reasons for every user in
     * {@link \WlSdk\Wl\Profile\Setting\Delete\DeleteGetResponse::$a_error_info}. When a client checks their own
     * account and it cannot be deleted, the request
     * fails with the reason in {@link \WlSdk\Wl\Profile\Setting\Delete\Delete}.
     *
     * @return DeleteGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DeleteGetRequest $request): DeleteGetResponse
    {
        return new DeleteGetResponse($this->client->request('/Wl/Profile/Setting/Delete/Delete.json', $request->params(), 'GET'));
    }

    /**
     * Deletes the account of the users from the businesses.
     *
     * Makes the same checks as `get()`, then anonymizes the profiles of the users in the businesses
     * of {@link \WlSdk\Wl\Profile\Setting\Delete\Delete} and returns the result for every user in {@link
     * \WlSdk\Wl\Profile\Setting\Delete\DeletePostResponse::$a_delete_result}.
     * A request of a client may require a captcha, as the description of the endpoint says.
     *
     * @return DeletePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DeletePostRequest $request): DeletePostResponse
    {
        return new DeletePostResponse($this->client->request('/Wl/Profile/Setting/Delete/Delete.json', $request->params(), 'POST'));
    }
}
