<?php
namespace WlSdk\Wl\Promotion\Index;

class PromotionIndexGetResponsePromotionAccess
{
    /**
     * A list of available classes.
     *
     * @var PromotionIndexGetResponsePromotionAccessClass|null
     */
    public ?PromotionIndexGetResponsePromotionAccessClass $a_class = null;

    /**
     * A list of available events.
     *
     * @var PromotionIndexGetResponsePromotionAccessEvent|null
     */
    public ?PromotionIndexGetResponsePromotionAccessEvent $a_event = null;

    /**
     * A list of available assets.
     *
     * @var PromotionIndexGetResponsePromotionAccessResource|null
     */
    public ?PromotionIndexGetResponsePromotionAccessResource $a_resource = null;

    /**
     * A list of available appointment types.
     *
     * @var PromotionIndexGetResponsePromotionAccessService|null
     */
    public ?PromotionIndexGetResponsePromotionAccessService $a_service = null;

    /**
     * If `true`, any class in the business can be visited with this Purchase Option. If `false`, only selected
     * classes can be visited.
     * Selected classes can be found in the list of available classes and events.
     *
     * @var bool|null
     */
    public ?bool $is_class_all = null;

    /**
     * If `true`, if any event in the business can be visited with this Purchase Option. If `false`, if only
     * selected events can be visited.
     * Selected events can be found in the list of available classes and events.
     *
     * @var bool|null
     */
    public ?bool $is_event_all = null;

    public function __construct(array $data)
    {
        $this->a_class = isset($data['a_class']) ? new PromotionIndexGetResponsePromotionAccessClass((array)$data['a_class']) : null;
        $this->a_event = isset($data['a_event']) ? new PromotionIndexGetResponsePromotionAccessEvent((array)$data['a_event']) : null;
        $this->a_resource = isset($data['a_resource']) ? new PromotionIndexGetResponsePromotionAccessResource((array)$data['a_resource']) : null;
        $this->a_service = isset($data['a_service']) ? new PromotionIndexGetResponsePromotionAccessService((array)$data['a_service']) : null;
        $this->is_class_all = isset($data['is_class_all']) ? (bool)$data['is_class_all'] : null;
        $this->is_event_all = isset($data['is_event_all']) ? (bool)$data['is_event_all'] : null;
    }
}
