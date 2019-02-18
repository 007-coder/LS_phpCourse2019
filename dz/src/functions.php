<?php 

function task1($stringsArray = [], $singleLine = false) {    
    if (count($stringsArray)) {
        $ret1 = $ret2 = '';
        foreach ($stringsArray as $string) {
            $ret1 .= $string.' | ';
            $ret2 .= '<p>'.$string.'</p>';
        }

        if ($singleLine) {
            return '<p>'.$ret1.'</p>';
        } else {
            return $ret2;
        }
    }
}


function task2($op = '+', $d1 = 0, $d2 = 0, $d3 = 0, $d4 = 0, $d5 = 0) {
    $op = (is_string($op) && in_array($op, ['+','-','*','/']) && $op !='') ? $op : '+';    
    $d1 = (is_numeric($d1)) ? $d1 : 0;
    $d2 = (is_numeric($d2)) ? $d2 : 0;
    $d3 = (is_numeric($d3)) ? $d3 : 0;
    $d4 = (is_numeric($d4)) ? $d4 : 0;
    $d5 = (is_numeric($d5)) ? $d5 : 0;

    switch ($op) {
        case '-':
            return $d1 - $d2 - $d3 - $d4 - $d5;
            break;
        case '*':
            return $d1 * $d2 * $d3 * $d4 * $d5;
            break;
        case '/':
            return $d1 / $d2 / $d3 / $d4 / $d5;
            break;

        
        default:
            return $d1 + $d2 + $d3 + $d4 + $d5;
            break;
    }

}  


function task3($_cols = 0, $_rows = 0) {
    $_cols = (is_integer($_cols) && $_cols > 0) ? $_cols : 0;
    $_rows = (is_integer($_rows) && $_rows > 0) ? $_rows : 0;

    $cols = ($_cols > 0) ? range(1, $_cols) : [];
    $rows = ($_rows > 0) ? range(1, $_rows) : [];    

    if ($_rows > 0 && $_rows > 0 ) {
        $html = 
        '<table>
            <thead>';
            foreach ($cols as $col) {
                $html .='<th>'.$col.'</th>';    
            }            
            $html .=
            '</thead>';

            $html .=
            '<tbody>';
            foreach ($rows as $row1) {
                $html .=
                '<tr>';
                foreach ($cols as $col) {
                    $html .= '<td><p>'.$col.' * '.$row1.' = '.($col * $row1).' &nbsp;&nbsp;&nbsp;</p></td>';
                }
                $html .=
                '</tr>';    
            }

            $html .=
            '</tbody>';

        $html .= 
        '</table>';

        return $html;



    } else if ($_cols === 0) {
        return 'Colls error!';
    } else if ($_rows === 0) {
        return 'Rows error!';
    }

}

function task6($fileName = '') {
    if (is_string($fileName) && strlen($fileName)) {
        return file_get_contents(__DIR__.'/'.$fileName);
    }
}
