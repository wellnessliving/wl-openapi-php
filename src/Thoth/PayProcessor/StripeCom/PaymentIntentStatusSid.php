<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

/**
 * Statuses of payment intents.
 *
 * Values:
 * - 7 (`CANCELED`): You may cancel a Payment Intent at any point before it is processing or succeeded. This
 * invalidates the
 *   Payment Intent for future payment attempts, and cannot be undone. If any funds have been held, cancellation
 * returns
 *   those funds.
 * - 4 (`PROCESSING`): Once required actions are handled, the Payment Intent moves to processing. While for some
 * payment methods
 *   (e.g., cards) processing can be quick, other types of payment methods can take up to a few days to process.
 * - 3 (`REQUIRES_ACTION`): If the payment requires additional actions, such as authenticating with 3D Secure , the
 * Payment Intent has a status
 *   of `requires_action`.
 * - 6 (`REQUIRES_CAPTURE`): Requires capture.
 * - 2 (`REQUIRES_CONFIRMATION`): After the customer provides their payment information, the Payment Intent is ready to
 * be confirmed.
 *
 *   This status is optional and in most integrations, this state is skipped because payment method information is
 *   submitted at the same time that the payment is confirmed.
 * - 1 (`REQUIRES_PAYMENT_METHOD`): When the Payment Intent is created, it has a status of `requires_payment_method`
 * until a payment method is
 *   attached.
 *
 *   We recommend creating the Payment Intent as soon as you know how much you want to charge, so that Stripe can
 * record
 *   all the attempted payments.
 *
 *   If the payment attempt fails (for example due to a decline), the Payment Intent’s status returns to
 *   `requires_payment_method`.
 * - 5 (`SUCCEEDED`): A Payment Intent with a status of succeeded means that the payment flow it is driving is
 * complete.
 *
 *   The funds are now in your account and you can confidently fulfill the order. If you need to refund the customer,
 *   you can use the Refunds API.
 */
class PaymentIntentStatusSid
{
    /** You may cancel a Payment Intent at any point before it is processing or succeeded. This invalidates the */
    public const CANCELED = 7;

    /** Once required actions are handled, the Payment Intent moves to processing. While for some payment methods */
    public const PROCESSING = 4;

    /** If the payment requires additional actions, such as authenticating with 3D Secure , the Payment Intent has a status */
    public const REQUIRES_ACTION = 3;

    /** Requires capture. */
    public const REQUIRES_CAPTURE = 6;

    /** After the customer provides their payment information, the Payment Intent is ready to be confirmed. */
    public const REQUIRES_CONFIRMATION = 2;

    /** When the Payment Intent is created, it has a status of `requires_payment_method` until a payment method is */
    public const REQUIRES_PAYMENT_METHOD = 1;

    /** A Payment Intent with a status of succeeded means that the payment flow it is driving is complete. */
    public const SUCCEEDED = 5;
}
