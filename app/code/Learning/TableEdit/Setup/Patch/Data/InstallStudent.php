<?php
    /**
     * Copyright © Magento, Inc. All rights reserved.
     * See COPYING.txt for license details.
     */

    namespace Learning\TableEdit\Setup\Patch\Data;

    use Magento\Framework\Setup\Patch\DataPatchInterface;
    use Magento\Framework\Setup\ModuleDataSetupInterface;

    /**
     */
    class InstallStudent implements DataPatchInterface
    {
        /**
         * @var \Magento\Framework\Setup\ModuleDataSetupInterface
         */
        private $moduleDataSetup;

        /**
         * @param \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup
         */
        public function __construct(\Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup) 
        {
            $this->moduleDataSetup = $moduleDataSetup;
        }

        public function apply()
        {
            $data =
            [
                ['student_id' => 27, 'student_name' => 'Joel', 'student_marks' => 90]    
            ];
            
            $this->moduleDataSetup->getConnection()->startSetup();
            $this->moduleDataSetup->getConnection()->insertMultiple(
                $this->moduleDataSetup->getTable('student_details'), $data
            );
            $this->moduleDataSetup->getConnection()->endSetup();
        }

        
        public static function getDependencies()
        {
            return [];
        }

    
        public function getAliases()
        {
            return [];
        }
    }