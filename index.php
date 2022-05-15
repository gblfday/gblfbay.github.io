<?php
function readData($name){
        if($name=='')return '';
        $file = fopen($name, "r");
        $data=array();
        $i=0;
//输出文本中所有的行，直到文件结束为止。
        while(! feof($file))
        {
            $data[$i]= fgets($file);//fgets()函数从文件指针中读取一行
            $i++;
        }
        fclose($file);
        $data=array_filter($data);
        return $data;
    }
 $name = 'news.txt';
 $data = readData($name);
 $content = 'The news:<br/>' .  $data[0];
 echo $content;
?>