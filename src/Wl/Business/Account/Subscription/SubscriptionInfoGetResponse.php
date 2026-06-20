<?php
namespace WlSdk\Wl\Business\Account\Subscription;

/**
 * Response from GET
 */
class SubscriptionInfoGetResponse
{
    /**
     * Locale ID of the business which subscription information is requested for.
     *
     * @var \WlSdk\Core\Locale\LocaleSid|null
     */
    public ?\WlSdk\Core\Locale\LocaleSid $id_locale = null;

    /**
     * Currently active plan ID for requested subscription.
     * 
     * Depending on subscription type constant from one of {@link \WlSdk\Wl\Business\Account\Subscription\PlanSid}
     * inheritors.
     *
     * @var \WlSdk\Wl\Business\Account\Subscription\AiAgent\AiAgentSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Achieve\AchieveSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Base\BaseSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Sms\SmsSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Fitlive\FitliveSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Zoom\ZoomSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Finance\FinanceSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Fitbuilder\FitbuilderSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Fitvid\FitvidSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Fitzone\FitzoneSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\MarketingSuite\MarketingSuiteSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Postcard\PostcardSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Quiz\QuizSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Review\ReviewSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Reward\RewardSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Website\WebsiteSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Asset\AssetSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Door\DoorSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Api\ApiSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Zapier\ZapierSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Collections\CollectionsSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\GoHighLevel\GoHighLevelSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Email\EmailSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Eml\ConstantContactSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\Eml\MailchimpSubscriptionSid|\WlSdk\Wl\Business\Account\Subscription\BusinessCoach\BusinessCoachSubscriptionSid|null
     */
    public $id_plan = null;

    /**
     * Whether subscription is active.
     * 
     * `true` if subscription is active, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    public function __construct(array $data)
    {
        $this->id_locale = isset($data['id_locale']) ? \WlSdk\Core\Locale\LocaleSid::tryFrom((int)$data['id_locale']) : null;
        $this->id_plan = $data['id_plan'] ?? null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
    }
}
