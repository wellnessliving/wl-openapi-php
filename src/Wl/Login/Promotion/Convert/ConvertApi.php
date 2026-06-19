<?php
namespace WlSdk\Wl\Login\Promotion\Convert;

use WlSdk\WlSdkClient;

/**
 * Returns the current conversion configuration and the list of promotions available to convert to.
 */
class ConvertApi
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The login promotion key.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The conversion date, in the local time zone.
     *
     * @var string|null
     */
    public ?string $dl_convert = null;

    /**
     * The conversion ID. One of the
     * [PromotionConvertSid](#/components/schemas/Wl.Promotion.Convert.PromotionConvertSid) constants.
     *
     * @var int|null
     */
    public ?int $id_convert = null;

    /**
     * When conversion should be done. One of the
     * [ConvertWhenSid](#/components/schemas/Wl.Login.Promotion.Convert.ConvertWhenSid) constants.
     * 
     * `null` if it's not set yet.
     *
     * @var int|null
     */
    public ?int $id_convert_when = null;

    /**
     * The promotion key the given promotion will be converted to.
     *
     * @var string|null
     */
    public ?string $k_promotion_to = null;

    /**
     * The note for the promotion conversion.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the current conversion configuration and the list of promotions available to convert to.
     *
     * Returns the current conversion type, scheduled date, target promotion, hold period dates, next payment date,
     * expiration date, and the list of promotions available as conversion targets for the given purchased
     * promotion.
     *
     * @return ConvertApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ConvertApiGetResponse
    {
        return new ConvertApiGetResponse($this->client->request('/Wl/Login/Promotion/Convert/Convert.json', $this->params(), 'GET'));
    }

    /**
     * Creates or updates conversion form data for the login promotion.
Performs all necessary checks and apply changes.
     *
     * Validates access, the target promotion key, conversion type, conversion timing, and the optional scheduled
     * date,
     * then saves the conversion settings. Returns an error if the user is a debtor.
     *
     * @return ConvertApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ConvertApiPostResponse
    {
        return new ConvertApiPostResponse($this->client->request('/Wl/Login/Promotion/Convert/Convert.json', $this->params(), 'POST'));
    }

    /**
     * Removes conversion and reset the after expiration setting to previous state.
     *
     * Validates access, removes the scheduled conversion record for the given purchased promotion, restores the
     * previous auto-renew state, and reschedules the payment if the promotion is a membership type.
     *
     * @return ConvertApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): ConvertApiDeleteResponse
    {
        return new ConvertApiDeleteResponse($this->client->request('/Wl/Login/Promotion/Convert/Convert.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'dl_convert' => $this->dl_convert,
            'id_convert' => $this->id_convert,
            'id_convert_when' => $this->id_convert_when,
            'k_promotion_to' => $this->k_promotion_to,
            'text_note' => $this->text_note,
            ],
            static fn($v) => $v !== null
        );
    }
}
