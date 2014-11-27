<?php
namespace Lpdp;

/**
 * Class DisplayAll
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 265
 */
class DisplayAll implements IStrategy {
    /**
     * @var string
     */
    private $tableMaster;
    /**
     * @var \mysqli
     */
    private $hookup;

    /**
     * @param array $dataPack
     */
    public function algorithm(array $dataPack) {
        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup = UniversalConnect::doConnect();

        $sql = "SELECT * FROM $this->tableMaster;";
        if ($result = $this->hookup->query($sql)) {
            printf('Select returned %d rows.<br />', $result->num_rows);

            echo '<link rel="stylesheet" href="survey.css" />';
            echo '<table><tr>';

            while ($finfo = $result->fetch_field()) {
                echo '<th>&nbsp;'.$finfo->name.'</th>';
            }
            echo '</tr>';

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