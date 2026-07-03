<?php

namespace WlSdk\Wl\Location\View;

/**
 * Response from GET
 */
class ViewGetResponse
{
    /**
     * A list of ages that are permitted for visiting this location.
     *
     * @var int[]|null
     */
    public ?array $a_age = null;

    /**
     * A list of facilities that are available in this location.
     *
     * @var int[]|null
     */
    public ?array $a_amenities = null;

    /**
     * A list of levels that are suitable for visiting this location.
     *
     * @var string[]|null
     */
    public ?array $a_level = null;

    /**
     * Information about the location logo used in WellnessLiving:
     *
     * @var ViewGetResponseLogo|null
     */
    public ?ViewGetResponseLogo $a_logo = null;

    /**
     * A list of the location images.
     * Every element has the following keys:
     *
     * @var ViewGetResponseSlide|null
     */
    public ?ViewGetResponseSlide $a_slide = null;

    /**
     * The hours of operation for the location.
     * Fields are numbers representing specific days (1 is Monday, 7 is Sunday). Values are objects with the next
     * fields:
     *
     * @var ViewGetResponseWork|null
     */
    public ?ViewGetResponseWork $a_work = null;

    /**
     * The latitude coordinate of the location.
     *
     * @var float|null
     */
    public ?float $f_latitude = null;

    /**
     * The longitude coordinate of the location.
     *
     * @var float|null
     */
    public ?float $f_longitude = null;

    /**
     * The full description of the location.
     *
     * @var string|null
     */
    public ?string $html_description_full = null;

    /**
     * A shorter description of the location. A preview of {@link
     * \WlSdk\Wl\Location\View\ViewGetResponse::$html_description_full}.
     *
     * @var string|null
     */
    public ?string $html_description_preview = null;

    /**
     * The industry of the business.
     * `null` in case when industry didn't set for chosen business type, or for business types
     * where set value which is absent.
     *
     * @var int|null
     * @see \WlSdk\RsHomeTourSid
     */
    public ?int $id_industry = null;

    /**
     * `true` if to display phone number on location page. `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_phone = null;

    /**
     * `true` if WellnessLiving identifies this is a top choice location, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_top_choice = null;

    /**
     * The key of the business this location belongs to.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the business type this location belongs to.
     *
     * @var string|null
     */
    public ?string $k_business_type = null;

    /**
     * The timezone.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * The physical address of the location.
     *
     * @var string|null
     */
    public ?string $s_address = null;

    /**
     * A string that can be used in navigator programs.
     *
     * @var string|null
     */
    public ?string $s_map = null;

    /**
     * The phone number for the location.
     *
     * @var string|null
     */
    public ?string $s_phone = null;

    /**
     * The system name of the time zone.
     *
     * @var string|null
     */
    public ?string $s_timezone = null;

    /**
     * The title of the location.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * The address of the location.
     *
     * @var string|null
     */
    public ?string $text_address_individual = null;

    /**
     * The special system name, which can be used in custom location links.
     * This is usually based on name of the location, with extra characters removed.
     * However, it can also can be fully customized.
     *
     * @var string|null
     */
    public ?string $text_alias = null;

    /**
     * The name of the business type.
     *
     * @var string|null
     */
    public ?string $text_business_type = null;

    /**
     * The city name of the location.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    /**
     * The country name of the location.
     *
     * @var string|null
     */
    public ?string $text_country = null;

    /**
     * The name of the industry of the business.
     *
     * @var string|null
     */
    public ?string $text_industry = null;

    /**
     * The email address.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Postal code of the location.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * The region name of the location.
     *
     * @var string|null
     */
    public ?string $text_region = null;

    /**
     * Region 2 or 3 letters abbreviation of the location. Can be empty, if abbreviation for region is not set.
     *
     * @var string|null
     */
    public ?string $text_region_code = null;

    /**
     * The Facebook URL of the location.
     *
     * @var string|null
     */
    public ?string $url_facebook = null;

    /**
     * The Instagram URL of the location.
     *
     * @var string|null
     */
    public ?string $url_instagram = null;

    /**
     * The Linked In URL of the location.
     *
     * @var string|null
     */
    public ?string $url_linkedin = null;

    /**
     * The URL of the location in Google Maps.
     *
     * @var string|null
     */
    public ?string $url_map = null;

    /**
     * The URL to the location entry in the WellnessLiving Explorer listing.
     *
     * @var string|null
     */
    public ?string $url_microsite = null;

    /**
     * The website URL of the location.
     *
     * @var string|null
     */
    public ?string $url_site = null;

    /**
     * The URL of the location's Twitter account.
     *
     * @var string|null
     */
    public ?string $url_twitter = null;

    /**
     * The URL to the business's Client Web App.
     *
     * @var string|null
     */
    public ?string $url_web = null;

    /**
     * The YouTube URL of the location.
     *
     * @var string|null
     */
    public ?string $url_youtube = null;

    public function __construct(array $data)
    {
        $this->a_age = isset($data['a_age']) ? (array)$data['a_age'] : null;
        $this->a_amenities = isset($data['a_amenities']) ? (array)$data['a_amenities'] : null;
        $this->a_level = isset($data['a_level']) ? (array)$data['a_level'] : null;
        $this->a_logo = isset($data['a_logo']) ? new ViewGetResponseLogo((array)$data['a_logo']) : null;
        $this->a_slide = isset($data['a_slide']) ? new ViewGetResponseSlide((array)$data['a_slide']) : null;
        $this->a_work = isset($data['a_work']) ? new ViewGetResponseWork((array)$data['a_work']) : null;
        $this->f_latitude = isset($data['f_latitude']) ? (float)$data['f_latitude'] : null;
        $this->f_longitude = isset($data['f_longitude']) ? (float)$data['f_longitude'] : null;
        $this->html_description_full = isset($data['html_description_full']) ? (string)$data['html_description_full'] : null;
        $this->html_description_preview = isset($data['html_description_preview']) ? (string)$data['html_description_preview'] : null;
        $this->id_industry = isset($data['id_industry']) ? (int)$data['id_industry'] : null;
        $this->is_phone = isset($data['is_phone']) ? (bool)$data['is_phone'] : null;
        $this->is_top_choice = isset($data['is_top_choice']) ? (bool)$data['is_top_choice'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_business_type = isset($data['k_business_type']) ? (string)$data['k_business_type'] : null;
        $this->k_timezone = isset($data['k_timezone']) ? (string)$data['k_timezone'] : null;
        $this->s_address = isset($data['s_address']) ? (string)$data['s_address'] : null;
        $this->s_map = isset($data['s_map']) ? (string)$data['s_map'] : null;
        $this->s_phone = isset($data['s_phone']) ? (string)$data['s_phone'] : null;
        $this->s_timezone = isset($data['s_timezone']) ? (string)$data['s_timezone'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_address_individual = isset($data['text_address_individual']) ? (string)$data['text_address_individual'] : null;
        $this->text_alias = isset($data['text_alias']) ? (string)$data['text_alias'] : null;
        $this->text_business_type = isset($data['text_business_type']) ? (string)$data['text_business_type'] : null;
        $this->text_city = isset($data['text_city']) ? (string)$data['text_city'] : null;
        $this->text_country = isset($data['text_country']) ? (string)$data['text_country'] : null;
        $this->text_industry = isset($data['text_industry']) ? (string)$data['text_industry'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_postal = isset($data['text_postal']) ? (string)$data['text_postal'] : null;
        $this->text_region = isset($data['text_region']) ? (string)$data['text_region'] : null;
        $this->text_region_code = isset($data['text_region_code']) ? (string)$data['text_region_code'] : null;
        $this->url_facebook = isset($data['url_facebook']) ? (string)$data['url_facebook'] : null;
        $this->url_instagram = isset($data['url_instagram']) ? (string)$data['url_instagram'] : null;
        $this->url_linkedin = isset($data['url_linkedin']) ? (string)$data['url_linkedin'] : null;
        $this->url_map = isset($data['url_map']) ? (string)$data['url_map'] : null;
        $this->url_microsite = isset($data['url_microsite']) ? (string)$data['url_microsite'] : null;
        $this->url_site = isset($data['url_site']) ? (string)$data['url_site'] : null;
        $this->url_twitter = isset($data['url_twitter']) ? (string)$data['url_twitter'] : null;
        $this->url_web = isset($data['url_web']) ? (string)$data['url_web'] : null;
        $this->url_youtube = isset($data['url_youtube']) ? (string)$data['url_youtube'] : null;
    }
}
