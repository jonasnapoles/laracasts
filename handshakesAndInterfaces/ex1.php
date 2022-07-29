<?php 

class CampaignMonitor
{

    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }


    public function subscribe($email)
    {
        die('subscribing with Campaign Monitor');
    }
}

class Drip
{
    public function subscribe($email)
    {
        die('subscribing with Drip');
    }
}

class NewletterSubscriptionsController
{
        public function store($newsletter)
    {
        $newsletter->subscribe(auth()->user()->email);
    }
}

$controller = new NewletterSubscriptionsController();

$controller->store(new CampaignMonitor());