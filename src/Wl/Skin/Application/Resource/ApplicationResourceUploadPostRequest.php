<?php
namespace WlSdk\Wl\Skin\Application\Resource;

class ApplicationResourceUploadPostRequest
{
    /**
     * Image assets keyed by image ID:
     * 
     * 
     * Each value contains array with keys that are the sanitized asset file paths (e.g.
     * `icon_ios_Icon_60_3x_png`).
     *
     * @var string|null
     */
    public ?string $a_image_upload = null;

    /**
     * Firebase Android config file (`google-services.json`).
     *
     * @var string|null
     */
    public ?string $f_google_services_json = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_image_upload' => $this->a_image_upload,
            'f_google_services_json' => $this->f_google_services_json,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
