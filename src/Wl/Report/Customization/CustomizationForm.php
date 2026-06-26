<?php

namespace WlSdk\Wl\Report\Customization;

use WlSdk\WlSdkClient;

/**
 * Loads customization data of the customization form that corresponds to specified report / report page.
 */
class CustomizationForm
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Loads customization data of the customization form that corresponds to specified report / report page.
     *
     * @return CustomizationFormGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CustomizationFormGetRequest $request): CustomizationFormGetResponse
    {
        return new CustomizationFormGetResponse($this->client->request('/Wl/Report/Customization/CustomizationForm.json', $request->params(), 'GET'));
    }

    /**
     * Saves given data of a customization form into database.
     *
     * @return CustomizationFormPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CustomizationFormPostRequest $request): CustomizationFormPostResponse
    {
        return new CustomizationFormPostResponse($this->client->request('/Wl/Report/Customization/CustomizationForm.json', $request->params(), 'POST'));
    }
}
