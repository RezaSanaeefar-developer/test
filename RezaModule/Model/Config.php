<?php

namespace Signup\RezaModule\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;


/**
 * Class Config
 * @package Signup\RezaModule\Model
 */
class Config
{
    /**
     *
     */
    const XML_PATH_ENABLED = 'signup/general/enable';

    /**
     * @var ScopeConfigInterface
     */
    protected $config;

    /**
     * Config constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->config = $scopeConfig;
    }

    /**
     * @return mixed
     */
    public function isEnabled()
    {
        return $this->config->getValue(self::XML_PATH_ENABLED);
    }
}
