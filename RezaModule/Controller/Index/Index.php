<?php
declare(strict_types=1);
namespace Signup\RezaModule\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Signup\RezaModule\Model\Config;
/**
 * Class Index
 * @package Signup\RezaModule\Controller\Index
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var Config
     */
    protected $rezaConfig;

    /**
     * Index constructor.
     * @param Config $myConfig
     * @param Context $context
     */
    public function __construct(Config $myConfig, Context $context)
    {
        parent::__construct($context);

        $this->rezaConfig = $myConfig;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        if ($this->rezaConfig->isEnabled()) {
            return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        } else {
            $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
            $result->setContents('this page deleted by admin!');
            return $result;
        }
    }
}
