<?php
namespace Signup\RezaModule\Model\ResourceModel\Collection;

use Signup\RezaModule\Model\item1;

/**
 * Class Collection
 * @package Signup\RezaModule\Model\ResourceModel\Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     *
     */
    public function _construct()
    {
        $this->_init(item::class, "Signup\RezaModule\Model\ResourceModel\item1");
    }
}
