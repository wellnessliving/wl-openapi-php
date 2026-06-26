<?php

namespace WlSdk\Wl\Business\Account\Expense;

class ExpenseScheduleDeleteRequest
{
    /**
     * CID of expense schedule to be managed.
     * One of {@link \WlSdk\Wl\Business\Account\Expense\ExpenseAbstract} inheritors.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Expense\ExpenseAbstract
     */
    public ?int $cid_expense = null;

    /**
     * Key of a business within which expense should be managed.
     *
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Unique key of scheduled expense to be managed.
     * See {@link \WlSdk\Wl\Business\Account\Expense\ExpenseAbstract}
     *
     * @var string|null
     */
    public ?string $s_schedule_key = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_expense' => $this->cid_expense,
            'k_business' => $this->k_business,
            's_schedule_key' => $this->s_schedule_key,
            ],
            static fn ($v) => $v !== null
        );
    }
}
