<?php

class Subscription
{
    protected Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }



    public function create()
    {
    }

    public function cancel()
    {
        // api request
        // find strip customer
        //find strip subscription by customer

        $this->gateway->findCustomer();
    }

    public function invoice()
    {
    }

    public function swap($newPlan)
    {
    }
}

interface Gateway
{
    public function findCustomer();
    public function findStripeSubcriptionByCustomer();

}

class StripeGateway implements Gateway
{

    public function findCustomer()
    {
    }

    public function findStripeSubcriptionByCustomer()
    {
    }
}

class BraintreeGateway implements Gateway
{

    public function findCustomer()
    {
    }

    public function findStripeSubcriptionByCustomer()
    {
    }
}

new Subscription(new BraintreeGateway());