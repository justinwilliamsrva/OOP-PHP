<?php


// ********** ********** **********
// ********** OBJECT COMPOSITION  **********
// ********** ********** **********

class Subscription
{

    protected StripeGateway $gateway;

    public function __construct(StripeGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function cancel()
    {
        $this->gateway->findStripeCustomer();
    }
}

class StripeGateway
{


    public function findStripeCustomer()
    {
        echo "You found me";
    }
}




// $sub =  new Subscription(new StripeGateway());
// $sub->cancel();



// ********** ********** **********
// ********** Abstraction  **********
// ********** ********** **********


class Subscriptions
{

    protected Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function cancel()
    {
        $this->gateway->findCustomer();
    }
}

interface Gateway
{
    public function findCustomer();
}


class StripeGateways implements Gateway
{


    public function findCustomer()
    {
        echo "You found me. I subscribe to Stripe";
    }
}

class Braintree implements Gateway
{


    public function findCustomer()
    {
        echo "You found me. I subscribe to Braintree";
    }
}


$sub =  new Subscriptions(new StripeGateways());
$sub->cancel();
echo "\n";
$sub =  new Subscriptions(new Braintree());
$sub->cancel();
