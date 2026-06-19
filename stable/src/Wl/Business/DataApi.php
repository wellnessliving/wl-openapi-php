<?php
namespace WlSdk\Wl\Business;

use WlSdk\WlSdkClient;

/**
 * Returns detailed information about the specified business, including locale, franchise status, services, tips,
 * social URLs, and logo.
 */
class DataApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * The maximum height of the business image (in pixels).
     *
     * @var int|null
     */
    public ?int $i_logo_height = null;

    /**
     * The maximum width of the business image (in pixels).
     *
     * @var int|null
     */
    public ?int $i_logo_width = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The authorization token.
This may be used instead of `k_business` to
identify a business.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns detailed information about the specified business, including locale, franchise status, services, tips, social URLs, and logo.
     *
     * Used to bootstrap client-facing pages and widgets that need to know the full business profile: which
     * services are enabled, tip and progress log settings, franchise relationship, social media links, and
     * deep links to the schedule, catalog, and sign-up pages. Accepts either a business key or a location
     * request token for widget contexts where the key is not available.
     *
     * @return array Parsed JSON response data.
     *   - int[] a_service_list: A list of all business services and their availability data.
This is presented as an array, where keys are SIDs from [ServiceSid](#/components/schemas/Wl.Service.ServiceSid) and values are Boolean.
If `true`, at least one service is enabled in the business. Otherwise, this will be `false`.
     *   - float[] a_tip_predefine: The list of predefined tips in percentages.
     *   - int id_category: The business category ID of the business.
     *   - int id_claim_status: Business status for managing claim request behavior.

Constant from [BusinessClaimStatusSid](#/components/schemas/Wl.Business.Claim.BusinessClaimStatusSid).
     *   - int id_currency: The currency ID of the given business (or the system currency ID if the business didn't pass).
     *   - int id_locale: The Locale ID, used to search geo items.
     *   - int id_rank_type: The rank type ID of the business.

One of the [RsRankTypeSid](#/components/schemas/RsRankTypeSid) constants.

This will be `null` if the business doesn't have a rank type.
     *   - int id_region: The region ID. This indicates the data center where the information about the business is stored.
One of the [AmazonRegionSid](#/components/schemas/Core.Amazon.Region.AmazonRegionSid) constants.

Requests made to different regions can lead to known issues such as responses indicating that the
business (or its elements) doesn't exist. This is because databases on different data centers are
independent. For example, performing a request to the US cluster for a list of classes for an AU
cluster business will return an empty list.
     *   - bool is_apply_surcharge: Determines whether surcharges to client payments are enabled in the business.
     *   - bool is_franchise: `true` if business is a franchisor or franchisee.
     *   - bool is_location_multiple: Determines whether the business has multiple locations (including inactive locations).
     *   - bool is_profile_timezone: `true` - clients of the business can select a custom time zone in their profile.

`false` - the location or business time zone is used.
     *   - bool is_progress_client: If `true`, clients can enter the progress log. Otherwise, this will be `false`.
     *   - bool is_progress_verify: If `true`, verification of the progress log by a staff member is required. Otherwise, this will be `false`.
     *   - bool is_quiz_available: Determines whether quizzes are available in the business.
     *   - bool is_test: Determines if the business operates in testing mode.
     *   - bool is_tip: If `true`, tips are available in the business. Otherwise, this will be `false`.
     *   - bool is_tip_deny: If `true`, the business has the "No tip" option displayed. Otherwise, this will be `false`.
     *   - bool is_tip_sign: If `true`, the client must sign after selecting the tip. Otherwise, this will be `false`.
     *   - string k_business_franchisor: The franchisor business key. This will be empty if this business is the franchisor or not in a franchise.
     *   - string k_business_token: The business key obtained by the security token `text_token`.
This can be used on the client side if authorization token should be used instead of the business key
(the business key isn't available).
     *   - string k_business_type: Key of the business type.
     *   - string k_currency: The currency key of the given business, or the system currency if the business didn't pass.
     *   - string s_reply_mail: The reply-to email address.
     *   - string s_reply_name: The reply-to business name.
     *   - string text_office_address: The business address.
     *   - string text_title: The business title.
     *   - string url_catalog: The URL for the online store.
     *   - string url_enter: The URL for client sign in.
     *   - string url_facebook: The Facebook page.
     *   - string url_google: The Google+ page.
     *   - string url_home_tour: URL of the home tour page related to the business type.
     *   - string url_instagram: The Instagram page.
     *   - string url_linkedin: The `LinkedIn` profile.
     *   - string url_logo: The logo URL.
     *   - string url_logo_empty: The image stub (in cases where the business logo isn't loaded).
     *   - string url_redeem: The URL to redeem gift card.
     *   - string url_review: The URL for the client review page.
     *   - string url_schedule: The URL for the client web app (schedule).
     *   - string url_signup: The URL for client sign up.
     *   - string url_twitter: The Twitter page.
     *   - string url_website: The business website.
     *   - string url_youtube: The YouTube website.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/Data.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'i_logo_height' => $this->i_logo_height,
            'i_logo_width' => $this->i_logo_width,
            'k_business' => $this->k_business,
            'text_token' => $this->text_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
