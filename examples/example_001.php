<?php
/**
 * pdf增加水印
 *
 * @author youling073
 * @date 2019/09/07
 */

require_once '../vendor/autoload.php';
use Youling073\PDFWatermark\Pdf;
use Youling073\PDFWatermark\Watermark;
use Youling073\PDFWatermark\FpdiPdfWatermarker as PDFWatermarker;
use Youling073\PdfWatermark\Position;

$base_dir = dirname(__FILE__);
$path1 = $base_dir.'/old.pdf';
$pdf = new Pdf($path1);

// Specify path to image. The image must have a 96 DPI resolution.
$watermark = new Watermark($base_dir.'/timg.jpg');

// Create a new watermarker
$watermarker = new PDFWatermarker($pdf, $watermark);

//水印位置
$watermarker->setPosition(new Position('BottomRight'));

//保存到本地
$watermarker->savePdf($base_dir.'/1.pdf');