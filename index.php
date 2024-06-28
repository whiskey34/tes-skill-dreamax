<!-- soal no. 1 -->

<?php 

function compressString (string $input) : string {
    $length = strlen($input);
    if($length == 0){
        return '';
    }

    $compressed = '';
    $count = 1;
    for ($i = 1; $i < $length; $i++) {
        if ($input[$i] === $input[$i - 1]) {
            $count++;
        } else {
            $compressed .= $input[$i - 1] . $count;
            $count = 1;
        }
    
    }
    $compressed .= $input[$length - 1] . $count;

    return $compressed;
    
}

$input = 'aaabbcccddeddbzaa';
$output = compressString($input);
echo $output;



?>