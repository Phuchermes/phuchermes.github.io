<?php
       
        $result2= array();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        if(isset($_GET['Caculate2']))
        {
            $day = isset($_GET['day']) ? $_GET['day'] : '';
            $month = isset($_GET['month']) ? $_GET['month'] : '';
            $year = isset($_GET['year']) ? $_GET['year'] : ''; 
            if($day==null||$month==null||$year==null)
            {
                $result2['Ketqua']='vui long nhap ngay thang nam';
            }
            else{       
                $tomorrow=mktime(0,0,0,date($month),date($day)+1,date($year));
                $result2['Ngayketiep']=date('d-m-Y',$tomorrow);
            }
            $json=json_encode($result2);
            
        }
        echo json_encode($result2);
?>
