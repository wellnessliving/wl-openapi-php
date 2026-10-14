<?php

namespace WlSdk\Wl\Business\Custom\Terms;

use WlSdk\WlSdkClient;

/**
 * Returns the current value of every term slot of {@link \WlSdk\Wl\Business\Custom\Terms\CustomTerms}.
 */
class CustomTerms
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the current value of every term slot of {@link \WlSdk\Wl\Business\Custom\Terms\CustomTerms}.
     *
     * No access check - the terms a business picked (e.g. "Session" instead of "Class") are not sensitive, and
     * public-facing pages (the booking widget, for example) need them to render their own wording for a client
     * who is not signed in.
     *
     * @return CustomTermsGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CustomTermsGetRequest $request): CustomTermsGetResponse
    {
        return new CustomTermsGetResponse($this->client->request('/Wl/Business/Custom/Terms/CustomTerms.json', $request->params(), 'GET'));
    }

    /**
     * Saves {@link \WlSdk\Wl\Business\Custom\Terms\CustomTermsGetResponse::$a_term_option} as the custom terms of {@link \WlSdk\Wl\Business\Custom\Terms\CustomTerms}.
     *
     * Validates every posted term slot and its selected option, then writes.
     *
     * @return CustomTermsPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CustomTermsPostRequest $request): CustomTermsPostResponse
    {
        return new CustomTermsPostResponse($this->client->request('/Wl/Business/Custom/Terms/CustomTerms.json', $request->params(), 'POST'));
    }
}
