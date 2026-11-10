<?php

namespace WlSdk\Core\Timing;

use WlSdk\WlSdkClient;

/**
 * Logs component load timing entries reported by browser.
 */
class ComponentTiming
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Logs component load timing entries reported by browser.
     *
     * Ignores requests from bots and monitoring user agents. Accepts up to `MAX_ENTRY`
     *  entries per request, discarding any extra entries. Each entry is written to {@link \WlSdk\Core\Log\CoreLog}
     *  and reported to Cloud Watch as up to three `ComponentTime` data points (one per phase that has a value),
     *  tagged with `Component` and `Phase` dimensions. Phases of a request entry are 'network', 'request' and
     *  'server'. Phases of a view entry are 'render', 'startup' and 'view'. A view entry is logged as one record
     *  together with its requests, and the requests are also reported to Cloud Watch with their own phases.
     *
     * @return ComponentTimingPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ComponentTimingPostRequest $request): ComponentTimingPostResponse
    {
        return new ComponentTimingPostResponse($this->client->request('/Core/Timing/ComponentTiming.json', $request->params(), 'POST'));
    }
}
