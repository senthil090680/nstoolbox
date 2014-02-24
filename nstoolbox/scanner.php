    <?php  
      
    $host  = $_REQUEST['host'];//getting the host value from the html file  
      
    $start = $_REQUEST['start'];// getting the starting of range of port number from the html file  
      
    //$end   = $_REQUEST['end'];// getting the ending of range of port number from the html file.  
      
    //for($current = $start; $current <= $end; $current++)//for each port execute the below mentioned statement  
    //{  
    $service = getservbyport($start, "tcp");//to get the service hosted by the port.  
      
    $result = @fsockopen($host, $start);//to open a socket connection with the given host and the port mentioned in current.  
      
    echo $start;//printing the port number.  
      
    echo $service;//printing the service hosted by the port  
      
    if($result)//telling the port is open or not depending upon the value returned by fsockopen( ) function.  
    {         
    echo "<font color='green'>PORT OPEN</font><br>";  
    }  
    else  
    {         
    echo "<font color='red'>PORT CLOSED</font><br>";  
    }  
   // }  
    ?>  