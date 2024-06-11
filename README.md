Basic Array Manipulation
-------------------------

How to use this package:
-----------------------
1. create a fresh laravel project or inside your existing project just require this : composer require faheem2407/play-with-array
2. create an object of class ArrayHelper like this: $object = new ArrayHelper([43,21,5,8,92,56]);//here you must have to pass an array. 
3. call searchPosition function to get the position of that number if present in the array if not present it will also
   show an user-friendly message.Use like this: echo $a->searchItemPosition(23);
    output:
         (1). 23 is not present in this array.
         (2). 8 is found at position 4.
   
5. call sortArray function to make the passing array sorted. like this: print_r($a->sortArray());
    output: { [0]=>5, [1]=>8, [2]=>21, [3]=>43, [4]=>56, [5]=>92 }
   

