<?php

/**
 * @author Mygento Team
 * @copyright 2018 Mygento (https://www.mygento.ru)
 * @package Mygento_ImportExport
 */

namespace Mygento\ImportExport\Api;

interface CategoryInterface
{
    public function createCategory(string $path);
}