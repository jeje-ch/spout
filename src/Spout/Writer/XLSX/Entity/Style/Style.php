<?php
namespace Box\Spout\Writer\XLSX\Entity\Style;


class Style extends \Box\Spout\Common\Entity\Style\Style
{
    /**
     * @var int
     */
    protected $rowSpan = 1;

    /**
     * @var int
     */
    protected $colSpan = 1;

    /**
     * @param int $rowSpan
     * @return Style
     */
    public function setRowSpan(int $rowSpan)
    {
        $this->rowSpan = $rowSpan;
        return $this;
    }

    /**
     * @return int
     */
    public function getRowSpan()
    {
        return $this->rowSpan;
    }

    /**
     * @param int $colSpan
     * @return Style
     */
    public function setColSpan(int $colSpan)
    {
        $this->colSpan = $colSpan;
        return $this;
    }

    /**
     * @return int
     */
    public function getColSpan()
    {
        return $this->colSpan;
    }
}
