<?php

namespace WlSdk\Wl\Marketing\Automation\AiGeneration;

use WlSdk\WlSdkClient;

/**
 * Build the ISAAC request payload from automation data without sending the request.
 */
class AskIsaacAutomationContent
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Build the ISAAC request payload from automation data without sending the request.
     *
     * @return AskIsaacAutomationContentPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AskIsaacAutomationContentPostRequest $request): AskIsaacAutomationContentPostResponse
    {
        return new AskIsaacAutomationContentPostResponse($this->client->request('/Wl/Marketing/Automation/AiGeneration/AskIsaacAutomationContent.json', $request->params(), 'POST'));
    }
}
