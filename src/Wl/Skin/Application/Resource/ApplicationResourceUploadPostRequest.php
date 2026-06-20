<?php
namespace WlSdk\Wl\Skin\Application\Resource;

class ApplicationResourceUploadPostRequest
{
    /**
     * No description.
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
