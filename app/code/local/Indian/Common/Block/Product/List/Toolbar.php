<?php
class Indian_Common_Block_Product_List_Toolbar extends Indian_Common_Block_Product_List_Toolbar_Amasty_Pure
{
    protected $_direction           = 'desc';
    
    public function setDefaultOrder($field)
    {
        $field = 'created_at';
        if (isset($this->_availableOrder[$field])) {
            $this->_orderField = $field;
        }
        return $this;
    }
}
