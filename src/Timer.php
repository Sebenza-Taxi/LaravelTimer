<?php

namespace Yonder\Timer;

class Timer
{
    /** @var float  */
    private float $startingTime;

    /** @var float  */
    private float $endingTime;

    /** @var float  */
    private float $totalTime;

    /**
     * Initiates the timer
     *
     * @return void
     */
    public function startTimer(): void
    {
        $commence = microtime();
        $parts = explode(" ", $commence);
        $this->startingTime = (int)$parts[1] + (int)$parts[0];
    }

    /**
     * Stops and resets the timer, and returns the elapsed time
     *
     * @param int $precision
     * @return float
     */
    public function endTimer(int $precision = 5): float
    {
        $suspend = microtime();
        $parts = explode(" ", $suspend);
        $this->endingTime = (int)$parts[1] + (int)$parts[0];
        $this->totalTime = round(($this->endingTime - $this->startingTime), $precision);

        return $this->totalTime;
    }

}