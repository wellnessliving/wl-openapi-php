<?php
namespace WlSdk\Wl\Book\Process\Frequency;

use WlSdk\WlSdkClient;

/**
 * Returns the list of visits to be created for the given recurring booking settings.
 */
class RepeatParallelGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of visits to be created for the given recurring booking settings.
     *
     * Accepts the class period, date, user, recurrence configuration (interval, end condition, and days of week),
     * and returns a list of individual visit slots with availability and alert information for each occurrence,
     * together with the computed date range and visit count.
     *
     * @return RepeatParallelGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RepeatParallelGetRequest $request): RepeatParallelGetResponse
    {
        return new RepeatParallelGetResponse($this->client->request('/Wl/Book/Process/Frequency/RepeatParallel.json', $request->params(), 'GET'));
    }
}
