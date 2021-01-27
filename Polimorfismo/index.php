<?php

abstract class Printer
{
    public function toPrint()
    {
        return "Printing data...";
    }
}

class HdPrinter extends Printer
{
    public function toPrint()
    {
        return "HP Printign data...";
    }
}

class EpsonPrinter extends Printer
{
    public function toPrint()
    {
        return "Epson printing data...";
    }
}

$printer = new HdPrinter();
print $printer->toPrint();