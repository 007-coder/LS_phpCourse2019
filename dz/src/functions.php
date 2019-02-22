<?php 

function task1($stringsArray = [], $singleLine = false) {        
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


function task2($op = '+') {
    $args = func_get_args();
    $nums = [];

    foreach ($args as $k => $arg) {
        if ($k === 0) {
            $op =  (is_string($arg) && in_array($arg, ['+','-','*','/']) ) ? $arg : '+'; 
        } else {
            $nums[] = (is_numeric($arg)) ? $arg : 0;
        }
    }    

    if (count($nums)) {
        $ret = $nums[0];

        switch ($op) {
            case '+':               
                for ($i=1; $i < count($nums); $i++) { 
                    $ret += $nums[$i]; 
                }                                                
                return $ret;           

            case '-':
                for ($i=1; $i < count($nums); $i++) { 
                    $ret -= $nums[$i]; 
                }                                                
                return $ret;           

            case '*':
                for ($i=1; $i < count($nums); $i++) { 
                    $ret *= $nums[$i]; 
                }                                                
                return $ret;           

            case '/':
                for ($i=1; $i < count($nums); $i++) { 
                    if ($nums[$i] > 0 ) {
                        $ret /= $nums[$i];                        
                    } else {
                        return 'Деление на 0';                        
                    }
                    
                }                
                return $ret;                                                  
                
        }
    }
    

}  


function task3($_cols = 0, $_rows = 0) { 

    $cols = (is_integer($_cols) && $_cols > 0) ? range(1, $_cols) : [];
    $rows = (is_integer($_rows) && $_rows > 0) ? range(1, $_rows) : [];    

    if (!empty($cols) && !empty($rows) ) {
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



    } else if (empty($cols) || empty($rows)) {
        return 'error!';
    }

}

function task6($fileName = '') {
    if (is_string($fileName) && strlen($fileName)) {
        return file_get_contents(__DIR__.'/'.$fileName);
    }
}