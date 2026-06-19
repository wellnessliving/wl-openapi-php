<?php
namespace WlSdk\Wl\Business\Phone;

use WlSdk\WlSdkClient;

/**
 * Returns phone number(in locale format) of the business, if phone number does not exist returns empty line.
 */
class PhoneApi
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Business phone number(in locale format).
     * Used to receive SMS notifications from clients. Can be `null` during bundle SID saving.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

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
     * @return PhoneApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PhoneApiGetResponse
    {
        return new PhoneApiGetResponse($this->client->request('/Wl/Business/Phone/Phone.json', $this->params(), 'GET'));
    }

    /**
     * Registers business phone number in system.
     *
     * Used when a business enables SMS messaging for the first time or replaces an existing number.
     * Provisions a messaging service with the SMS provider so the business can receive inbound client
     * messages. If the same number is already registered for this business, the call is a no-op.
     *
     * @return PhoneApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): PhoneApiPostResponse
    {
        return new PhoneApiPostResponse($this->client->request('/Wl/Business/Phone/Phone.json', $this->params(), 'POST'));
    }

    /**
     * Deletes business phone number from the system.
     *
     * Used by WellnessLiving admins to decommission a business's SMS messaging service. After deletion,
     * the business can no longer receive inbound SMS notifications. Admin privileges are required.
     *
     * @return PhoneApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): PhoneApiDeleteResponse
    {
        return new PhoneApiDeleteResponse($this->client->request('/Wl/Business/Phone/Phone.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_phone' => $this->text_phone,
            ],
            static fn($v) => $v !== null
        );
    }
}
