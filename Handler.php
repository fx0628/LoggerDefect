<?php 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       // use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;
use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Class Debug
 * The handler for storing debug messages from module
 */
class Handler extends Base
{
    /**
     * @var integer
     */
    protected $loggerType = Logger::INFO;

    // /**
    //  * {@inheritDoc}
    //  * @param array $record
    //  * @return void
    //  */
    // public function write(array $record)
    // {
    //     // our condition here
    //     if (true) {
    //         parent::write($record);
    //     }
    // }
}