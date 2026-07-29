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
     * Populates {@link \WlSdk\Wl\Report\Customization\CustomizationFormGetResponse::$a_customization_form} with
     * the customization data of the requested
     * report or report page, optionally converted to the reports listed in {@link
     * \WlSdk\Wl\Report\Customization\CustomizationForm}.
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
     * Stores the customization data supplied in {@link
     * \WlSdk\Wl\Report\Customization\CustomizationFormGetResponse::$a_customization_form} for the
     * requested report or report page and resets the related report configuration cache.
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
