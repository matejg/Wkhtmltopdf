<?php

require_once __DIR__ . '/loader.php';



$tempDir = __DIR__;
$document = new Wkhtmltopdf\Document($tempDir);
$document->addFile('http://doc.nette.org/cs/presenters');
$document->save(__FILE__ . '.pdf');