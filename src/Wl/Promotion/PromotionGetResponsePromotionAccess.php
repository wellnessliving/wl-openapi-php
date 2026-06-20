<?php

namespace WlSdk\Wl\Promotion;

class PromotionGetResponsePromotionAccess
{
    /**
     * A list of available classes.
     *
     * @var PromotionGetResponsePromotionAccessClass|null
     */
    public ?PromotionGetResponsePromotionAccessClass $a_class = null;

    /**
     * A list of available events.
     *
     * @var PromotionGetResponsePromotionAccessEvent|null
     */
    public ?PromotionGetResponsePromotionAccessEvent $a_event = null;

    /**
     * A list of available assets.
     *
     * @var PromotionGetResponsePromotionAccessResource|null
     */
    public ?PromotionGetResponsePromotionAccessResource $a_resource = null;

    /**
     * A list of available appointment types.
     *
     * @var PromotionGetResponsePromotionAccessService|null
     */
    public ?PromotionGetResponsePromotionAccessService $a_service = null;

    /**
     * This will be `true` if any class in the business can be visited with this Purchase Option.
     * Otherwise, this will be `false` if only selected classes can be visited with this Purchase Option.
     * Selected classes can be found in the list of available classes and events.
     *
     * @var bool|null
     */
    public ?bool $is_class_all = null;

    /**
     * This will be `true` if any event in the business can be visited with this Purchase Option.
     * Otherwise, this will be `false` if only selected events can be visited with this Purchase Option.
     * Selected events can be found in the list of available classes and events.
     *
     * @var bool|null
     */
    public ?bool $is_event_all = null;

    public function __construct(array $data)
    {
        $this->a_class = isset($data['a_class']) ? new PromotionGetResponsePromotionAccessClass((array)$data['a_class']) : null;
        $this->a_event = isset($data['a_event']) ? new PromotionGetResponsePromotionAccessEvent((array)$data['a_event']) : null;
        $this->a_resource = isset($data['a_resource']) ? new PromotionGetResponsePromotionAccessResource((array)$data['a_resource']) : null;
        $this->a_service = isset($data['a_service']) ? new PromotionGetResponsePromotionAccessService((array)$data['a_service']) : null;
        $this->is_class_all = isset($data['is_class_all']) ? (bool)$data['is_class_all'] : null;
        $this->is_event_all = isset($data['is_event_all']) ? (bool)$data['is_event_all'] : null;
    }
}
