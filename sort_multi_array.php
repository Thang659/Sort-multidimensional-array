<?php
// A function to find the minimum value from a multidimensional array:
function recursive_array_min($a) {
      // Loop through all entries comparing them to each other
      foreach ($a as $value) {
           // If this is an array find its minimum.
          if (is_array($value)) {
            $value = recursive_array_min($value);
        }
        if (!(isset($min))) {
            $min = $value;
 } else {
            // Compare this value to the min, and pick the highest:
            $min = $value < $min ? $value : $min;
        }
    }
    return $min;
}
$dimensional = array(
    array(3525, 3525),
    array(235, 534, 72353, array(3405, 47571, 956), 64325),
	array(2335, 5344, 723, array(34805, 472571, 9536), array(8492,423,5465,143)),
    array(414, 594, 857,432),
	array(901, 7434,193)
    );
echo "<p>Set of multidimensional array: \n" ;
print "<pre>";
print_r(array_values($dimensional)) ;
print "</pre>";
$min = recursive_array_min($dimensional);
echo "<p>The minimum value was: {$min}</p>";
//Output 
/**** The minimum value was: 143 ****/
?>
