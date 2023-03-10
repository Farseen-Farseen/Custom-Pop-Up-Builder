<?php

declare(strict_types=1);

namespace Terrificminds\CustomPopupBuilder\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class View extends AbstractDb
{
    /**
     * Post Abstract Resource Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('custom_popup_table', 'id');
    }
}
