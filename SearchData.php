<?php
namespace Lpdp;

/**
 * Class SearchData
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 266
 */
class SearchData implements IStrategy {
    /**
     * @var string
     */
    private $tableMaster;
    /**
     * @var array
     */
    private $dataPack;
    /**
     * @var \mysqli
     */
    private $hookup;
    /**
     * @var string
     */
    private $sql;

    /**
     * @param array $dataPack
     */
    public function algorithm(array $dataPack) {
        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup = UniversalConnect::doConnect();
        $this->dataPack = $dataPack;
        $field = $this->dataPack[0];
        $term = $this->dataPack[1];
        $this->sql = "SELECT * FROM $this->tableMaster WHERE $field='$term';";
        if ($result = $this->hookup->query($this->sql)) {
            echo '<link rel="stylesheet" href="survey.css" />';
            echo '<table>';
            while ($row = $result->fetch_row()) {
                echo '<tr>';
                foreach ($row as $cell) {
                    echo "<td>$cell</td>";
                }
                echo '</tr>';
            }
            echo '</table>';
            $result->close();
        }
        $this->hookup->close();
    }
}