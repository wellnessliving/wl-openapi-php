<?php
namespace WlSdk\Wl\Book\Process\Info;

use WlSdk\WlSdkClient;

/**
 * Checks whether the user can complete booking wizard without additional steps.
 */
class InfoCanCompletePost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether the user can complete booking wizard without additional steps.
     *
     * Performs a dry-run booking attempt for the given class period, date, and session selection to determine
     * whether the client can finalize the booking directly from the info step without proceeding to the payment
     * or purchase-option steps.
     *
     * @return InfoCanCompletePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(InfoCanCompletePostRequest $request): InfoCanCompletePostResponse
    {
        return new InfoCanCompletePostResponse($this->client->request('/Wl/Book/Process/Info/InfoCanComplete.json', $request->params(), 'POST'));
    }
}
