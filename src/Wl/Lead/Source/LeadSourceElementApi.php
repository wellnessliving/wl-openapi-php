<?php
namespace WlSdk\Wl\Lead\Source;

use WlSdk\WlSdkClient;

/**
 * Creates or edits a custom source lead.
 */
class LeadSourceElementApi
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_lead_source = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Name of new lead source item.
     *
     * @var string|null
     */
    public ?string $text_lead_source = null;

    /**
     * Key of the lead source.
     *
     * @var string|null
     */
    public ?string $k_lead_source_replace = null;

    /**
     * Key of the lead source.
     *
     * @var string|null
     */
    public ?string $k_lead_source = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates or edits a custom source lead.
     *
     * Accepts a list of lead source records and applies bulk create or update operations: new entries without a
     * key are inserted, and existing entries are updated with a new sort order or title.
     *
     * @deprecated
     *
     * @return LeadSourceElementApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): LeadSourceElementApiPostResponse
    {
        return new LeadSourceElementApiPostResponse($this->client->request('/Wl/Lead/Source/LeadSourceElement.json', $this->params(), 'POST'));
    }

    /**
     * Adds one lead source.
     *
     * Creates a single new custom lead source with the given title for the specified business, assigns it the
     * next available sort position, and returns the generated lead source key.
     *
     * @return LeadSourceElementApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): LeadSourceElementApiPutResponse
    {
        return new LeadSourceElementApiPutResponse($this->client->request('/Wl/Lead/Source/LeadSourceElement.json', $this->params(), 'PUT'));
    }

    /**
     * Deletes custom source lead.
     *
     * Removes the specified custom lead source from the business. If a replacement lead source key is provided,
     * all users currently assigned to the deleted source are reassigned to it before deletion.
     *
     * @return LeadSourceElementApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): LeadSourceElementApiDeleteResponse
    {
        return new LeadSourceElementApiDeleteResponse($this->client->request('/Wl/Lead/Source/LeadSourceElement.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_lead_source' => $this->a_lead_source,
            'k_business' => $this->k_business,
            'text_lead_source' => $this->text_lead_source,
            'k_lead_source_replace' => $this->k_lead_source_replace,
            'k_lead_source' => $this->k_lead_source,
            ],
            static fn($v) => $v !== null
        );
    }
}
