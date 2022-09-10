<style>
  body {
    font-family: system-ui;
  }
</style>
<?php
/**
 * d - día del mes
 * m - mes
 * y - Y - año
 * l - día de la semana
 *
 * h - hora
 * i - minuto
 * s - segundo
 * a - am-pm
 */
date_default_timezone_set('America/Mexico_City');
setlocale(LC_ALL, "es_MX");
echo "Fecha: " . date("l");
echo "<br>Hora: " . date("h:i:s");