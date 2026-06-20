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
enum QuizFrequencySid: int
{
    case EVERY = 1;
    case FIRST = 2;
    case ONCE = 3;
}
