<?php

include_once 'Modelo/clsAlta.php';
include_once 'LibreriaFPDF/fpdf.php';

class controladorReportes
{

    public function reporteProductos()
    {
        // Crear el objeto FPDF
        $pdf = new FPDF();

        // Agregar una página
        $pdf->AddPage();

        // Establecer la fuente y el tamaño del título
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Reporte de Productos', 0, 1, 'C');

        // Consultar los usuarios a la base de datos
        $productos = new clsAlta();
        $producto = $productos->consultaProductos();

        // Establecer la fuente y el tamaño del contenido de la tabla
        $pdf->SetFont('Arial', '', 12);

        // Imprimir los datos de la tabla
        $pdf->Cell(50, 10, 'Producto', 1, 0, 'C');
        $pdf->Cell(60, 10, 'Descripcion', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Precio', 1, 0, 'C');
        $pdf->Cell(20, 10, 'stock', 1, 0, 'C');
        $pdf->Cell(20, 10, 'Categoria', 1, 1, 'C');

        foreach ($producto as $prod) {
            $pdf->Cell(50, 10, $prod['NombreProducto'], 1, 0, 'C');
            $pdf->Cell(60, 10, $prod['DescripcionProducto'], 1, 0, 'C');
            $pdf->Cell(30, 10, $prod['PrecioVenta'], 1, 0, 'C');
            $pdf->Cell(20, 10, $prod['stock'], 1, 0, 'C');
            $pdf->Cell(20, 10, $prod['Categoria'], 1, 1, 'C');
        }

        // Salida del PDF
        $pdf->Output();
    }
}
