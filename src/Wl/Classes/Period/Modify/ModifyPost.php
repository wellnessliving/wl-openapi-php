<?php
namespace WlSdk\Wl\Classes\Period\Modify;

use WlSdk\WlSdkClient;

/**
 * Makes step in wizard.
 */
class ModifyPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Makes step in wizard.
     *
     * Used by the class modification wizard to submit a completed step and advance to the next. The wizard
     * tracks state server-side; this call validates the step input, persists it, and returns the next step
     * the UI should render.
     *
     * @return ModifyPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ModifyPostRequest $request): ModifyPostResponse
    {
        return new ModifyPostResponse($this->client->request('/Wl/Classes/Period/Modify/Modify.json', $request->params(), 'POST'));
    }
}
