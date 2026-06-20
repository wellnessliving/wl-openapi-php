<?php
namespace WlSdk\Wl\Skin\Application\Resource;

class ApplicationResourceGetResponseApplication
{
    /**
     * List of resource groups for image generation.
     *
     * @var ApplicationResourceGetResponseApplicationResource|null
     */
    public ?ApplicationResourceGetResponseApplicationResource $a_resource = null;

    /**
     * Application version number.
     *
     * @var int|null
     */
    public ?int $i_version = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Google OAuth client ID for this application.
     *
     * @var string|null
     */
    public ?string $s_google_id = null;

    /**
     * Reverse Google OAuth client ID used for deep linking.
     *
     * @var string|null
     */
    public ?string $s_google_reverse = null;

    /**
     * Android splash screen background color in hex format.
     *
     * @var string|null
     */
    public ?string $s_splash_color_android = null;

    /**
     * Application version name string (for example, '2.0.1').
     *
     * @var string|null
     */
    public ?string $s_version_name = null;

    /**
     * Short app store description.
     *
     * @var string|null
     */
    public ?string $text_annotation = null;

    /**
     * Full app store description for iOS App Store.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Full app store description for Google Play.
     *
     * @var string|null
     */
    public ?string $text_description_google = null;

    /**
     * Application domain.
     *
     * @var string|null
     */
    public ?string $text_domain = null;

    /**
     * App store search keywords.
     *
     * @var string|null
     */
    public ?string $text_keyword = null;

    /**
     * Application internal name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Application display title shown in app stores.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_resource = isset($data['a_resource']) ? new ApplicationResourceGetResponseApplicationResource((array)$data['a_resource']) : null;
        $this->i_version = isset($data['i_version']) ? (int)$data['i_version'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->s_google_id = isset($data['s_google_id']) ? (string)$data['s_google_id'] : null;
        $this->s_google_reverse = isset($data['s_google_reverse']) ? (string)$data['s_google_reverse'] : null;
        $this->s_splash_color_android = isset($data['s_splash_color_android']) ? (string)$data['s_splash_color_android'] : null;
        $this->s_version_name = isset($data['s_version_name']) ? (string)$data['s_version_name'] : null;
        $this->text_annotation = isset($data['text_annotation']) ? (string)$data['text_annotation'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_description_google = isset($data['text_description_google']) ? (string)$data['text_description_google'] : null;
        $this->text_domain = isset($data['text_domain']) ? (string)$data['text_domain'] : null;
        $this->text_keyword = isset($data['text_keyword']) ? (string)$data['text_keyword'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
