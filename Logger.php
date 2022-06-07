<?php
namespace Digitalriver\DrPay\Logger;

use Psr\Log\LoggerInterface;

/**
 * Class SomeClass
 * The class responsible for doing something
 */
class Logger
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * SomeClass constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Do something
     * @return void
     */
    public function execute()
    {
        $this->logger->alert('WAKE UP!');
        $this->logger->debug('Next step');
        $this->logger->notice('Take a look at this');
        $this->logger->error('Something went wrong', ['param1' => 'value1']);
    }
}