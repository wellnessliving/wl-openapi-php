<?php
namespace WlSdk\Wl\Classes\ClassView;

use WlSdk\WlSdkClient;

/**
 * Returns class information including schedules, images, and booking settings for the specified business.
 */
class ElementGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns class information including schedules, images, and booking settings for the specified business.
     *
     * Used by import tools to read the full class catalog for a business. Returns a map of all classes
     * (or a single class) with the information needed to replicate class data in an external system:
     * schedules, images, booking constraints, and descriptions.
     *
     * @return ElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ElementGetRequest $request): ElementGetResponse
    {
        return new ElementGetResponse($this->client->request('/Wl/Classes/ClassView/Element.json', $request->params(), 'GET'));
    }
}
