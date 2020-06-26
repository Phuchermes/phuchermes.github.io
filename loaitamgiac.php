<?php
        $result=array();
        if(isset($_GET['Caculate']))
        {
            $a = isset($_GET['a']) ? $_GET['a'] : '';
            $b = isset($_GET['b']) ? $_GET['b'] : '';
            $c = isset($_GET['c']) ? $_GET['c'] : '';
            if($a<=0||$b<=0||$c<=0)
            {
                $result ['Ket qua']='Ba canh nay khong phai tao tam giac';
            }
            else if(($a + $b) < $c && ($b + $c) < $a && ($c + $a) < $b)
            {
                $result ['Ket qua']='Ba canh nay khong phai tao tam giac';
            }
            else if($a==$b && $b==$c)
            {
                $result ['Ket qua']='Ba canh nay la tam giac deu';                
            }
            else if($a==$b || $a==$c || $b==$c)
            {
                if(pow($a,2)==pow($b,2)+pow($c,2)||pow($b,2)==pow($c,2)+pow($c,2)|| pow($c,2)==pow($b,2)+pow($a,2))
                {
                    $result ['Ket qua']='Ba canh nay la tam giac vuong can'; 
                }
                else
                {
                    $result ['Ket qua']='Ba canh nay la tam giac can';
                }
            }
            else if (pow($a,2)==pow($b,2)+pow($c,2)||pow($b,2)==pow($c,2)+pow($c,2)|| pow($c,2)==pow($b,2)+pow($a,2))
            {
                $result ['Ket qua']='Ba canh nay la tam giac vuong';
            }
            else
            {
                $result ['Ket qua']='Ba canh nay la tam giac binh thuong';
            }
            $json=json_encode($result);
        }    
        echo json_encode($result);
?>
