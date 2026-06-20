<?php
namespace WlSdk\Wl\Quiz;

/**
 * List of quiz frequency types.
 * 
 * Values:
 * - 1 (`EVERY`): Client will be asked to complete the quiz every time they book a service or purchase item.
 * - 2 (`FIRST`): Client will be asked to complete the quiz the first time they book a service or purchase item.
 * - 3 (`ONCE`): Client will be asked to complete the quiz only one time when they book a service or purchase item.
 */
class QuizFrequencySid
{
    /** Client will be asked to complete the quiz every time they book a service or purchase item. */
    const EVERY = 1;
    /** Client will be asked to complete the quiz the first time they book a service or purchase item. */
    const FIRST = 2;
    /** Client will be asked to complete the quiz only one time when they book a service or purchase item. */
    const ONCE = 3;
}
