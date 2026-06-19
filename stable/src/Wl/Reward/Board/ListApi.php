<?php
namespace WlSdk\Wl\Reward\Board;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of reward board items to show.
 */
class ListApi
{
    /**
     * ID of a business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of reward board to show information for.
     *
     * @var string|null
     */
    public ?string $k_reward_board = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of reward board items to show.
     *
     * Returns an ordered list of user IDs ranked by points for the specified reward board, up to the configured
     * maximum number of entries.
     *
     * @return ListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ListApiGetResponse
    {
        return new ListApiGetResponse($this->client->request('/Wl/Reward/Board/List.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_reward_board' => $this->k_reward_board,
            ],
            static fn($v) => $v !== null
        );
    }
}
