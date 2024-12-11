<?php

interface ActionnableEventInterface extends EventInterface
{
    /**
     * If the event is actionable, returns the list of available actions
     *
     * @return array
     */
    public function action() : array;
}
