<?php

class baseDatos
{
     public function conection()
     {
         
        $conection = mysqli_connect(
            'localhost',
            'root',
            '',
            'sanagustin'
        );

        return $conection;
     }
}
