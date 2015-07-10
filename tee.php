<?php
#Use for loops, while loops, and and/or control structures to make a 10 x 15 design of the letter "T". 
#pre tags keep the asterisks more uniformly spaced
echo "<pre>";
# number of rows 15 according to spec
for ($row = 0; $row < 15; $row++) {
# number of cols 10 according to spec
 for ($column = 0; $column < 10; $column++) {
 # first row gets printed in each column otherwise every fifth column gets printed for remaining 14 rows
 if ($row < 1 || $column == 5) {
 echo "*";
 } 
 # blanks printed in count with column
 else echo " ";
 }
 # once colum is counted up to 10 move to next line
 echo "\n"; 
}
echo "</pre>";
?>