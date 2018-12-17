<?php

namespace Ntschool\Notifier;

interface NotifierObserverInterface extends NotifierAdapterInterface
{
    public function add(NotifierAdapterInterface $adapter);
}