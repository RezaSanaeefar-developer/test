<?php

declare(strict_types=1);
namespace Signup\RezaModule\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

/**
 * Class UpgradeSchema
 * @package Signup\RezaModule\Setup
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
<<<<<<< HEAD
=======

>>>>>>> 50d2d3d4c66f2cbfbef09c068b1fb6b64c88ae24
    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable('signup_rezamodule_item'),
                'Lastname',
                [
                    'type' => Table::TYPE_TEXT,
                    'nullable' => true,
                    'comment' => 'Item Name'
                ]
            );
        }
        $setup->endSetup();

    }
}
