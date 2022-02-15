<?php

// ********** ********** **********
// **********   DUCK TYPING  **********
// ********** ********** **********

class NewsletterProvider
{


    public function subscribe($email)
    {
        $newsletterName = trim(preg_replace('/[A-Z]/', ' $0', get_class($this)));
        echo "{$email} is subscribed to {$newsletterName}";
    }
}

class CampaignMonitor extends NewsletterProvider
{
    public $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
}
class MailChimp extends NewsletterProvider
{
    public $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
}

class NewsletterController
{

    public function store($newsletter)
    {

        $email = 'example@test.com';
        $newsletter->subscribe($email);
    }
}


$controller = new NewsletterController();

// echo $controller->store(new MailChimp('aksdjalksdjlasdkj'));
// echo "\n";
// echo $controller->store(new CampaignMonitor('aksdjalksdjlasdkj'));


// ********** ********** **********
// ********** INTERFACES  **********
// ********** ********** **********

interface Newsletter
{


    public function subscribe($email);
}

class CampaignMonitors implements Newsletter{
    public $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
    public function subscribe($email)
    {
        $newsletterName = trim(preg_replace('/[A-Z]/', ' $0', get_class($this)));
        echo "{$email} is subscribed to {$newsletterName}";
    }


}
class MailMonkey implements Newsletter{
    public $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
    public function subscribe($email)
    {
        $newsletterName = trim(preg_replace('/[A-Z]/', ' $0', get_class($this)));
        echo "{$email} is subscribed to {$newsletterName}";
    }


}

class NewsletterSubController
{

    public function store($newsletter)
    {

        $email = 'example@test.com';
        $newsletter->subscribe($email);
    }
}

echo $controller->store(new MailMonkey('aksdjalksdjlasdkj'));
echo "\n";
echo $controller->store(new CampaignMonitors('aksdjalksdjlasdkj'));