<?php
namespace WlSdk\Wl\Skin\Application\Resource;

use WlSdk\WlSdkClient;

/**
 * Uploads image and file assets for the given business application.
 */
class ApplicationResourceUploadApi
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Uploads image and file assets for the given business application.
     *
     * Each image must be submitted as `a_image_upload[{key}]`, where `{key}` is the image ID.
     * The `google-services.json` file must be submitted as `google_services_json`.
     *
     * @return ApplicationResourceUploadApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ApplicationResourceUploadApiPostResponse
    {
        return new ApplicationResourceUploadApiPostResponse($this->client->request('/Wl/Skin/Application/Resource/ApplicationResourceUpload.json', $this->params(), 'POST'));
    }

    private function params(): array
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
