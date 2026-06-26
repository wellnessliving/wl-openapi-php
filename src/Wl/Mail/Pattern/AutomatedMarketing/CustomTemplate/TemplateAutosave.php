<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

use WlSdk\WlSdkClient;

/**
 * Gets value of the option that determines whether template autosave is enabled.
 */
class TemplateAutosave
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets value of the option that determines whether template autosave is enabled.
     *
     * @return TemplateAutosaveGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TemplateAutosaveGetRequest $request): TemplateAutosaveGetResponse
    {
        return new TemplateAutosaveGetResponse($this->client->request('/Wl/Mail/Pattern/AutomatedMarketing/CustomTemplate/TemplateAutosave.json', $request->params(), 'GET'));
    }

    /**
     * Sets value of the option that determines whether template autosave is enabled.
     *
     * @return TemplateAutosavePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TemplateAutosavePostRequest $request): TemplateAutosavePostResponse
    {
        return new TemplateAutosavePostResponse($this->client->request('/Wl/Mail/Pattern/AutomatedMarketing/CustomTemplate/TemplateAutosave.json', $request->params(), 'POST'));
    }
}
