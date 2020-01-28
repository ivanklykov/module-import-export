<?php

/**
 * @author Mygento Team
 * @copyright 2018-2020 Mygento (https://www.mygento.ru)
 * @package Mygento_ImportExport
 */

namespace Mygento\ImportExport\Api;

interface AttributeInterface
{
    /**
     * @param \Magento\ImportExport\Model\Import\AbstractSource $source
     * @param array $attibutes
     */
    public function createAttributeOptions(
        \Magento\ImportExport\Model\Import\AbstractSource $source,
        array $attibutes
    );

    /**
     * @param \Magento\ImportExport\Model\Import\AbstractSource $source
     * @param array $attibutes
     */
    public function createDropdownAttributeOptions(
        \Magento\ImportExport\Model\Import\AbstractSource $source,
        array $attibutes
    );

    /**
     * @param \Magento\ImportExport\Model\Import\AbstractSource $source
     * @param array $attibutes
     */
    public function createMultiselectAttributeOptions(
        \Magento\ImportExport\Model\Import\AbstractSource $source,
        array $attibutes
    );

    /**
     * Retrieve list of attribute options
     *
     * @param string $code
     * @throws \Magento\Framework\Exception\StateException
     * @throws \Magento\Framework\Exception\InputException
     * @return array
     */
    public function getAttributeOptions(string $code);

    /**
     * Create Attribute option
     *
     * @param string $attributeCode
     * @param string $label
     */
    public function createAttributeOption(string $code, $label);

    /**
     * Reload Cached Attribute Option List
     * @param string $attributeCode
     * @return array
     */
    public function reloadAttributeOptionList(string $code);
}
