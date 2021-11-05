<?php

    function cargarUsers(){
        // CREAMOS EL OBJETO CONSULTAS ADMINISTRADOR
        $objetoConsultas = new consultasAdmin();
        $result = $objetoConsultas->listarUsers();

        if (!isset($result)) {
            echo '<h2>No hay datos perro</h2>';
        }else {
            echo '
            <thead>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
            </thead>

            <tbody>
            

            </tbody>
            
            
            ';
            foreach ($result as $f) {
                echo '<tr>
                <td>'.$f['identificacion'].'</td>
                <td>'.$f['tipodoc'].'
                </td>
                <td>'.$f['nombres'].'</td>
                <td>'.$f['identificacion'].'</td>
                <td>X</td>
              </tr>';
            }
            echo '</tbody>';
        }
    }

?>