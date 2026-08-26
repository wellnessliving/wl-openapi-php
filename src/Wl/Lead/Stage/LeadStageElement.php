<?php

namespace WlSdk\Wl\Lead\Stage;

use WlSdk\WlSdkClient;

/**
 * Edits name and icon of a lead stage.
 */
class LeadStageElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Edits name and icon of a lead stage.
     *
     * Type of the stage ({@link \WlSdk\Wl\Lead\Stage\LeadStageTypeSid}) is read-only and can not be changed.
     *
     * @return LeadStageElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LeadStageElementPostRequest $request): LeadStageElementPostResponse
    {
        return new LeadStageElementPostResponse($this->client->request('/Wl/Lead/Stage/LeadStageElement.json', $request->params(), 'POST'));
    }

    /**
     * Creates a new custom lead stage.
     *
     * The name must be unique within the business and no longer than `TITLE_LENGTH_MAX`
     * characters. {@link \WlSdk\Wl\Lead\Stage\LeadStageElement} is required and can not be changed afterwards.
     * A business may have no more than `STAGE_LIMIT` stages.
     *
     * @return LeadStageElementPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(LeadStageElementPutRequest $request): LeadStageElementPutResponse
    {
        return new LeadStageElementPutResponse($this->client->request('/Wl/Lead/Stage/LeadStageElement.json', $request->params(), 'PUT'));
    }

    /**
     * Deletes a lead stage.
     *
     * The last remaining stage of a type ({@link \WlSdk\Wl\Lead\Stage\LeadStageTypeSid}) can not be deleted - a
     * business must always have
     * at least one stage of every type. If the stage has leads or clients assigned,
     * {@link \WlSdk\Wl\Lead\Stage\LeadStageElement} must be given - they are moved to the replacement stage,
     * which must be of the same type.
     *
     * @return LeadStageElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LeadStageElementDeleteRequest $request): LeadStageElementDeleteResponse
    {
        return new LeadStageElementDeleteResponse($this->client->request('/Wl/Lead/Stage/LeadStageElement.json', $request->params(), 'DELETE'));
    }
}
