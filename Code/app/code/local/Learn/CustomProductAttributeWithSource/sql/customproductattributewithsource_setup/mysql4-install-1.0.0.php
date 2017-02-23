<?php

$installer = $this;

$installer->startSetup();
$installer->addAttribute('catalog_product', 'state', array (
		'group'             => 'General',
		'type'              => Varien_Db_Ddl_Table::TYPE_VARCHAR,
		'backend'           => '',
		'frontend'          => '',
		'label'             => 'State',
		'input'             => 'select',
		'class'             => ' state ',
		'source'            => 'customproductattributewithsource/dropdown_state_type',
		'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
		'visible'           => true,
		'required'          => false,
		'user_defined'      => true,
		'default'           => '',
		'searchable'        => false,
		'filterable'        => true,
		'comparable'        => false,
		'visible_on_front'  => true,
		'unique'            => false,
		'is_filterable_in_search' => true,
		'is_configurable'   => false
	)
);

$installer->endSetup();