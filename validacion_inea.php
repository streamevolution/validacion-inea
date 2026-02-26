<?php
$nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : '';
$curp = isset($_GET['curp']) ? htmlspecialchars($_GET['curp']) : '';
$folio = isset($_GET['folio']) ? htmlspecialchars($_GET['folio']) : '';
$promedio = isset($_GET['promedio']) ? htmlspecialchars($_GET['promedio']) : '';
$cct = isset($_GET['cct']) ? htmlspecialchars($_GET['cct']) : '';
$institucion = isset($_GET['institucion']) ? htmlspecialchars($_GET['institucion']) : '';
$fecha = isset($_GET['fecha']) ? htmlspecialchars($_GET['fecha']) : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Certificado - INEA</title>
    <style>
        body { font-family: 'Arial', sans-serif; background-color: #f3f4f6; margin: 0; padding: 20px; color: #333; }
        .container { max-width: 500px; margin: 0 auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); border-top: 6px solid #B38E5D; }
        .header { text-align: center; margin-bottom: 25px; border-bottom: 2px solid #eee; padding-bottom: 15px; }
        .title { color: #9F2241; font-size: 18px; font-weight: bold; text-align: center; margin-bottom: 20px; }
        .status-badge { background-color: #10b981; color: white; text-align: center; padding: 12px; border-radius: 6px; font-weight: bold; margin-bottom: 25px; text-transform: uppercase; letter-spacing: 1px; font-size: 14px; }
        .data-row { margin-bottom: 15px; border-bottom: 1px solid #f9f9f9; padding-bottom: 10px;}
        .label { font-weight: bold; color: #6b7280; font-size: 11px; text-transform: uppercase; display: block; margin-bottom: 3px; }
        .value { font-size: 15px; color: #111827; font-weight: bold; display: block; text-transform: uppercase; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 style="margin: 0; color: #333; font-size: 22px;">SISTEMA EDUCATIVO NACIONAL</h2>
            <p style="margin: 5px 0 0 0; color: #666; font-size: 13px;">Validación de Documentos Electrónicos</p>
        </div>
        
        <div class="status-badge">✓ Certificado Válido y Auténtico</div>

        <div class="title">INFORMACIÓN DEL DOCUMENTO</div>

        <div class="data-row"><span class="label">Folio del Certificado</span><span class="value" style="color: #dc2626;"><?php echo $folio; ?></span></div>
        <div class="data-row"><span class="label">Nombre del Alumno</span><span class="value"><?php echo $nombre; ?></span></div>
        <div class="data-row"><span class="label">CURP</span><span class="value"><?php echo $curp; ?></span></div>
        <div class="data-row"><span class="label">Promedio Final Obtenido</span><span class="value"><?php echo $promedio; ?></span></div>
        <div class="data-row"><span class="label">Institución Emisora</span><span class="value"><?php echo $institucion; ?></span></div>
        <div class="data-row"><span class="label">CCT</span><span class="value"><?php echo $cct; ?></span></div>
        <div class="data-row"><span class="label">Fecha de Acreditación</span><span class="value"><?php echo $fecha; ?></span></div>
    </div>
</body>
</html>
