<?php

namespace yii2tech\csvgrid;

/**
 * Column is the base class of all [[CsvGrid]] column classes.
 *
 * @author Adegoke Obasa <adegokeobasa@gmail.com>
 * @since 1.1.0
 */
class SerialColumn extends Column
{
    /**
     * @inheritdoc
     */
    public $header = '#';


    /**
     * @inheritdoc
     */
    public function renderHeaderCellContent()
    {
        return parent::renderHeaderCellContent();
    }

    /**
     * @inheritdoc
     */
    public function renderFooterCellContent()
    {
        return parent::renderFooterCellContent();
    }

    /**
     * @inheritdoc
     */
    public function renderDataCellContent($model, $key, $index)
    {
        $pagination = $this->grid->dataProvider->getPagination();
        if ($pagination !== false) {
            return $pagination->getOffset() + $index + 1;
        } else {
            return $index + 1;
        }
    }
}