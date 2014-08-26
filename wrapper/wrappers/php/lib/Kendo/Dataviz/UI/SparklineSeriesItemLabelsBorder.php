<?php

namespace Kendo\Dataviz\UI;

class SparklineSeriesItemLabelsBorder extends \kendo\SerializableObject {
//>> Properties

    /**
    * The color of the border.
    * @param string|\Kendo\JavaScriptFunction $value
    * @return \Kendo\Dataviz\UI\SparklineSeriesItemLabelsBorder
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The dash type of the border.
    * @param string|\Kendo\JavaScriptFunction $value
    * @return \Kendo\Dataviz\UI\SparklineSeriesItemLabelsBorder
    */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
    * The width of the border.
    * @param float|\Kendo\JavaScriptFunction $value
    * @return \Kendo\Dataviz\UI\SparklineSeriesItemLabelsBorder
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>
