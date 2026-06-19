<?php
namespace WlSdk\Wl\Business\Waiver;

use WlSdk\WlSdkClient;

/**
 * Returns the business waiver text rendered as HTML with user-specific variables substituted.
 */
class WaiverApi
{
    /**
     * ID of business to get waiver for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Full username.
     * Used as a variable in a contract.
     * It may be set if user does not exist.
     *
     * @var string|null
     */
    public ?string $text_fullname = null;

    /**
     * User key for which the waiver is shown.
     * Used to fill the variables in the contract
     * Not necessarily if the user does not already exist. In this case, you need to set `text_fullname`.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the business waiver text rendered as HTML with user-specific variables substituted.
     *
     * Used to display the waiver agreement to a client before they complete a purchase or check in.
     * Renders the waiver template with the client's name filled in. If the business has no waiver
     * configured, `has_waiver` is `false` and the waiver modal should not be shown.
     *
     * @return WaiverApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): WaiverApiGetResponse
    {
        return new WaiverApiGetResponse($this->client->request('/Wl/Business/Waiver/Waiver.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_fullname' => $this->text_fullname,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
