<?php

namespace WlSdk\Wl\Business\Account\Expense;

/**
 * Business expense manager.
 *
 * Values:
 * - 1638 (`Wl\Business\Account\Expense\ExpenseSmsTransactional`): Manages expenses for transactional sms.
 * - 1716 (`Wl\Business\Account\Expense\ExpenseFee`): Manages expenses for business account.
 * - 1467 (`Wl\Business\Account\Expense\ProratedExpense`): A prorated expense. Allows charging an expense for a
 * prorated period down to the day. Can be used to charge for a
 *   partial period, or for a series of missed periods.
 * - 916 (`Wl\Business\Account\Expense\ExpenseAchieveCustomization`): Manages expenses for business account achieve
 * customization fee.
 * - 894 (`Wl\Business\Account\Expense\ExpensePostcard`): Manages expenses for business account.
 * - 881 (`Wl\Business\Account\Expense\ExpenseSms`): Manages expenses for business account.
 * - 1438 (`Wl\Business\Account\Expense\ExpenseSmsA2pCampaign`): Manages A2P10DLC monthly campaign fee expense.
 * - 1439 (`Wl\Business\Account\Expense\ExpenseSmsA2pRegistration`): Manages A2P10DLC registration and vetting fee
 * expense.
 * - 1226 (`Wl\Business\Account\Expense\ExpenseSubscriptionProrate`): Charges a prorated payment for a subscription.
 * Used when a new location is added.
 */
class ExpenseAbstract
{
    /** Manages expenses for transactional sms. */
    public const ExpenseSmsTransactional = 1638;

    /** Manages expenses for business account. */
    public const ExpenseFee = 1716;

    /** A prorated expense. Allows charging an expense for a prorated period down to the day. Can be used to charge for a */
    public const ProratedExpense = 1467;

    /** Manages expenses for business account achieve customization fee. */
    public const ExpenseAchieveCustomization = 916;

    /** Manages expenses for business account. */
    public const ExpensePostcard = 894;

    /** Manages expenses for business account. */
    public const ExpenseSms = 881;

    /** Manages A2P10DLC monthly campaign fee expense. */
    public const ExpenseSmsA2pCampaign = 1438;

    /** Manages A2P10DLC registration and vetting fee expense. */
    public const ExpenseSmsA2pRegistration = 1439;

    /** Charges a prorated payment for a subscription. Used when a new location is added. */
    public const ExpenseSubscriptionProrate = 1226;
}
