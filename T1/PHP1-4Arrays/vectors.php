<html>
    <body>
        <ul>
            <?php
                
             /*   $num[0]=10;
                $num[1]=20;
                $num[2]=30;
                $num[3]=40;
                $num[4]=50;
                $num[5]=60;
                $num[6]=70;
                $num[7]=80;
                $num[8]=90;
                $num[9]=100;
                
                $numEle=count($num);
                
                
                for ($i=0; $i < $numEle; $i++){
                    
                    echo "<li>Elemento $i val: $num[$i]</li>";
                    
                }
                */
            
            $num_rango=range(10,100, 10);
            $numEle=count($num_rango);
            
            for ($i=0; $i < $numEle; $i++){
                    
                    echo "<li>Elemento $i val: $num_rango[$i]</li>";
                    
                }
            
           
        
            ?>
        </ul>
    </body>
</html>





