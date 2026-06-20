<?php
namespace WlSdk\Wl\Skin\Application\Resource;

class ApplicationResourceMaterialPostRequest
{
    /**
     * Code version.
     *
     * @var int|null
     */
    public ?int $i_version = null;

    /**
     * Application category in the store.
     * One of {@link \WlSdk\Wl\Skin\Application\Resource\ApplicationCategorySid} constants.
     * `0` if no category is selected.
     *
     * @var int|null
     */
    public ?int $id_category = null;

    /**
     * Type of application update.
     * One of {@link \WlSdk\Wl\Skin\Application\Upgrade\AppUpdateTypeEnum} constants.
     *
     * @var int|null
     */
    public ?int $id_version_change = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Reversed client ID of the iOS application on Firebase.
     *
     * @var string|null
     */
    public ?string $s_firebase_ios = null;

    /**
     * Version name for the App Store and Google Play builds.
     *
     * @var string|null
     */
    public ?string $s_version_name = null;

    /**
     * Short application description in the store (up to 80 characters).
     *
     * @var string|null
     */
    public ?string $text_annotation = null;

    /**
     * Available countries for application distribution (comma-separated list).
     *
     * @var string|null
     */
    public ?string $text_country = null;

    /**
     * Full application description in the store.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Full application description specific to Google Play.
     * If empty, `text_description` is used for Google Play as well.
     *
     * @var string|null
     */
    public ?string $text_description_google = null;

    /**
     * Bundle ID / package name (e.g. `com.fitness.studio`).
     *
     * @var string|null
     */
    public ?string $text_domain = null;

    /**
     * Support email address shown in the store listing.
     *
     * @var string|null
     */
    public ?string $text_email = null;

    /**
     * Additional information about the application build.
     *
     * @var string|null
     */
    public ?string $text_information = null;

    /**
     * App Store search keywords (comma-separated).
     *
     * @var string|null
     */
    public ?string $text_keyword = null;

    /**
     * Application name shown on the device home screen.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Support phone number shown in the store listing.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Application title in the App Store listing.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Support website URL shown in the store listing.
     *
     * @var string|null
     */
    public ?string $text_website = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_version' => $this->i_version,
            'id_category' => $this->id_category,
            'id_version_change' => $this->id_version_change,
            'k_business' => $this->k_business,
            's_firebase_ios' => $this->s_firebase_ios,
            's_version_name' => $this->s_version_name,
            'text_annotation' => $this->text_annotation,
            'text_country' => $this->text_country,
            'text_description' => $this->text_description,
            'text_description_google' => $this->text_description_google,
            'text_domain' => $this->text_domain,
            'text_email' => $this->text_email,
            'text_information' => $this->text_information,
            'text_keyword' => $this->text_keyword,
            'text_name' => $this->text_name,
            'text_phone' => $this->text_phone,
            'text_title' => $this->text_title,
            'text_website' => $this->text_website,
            ],
            static fn($v) => $v !== null
        );
    }
}
