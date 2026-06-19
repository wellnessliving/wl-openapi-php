<?php
namespace WlSdk\Wl\Login\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns promotion payment pause data: all hold periods when `is_list` is `true`,
 *  the specified hold period when `k_promotion_pay_pause` is provided, or the currently
 *  active hold period otherwise.
 */
class PromotionPayPauseApi
{
    /**
     * The end date of the current hold, in the local time zone.
     * This can be set to a special value `0000-00-00` to make the period indefinite until further action.
     * 
     * `null` if it shouldn't be updated.
     *
     * @var string|null
     */
    public ?string $dt_end = null;

    /**
     * The start date of the current hold, in the local time zone.
     * 
     * `null` if it shouldn't be updated.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * Whether need to get all pause periods for the login promotion.
     * If `true` then `a_pay_pause_list` will be returned.
     * If `false` then information about specified `k_promotion_pay_pause` or
     * currently active pause period will be returned (`dt_start`,
     * `dt_end` and `text_note`).
     *
     * @var bool|null
     */
    public ?bool $is_list = null;

    /**
     * Key of business to which currently handled pause period or login promotion belongs.
     * 
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The Purchase Option key. If this key is used, a new hold will be created. The endpoint will return a
     * `start-cross`
     * status code if a hold is already in place.
     * 
     * Ignored if `k_promotion_pay_pause` is provided.
     * 
     * `null` if not yet initialized.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The promotion payment hold key. If this key is used, it will edit an existing hold.
     * This key will be empty if there's no active hold in place or if a scheduled hold isn't in effect.
     * 
     * `null` if not yet initialized or if the request is based on `k_login_promotion`.
     *
     * @var string|null
     */
    public ?string $k_promotion_pay_pause = null;

    /**
     * Whether or not to send email notification.
     * 
     * `false` if not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * Whether or not to send push notification.
     * 
     * `false` if not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    /**
     * Whether or not to send SMS notification.
     * 
     * `false` if not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    /**
     * Additional notes for the promotion payment pause period.
     * Leave this field as `null` if the note shouldn't be updated.
     * 
     * `null` if it shouldn't be updated.
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
     * Returns promotion payment pause data: all hold periods when `is_list` is `true`,
 the specified hold period when `k_promotion_pay_pause` is provided, or the currently
 active hold period otherwise.
     *
     * Also returns notification settings (email, push, SMS flags and email pattern key) and the date the last
     * notification was sent for the hold period, if a hold notification template is configured for the business.
     *
     * @return PromotionPayPauseApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PromotionPayPauseApiGetResponse
    {
        return new PromotionPayPauseApiGetResponse($this->client->request('/Wl/Login/Promotion/PromotionPayPause.json', $this->params(), 'GET'));
    }

    /**
     * Adds or updates a payment pause period for promotion.
     *
     * Creates a new hold period for the purchased promotion if no `k_promotion_pay_pause` is provided, or updates
     * an existing one. Optionally schedules or sends a hold notification via email, push, or SMS based on the
     * provided flags and the business notification template.
     *
     * @return PromotionPayPauseApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): PromotionPayPauseApiPostResponse
    {
        return new PromotionPayPauseApiPostResponse($this->client->request('/Wl/Login/Promotion/PromotionPayPause.json', $this->params(), 'POST'));
    }

    /**
     * Updates a promotion payment pause period.
     *
     * Requires an existing `k_promotion_pay_pause` key and delegates to `post()` to apply
     * the updated start date, end date, note, and notification settings. Returns an error if no existing hold key
     * is
     * provided.
     *
     * @return PromotionPayPauseApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): PromotionPayPauseApiPutResponse
    {
        return new PromotionPayPauseApiPutResponse($this->client->request('/Wl/Login/Promotion/PromotionPayPause.json', $this->params(), 'PUT'));
    }

    /**
     * Deletes specified promotion payment pause.
     *
     * Validates access and then permanently removes the hold period identified by `k_promotion_pay_pause`,
     * also cancelling any associated expiry reminder notification task.
     *
     * @return PromotionPayPauseApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): PromotionPayPauseApiDeleteResponse
    {
        return new PromotionPayPauseApiDeleteResponse($this->client->request('/Wl/Login/Promotion/PromotionPayPause.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_end' => $this->dt_end,
            'dt_start' => $this->dt_start,
            'is_list' => $this->is_list,
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'k_promotion_pay_pause' => $this->k_promotion_pay_pause,
            'is_mail' => $this->is_mail,
            'is_push' => $this->is_push,
            'is_sms' => $this->is_sms,
            'text_note' => $this->text_note,
            ],
            static fn($v) => $v !== null
        );
    }
}
