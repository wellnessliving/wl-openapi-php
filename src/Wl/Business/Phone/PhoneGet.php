<?php
namespace WlSdk\Wl\Business\Phone;

use WlSdk\WlSdkClient;

/**
 * Returns phone number(in locale format) of the business, if phone number does not exist returns empty line.
 */
class PhoneGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns phone number(in locale format) of the business, if phone number does not exist returns empty line.
     *
     * Used in the SMS settings UI to display the currently registered business phone number and its input
     * mask. The locale is derived from the business's office country so the number is formatted correctly
     * for that region.
     *
     * @return PhoneGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PhoneGetRequest $request): PhoneGetResponse
    {
        return new PhoneGetResponse($this->client->request('/Wl/Business/Phone/Phone.json', $request->params(), 'GET'));
    }
}
