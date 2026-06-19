<?php
namespace WlSdk\Wl\Login\Agree;

use WlSdk\WlSdkClient;

/**
 * Returns text of business liability release if business has liability release and if user did not agree to this
 * liability release.
 */
class AgreeApi
{
    /**
     * The key of business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user's key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * `false` if the user has not agreed to use Electronic Signatures,
     * `true` if the user has agreed to use Electronic Signatures,
     * `null` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_agree = null;

    /**
     * The base64-encoded user's signature image from the signature pad as a PNG file.
     *
     * @var string|null
     */
    public ?string $s_signature = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns text of business liability release if business has liability release and if user did not agree to this liability release.
     *
     * Accepts the business key and the user key, validates both, and returns the rendered HTML of the liability
     * release
     * contract if one is configured and the user has not yet agreed to it. If the user has already agreed, the
     * response
     * will have an empty `html_contract` field.
     *
     * @return AgreeApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AgreeApiGetResponse
    {
        return new AgreeApiGetResponse($this->client->request('/Wl/Login/Agree/Agree.json', $this->params(), 'GET'));
    }

    /**
     * Saves the user's agreement to the online waiver.
     *
     * Accepts the user's base64-encoded signature image and an optional electronic-signature consent flag,
     * validates
     * both, records the agreement date and signature in the database, and sends a waiver confirmation
     * notification.
     *
     * @return AgreeApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): AgreeApiPostResponse
    {
        return new AgreeApiPostResponse($this->client->request('/Wl/Login/Agree/Agree.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'is_agree' => $this->is_agree,
            's_signature' => $this->s_signature,
            ],
            static fn($v) => $v !== null
        );
    }
}
