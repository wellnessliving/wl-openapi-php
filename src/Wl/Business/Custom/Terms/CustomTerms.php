<?php

namespace WlSdk\Wl\Business\Custom\Terms;

use WlSdk\WlSdkClient;

/**
 * Saves {@link \WlSdk\Wl\Business\Custom\Terms\CustomTerms} as the custom terms of {@link
 * \WlSdk\Wl\Business\Custom\Terms\CustomTerms}.
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
     * Saves {@link \WlSdk\Wl\Business\Custom\Terms\CustomTerms} as the custom terms of {@link \WlSdk\Wl\Business\Custom\Terms\CustomTerms}.
     *
     * Validates every posted term slot and its selected option, then delegates the write itself to
     * CustomTermsSettings::saveTerms() - a slot whose new value equals the business's resolved default
     * (the business-type default, or the system default if there is none) is reset instead of written, see
     * CustomTermsSettings::saveTerms(). A term slot missing from {@link
     * \WlSdk\Wl\Business\Custom\Terms\CustomTerms}
     * is left untouched; the client is expected to submit the current value of every slot on every save, not
     * only the slots that changed.
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
