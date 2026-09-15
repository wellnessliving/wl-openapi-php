<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Report\Customization;

use WlSdk\WlSdkClient;

/**
 * Loads customization data of the customization form that corresponds to specified report / report page.
 */
class ReportQueryCustomizationForm
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
     * @return ReportQueryCustomizationFormGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReportQueryCustomizationFormGetRequest $request): ReportQueryCustomizationFormGetResponse
    {
        return new ReportQueryCustomizationFormGetResponse($this->client->request('/Thoth/ReportCore/QueryEngine/Report/Customization/ReportQueryCustomizationForm.json', $request->params(), 'GET'));
    }

    /**
     * Saves given data of a customization form into database.
     *
     * Stores the customization data supplied in {@link
     * \WlSdk\Wl\Report\Customization\CustomizationFormGetResponse::$a_customization_form} for the
     * requested report or report page and resets the related report configuration cache.
     *
     * @return ReportQueryCustomizationFormPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReportQueryCustomizationFormPostRequest $request): ReportQueryCustomizationFormPostResponse
    {
        return new ReportQueryCustomizationFormPostResponse($this->client->request('/Thoth/ReportCore/QueryEngine/Report/Customization/ReportQueryCustomizationForm.json', $request->params(), 'POST'));
    }
}
