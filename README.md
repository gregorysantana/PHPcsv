# PHPcsv
Convierte los resultados de MySQL a csv en php

Para convertir los resultados de una consulta MySQL a CSV en PHP, puede utilizar la función <code>fputcsv()</code>. A continuación se muestra un ejemplo de código que puede utilizar.

En este ejemplo, primero se establece una conexión a la base de datos MySQL y se realiza una consulta que recupera todos los registros de la tabla especificada. Luego, se crea un archivo CSV llamado resultados.csv y se establece la cabecera con los nombres de las columnas.

A continuación, se recorren los resultados de la consulta y se escriben en el archivo CSV utilizando la función <code>fputcsv()</code>. Por último, se cierra el archivo CSV.

Este es un ejemplo básico de cómo convertir los resultados de una consulta MySQL a CSV en PHP. Puede modificar este código según sus necesidades. Si necesita ayuda adicional, no dude en preguntar.
