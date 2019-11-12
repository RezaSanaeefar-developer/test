<?php

declare(strict_types=1);
namespace  Signup\RezaModule\Block;

use Magento\Framework\View\Template;


/**
 * Class Hello
 * @package Signup\RezaModule\Block
 */
class Hello extends Template
{


    /**
     * Hello constructor.
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,

        array $data = []
    ) {
        parent::__construct($context, $data);
    }

}
