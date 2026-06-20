<?php

namespace WlSdk\Wl\Skin\Application\Resource;

use WlSdk\WlSdkClient;

/**
 * Uploads image and file assets for the given business application.
 */
class ApplicationResourceUpload
{
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
     * @return ApplicationResourceUploadPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ApplicationResourceUploadPostRequest $request): ApplicationResourceUploadPostResponse
    {
        return new ApplicationResourceUploadPostResponse($this->client->request('/Wl/Skin/Application/Resource/ApplicationResourceUpload.json', $request->params(), 'POST'));
    }
}
