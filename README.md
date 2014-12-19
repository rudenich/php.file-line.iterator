FileLinesIterator class
======================

~~~php
$file = 'test.txt';
$iterator = new FileLinesIterator($file);
foreach($iterator as $lineNumber=>$data){
  //do staff
}
~~~

composer

~~~json
{
  "require": {
    "liratrium/filelinesiterator": "dev-master"
  }
}
~~~
