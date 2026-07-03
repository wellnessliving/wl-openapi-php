<?php

namespace WlSdk\Wl\Business;

/**
 * Response from GET
 */
class DataGetResponse
{
    /**
     * A list of all business services and their availability data.
     * This is presented as an array, where keys are SIDs from {@link \WlSdk\Wl\Service\ServiceSid} and values are
     * Boolean.
     * If `true`, at least one service is enabled in the business. Otherwise, this will be `false`.
     *
     * @var int[]|null
     */
    public ?array $a_service_list = null;

    /**
     * The list of predefined tips in percentages.
     *
     * @var float[]|null
     */
    public ?array $a_tip_predefine = null;

    /**
     * The business category ID of the business.
     *
     * @var int|null
     * @see \WlSdk\RsBusinessCategorySid
     */
    public ?int $id_category = null;

    /**
     * Business status for managing claim request behavior.
     *
     * Constant from {@link \WlSdk\Wl\Business\Claim\BusinessClaimStatusSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Claim\BusinessClaimStatusSid
     */
    public ?int $id_claim_status = null;

    /**
     * The currency ID of the given business (or the system currency ID if the business didn't pass).
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\CurrencySid
     */
    public ?int $id_currency = null;

    /**
     * The Locale ID, used to search geo items.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\LocaleSid
     */
    public ?int $id_locale = null;

    /**
     * The rank type ID of the business.
     *
     * One of the {@link \WlSdk\RsRankTypeSid} constants.
     *
     * This will be `null` if the business doesn't have a rank type.
     *
     * @var int|null
     * @see \WlSdk\RsRankTypeSid
     */
    public ?int $id_rank_type = null;

    /**
     * The region ID. This indicates the data center where the information about the business is stored.
     * One of the {@link \WlSdk\Core\Amazon\Region\AmazonRegionSid} constants.
     *
     * Requests made to different regions can lead to known issues such as responses indicating that the
     * business (or its elements) doesn't exist. This is because databases on different data centers are
     * independent. For example, performing a request to the US cluster for a list of classes for an AU
     * cluster business will return an empty list.
     *
     * @var int|null
     * @see \WlSdk\Core\Amazon\Region\AmazonRegionSid
     */
    public ?int $id_region = null;

    /**
     * Determines whether surcharges to client payments are enabled in the business.
     *
     * @var bool|null
     */
    public ?bool $is_apply_surcharge = null;

    /**
     * `true` if business is a franchisor or franchisee.
     *
     * @var bool|null
     */
    public ?bool $is_franchise = null;

    /**
     * Determines whether the business has multiple locations (including inactive locations).
     *
     * @var bool|null
     */
    public ?bool $is_location_multiple = null;

    /**
     * `true` - clients of the business can select a custom time zone in their profile.
     *
     * `false` - the location or business time zone is used.
     *
     * @var bool|null
     */
    public ?bool $is_profile_timezone = null;

    /**
     * If `true`, clients can enter the progress log. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_progress_client = null;

    /**
     * If `true`, verification of the progress log by a staff member is required. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_progress_verify = null;

    /**
     * Determines whether quizzes are available in the business.
     *
     * @var bool|null
     */
    public ?bool $is_quiz_available = null;

    /**
     * Determines if the business operates in testing mode.
     *
     * @var bool|null
     */
    public ?bool $is_test = null;

    /**
     * If `true`, tips are available in the business. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_tip = null;

    /**
     * If `true`, the business has the "No tip" option displayed. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_tip_deny = null;

    /**
     * If `true`, the client must sign after selecting the tip. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_tip_sign = null;

    /**
     * The franchisor business key. This will be empty if this business is the franchisor or not in a franchise.
     *
     * @var string|null
     */
    public ?string $k_business_franchisor = null;

    /**
     * The business key obtained by the security token {@link \WlSdk\Wl\Business\Data}.
     * This can be used on the client side if authorization token should be used instead of the business key
     * (the business key isn't available).
     *
     * @var string|null
     */
    public ?string $k_business_token = null;

    /**
     * Key of the business type.
     *
     * @var string|null
     */
    public ?string $k_business_type = null;

    /**
     * The currency key of the given business, or the system currency if the business didn't pass.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * The reply-to email address.
     *
     * @var string|null
     */
    public ?string $s_reply_mail = null;

    /**
     * The reply-to business name.
     *
     * @var string|null
     */
    public ?string $s_reply_name = null;

    /**
     * The business address.
     *
     * @var string|null
     */
    public ?string $text_office_address = null;

    /**
     * The business title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * The URL for the online store.
     *
     * @var string|null
     */
    public ?string $url_catalog = null;

    /**
     * The URL for client sign in.
     *
     * @var string|null
     */
    public ?string $url_enter = null;

    /**
     * The Facebook page.
     *
     * @var string|null
     */
    public ?string $url_facebook = null;

    /**
     * The Google+ page.
     *
     * @var string|null
     */
    public ?string $url_google = null;

    /**
     * URL of the home tour page related to the business type.
     *
     * @var string|null
     */
    public ?string $url_home_tour = null;

    /**
     * The Instagram page.
     *
     * @var string|null
     */
    public ?string $url_instagram = null;

    /**
     * The `LinkedIn` profile.
     *
     * @var string|null
     */
    public ?string $url_linkedin = null;

    /**
     * The logo URL.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    /**
     * The image stub (in cases where the business logo isn't loaded).
     *
     * @var string|null
     */
    public ?string $url_logo_empty = null;

    /**
     * The URL to redeem gift card.
     *
     * @var string|null
     */
    public ?string $url_redeem = null;

    /**
     * The URL for the client review page.
     *
     * @var string|null
     */
    public ?string $url_review = null;

    /**
     * The URL for the client web app (schedule).
     *
     * @var string|null
     */
    public ?string $url_schedule = null;

    /**
     * The URL for client sign up.
     *
     * @var string|null
     */
    public ?string $url_signup = null;

    /**
     * The Twitter page.
     *
     * @var string|null
     */
    public ?string $url_twitter = null;

    /**
     * The business website.
     *
     * @var string|null
     */
    public ?string $url_website = null;

    /**
     * The YouTube website.
     *
     * @var string|null
     */
    public ?string $url_youtube = null;

    public function __construct(array $data)
    {
        $this->a_service_list = isset($data['a_service_list']) ? (array)$data['a_service_list'] : null;
        $this->a_tip_predefine = isset($data['a_tip_predefine']) ? (array)$data['a_tip_predefine'] : null;
        $this->id_category = isset($data['id_category']) ? (int)$data['id_category'] : null;
        $this->id_claim_status = isset($data['id_claim_status']) ? (int)$data['id_claim_status'] : null;
        $this->id_currency = isset($data['id_currency']) ? (int)$data['id_currency'] : null;
        $this->id_locale = isset($data['id_locale']) ? (int)$data['id_locale'] : null;
        $this->id_rank_type = isset($data['id_rank_type']) ? (int)$data['id_rank_type'] : null;
        $this->id_region = isset($data['id_region']) ? (int)$data['id_region'] : null;
        $this->is_apply_surcharge = isset($data['is_apply_surcharge']) ? (bool)$data['is_apply_surcharge'] : null;
        $this->is_franchise = isset($data['is_franchise']) ? (bool)$data['is_franchise'] : null;
        $this->is_location_multiple = isset($data['is_location_multiple']) ? (bool)$data['is_location_multiple'] : null;
        $this->is_profile_timezone = isset($data['is_profile_timezone']) ? (bool)$data['is_profile_timezone'] : null;
        $this->is_progress_client = isset($data['is_progress_client']) ? (bool)$data['is_progress_client'] : null;
        $this->is_progress_verify = isset($data['is_progress_verify']) ? (bool)$data['is_progress_verify'] : null;
        $this->is_quiz_available = isset($data['is_quiz_available']) ? (bool)$data['is_quiz_available'] : null;
        $this->is_test = isset($data['is_test']) ? (bool)$data['is_test'] : null;
        $this->is_tip = isset($data['is_tip']) ? (bool)$data['is_tip'] : null;
        $this->is_tip_deny = isset($data['is_tip_deny']) ? (bool)$data['is_tip_deny'] : null;
        $this->is_tip_sign = isset($data['is_tip_sign']) ? (bool)$data['is_tip_sign'] : null;
        $this->k_business_franchisor = isset($data['k_business_franchisor']) ? (string)$data['k_business_franchisor'] : null;
        $this->k_business_token = isset($data['k_business_token']) ? (string)$data['k_business_token'] : null;
        $this->k_business_type = isset($data['k_business_type']) ? (string)$data['k_business_type'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->s_reply_mail = isset($data['s_reply_mail']) ? (string)$data['s_reply_mail'] : null;
        $this->s_reply_name = isset($data['s_reply_name']) ? (string)$data['s_reply_name'] : null;
        $this->text_office_address = isset($data['text_office_address']) ? (string)$data['text_office_address'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_catalog = isset($data['url_catalog']) ? (string)$data['url_catalog'] : null;
        $this->url_enter = isset($data['url_enter']) ? (string)$data['url_enter'] : null;
        $this->url_facebook = isset($data['url_facebook']) ? (string)$data['url_facebook'] : null;
        $this->url_google = isset($data['url_google']) ? (string)$data['url_google'] : null;
        $this->url_home_tour = isset($data['url_home_tour']) ? (string)$data['url_home_tour'] : null;
        $this->url_instagram = isset($data['url_instagram']) ? (string)$data['url_instagram'] : null;
        $this->url_linkedin = isset($data['url_linkedin']) ? (string)$data['url_linkedin'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
        $this->url_logo_empty = isset($data['url_logo_empty']) ? (string)$data['url_logo_empty'] : null;
        $this->url_redeem = isset($data['url_redeem']) ? (string)$data['url_redeem'] : null;
        $this->url_review = isset($data['url_review']) ? (string)$data['url_review'] : null;
        $this->url_schedule = isset($data['url_schedule']) ? (string)$data['url_schedule'] : null;
        $this->url_signup = isset($data['url_signup']) ? (string)$data['url_signup'] : null;
        $this->url_twitter = isset($data['url_twitter']) ? (string)$data['url_twitter'] : null;
        $this->url_website = isset($data['url_website']) ? (string)$data['url_website'] : null;
        $this->url_youtube = isset($data['url_youtube']) ? (string)$data['url_youtube'] : null;
    }
}
