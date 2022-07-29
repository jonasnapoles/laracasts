<?php

use CampaignMonitor as GlobalCampaignMonitor;

interface Newletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newletter
{

    public function subscribe($email)
    {
        die('subscribing with Campaign Monitor');
    }
}

class Drip implements Newletter
{
    public function subscribe($email)
    {
        die('subscribing with Drip');
    }
}

class NewletterSubscriptionsController
{
        public function store(Newletter $newsletter)
    {
        $email = 'jno@email.eu';
        $newsletter->subscribe($email);
    }
}

$controller = new NewletterSubscriptionsController();

$controller->store(new CampaignMonitor());