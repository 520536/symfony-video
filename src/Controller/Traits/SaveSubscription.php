<?php

namespace App\Controller\Traits;

use App\Entity\Subscription;


trait SaveSubscription {     //Trait 是为类似 PHP 的单继承语言而准备的一种代码复用机制


    private function saveSubscription($plan, $user)
    {
  
        $date = new \Datetime();
        $date->modify('+1 month');
        $subscription = $user->getSubscription();

        if(null === $subscription)
        {
            $subscription = new Subscription;
        }

        if($subscription->getFreePlanUsed() && $plan == Subscription::getPlanDataNameByIndex(0)) // free plan
        {
            return;
        }

        $subscription->setValidTo($date);
        $subscription->setPlan($plan);


        if($plan == Subscription::getPlanDataNameByIndex(0)) // free plan
        {
            $subscription->setFreePlanUsed(true);
            $subscription->setPaymentStatus('paid');
        }
        
        $subscription->setPaymentStatus('paid'); // tmp
        
        $user->setSubscription($subscription);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

    }

}
