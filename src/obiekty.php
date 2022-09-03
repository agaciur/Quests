<?php

class Telewizor
{
    public const MARKA = 'PHILIPS';
    public const MODEL = 'xyz123';

    private string $name;
    private bool $isHDMIConnected;

    public function __construct(bool $isHDMIConnected, string $name)
    {
        echo 'Telewizor ' . $name . ' został utworzony' . PHP_EOL;

        $this->isHDMIConnected = $isHDMIConnected;
        $this->name = $name;
    }

    public function __destruct()
    {
        $this->wylacz();
        echo 'Telewizor ' . $this->name . ' został unicestwiony' . PHP_EOL;
    }

    public function wlacz()
    {
        echo 'Włączyłem się - ' . $this->name . PHP_EOL;
        $this->sprawdzCzyPodlaczonyKabelHDMI();
    }

    public function wylacz()
    {
        echo 'Wyłączyłem się - ' . $this->name . PHP_EOL;
    }

    private function sprawdzCzyPodlaczonyKabelHDMI()
    {
        if ($this->isHDMIConnected) {
            $this->changeSource('HDMI');
        }
    }

    private function changeSource(string $source)
    {
        echo $this->name . ': Źródło przełączone na ' . $source . PHP_EOL;
    }
}

$tv = new Telewizor(true, 'TV w pokoju');
$tv->wlacz();

$tv1 = new Telewizor(true, 'TV w kuchni');
$tv2 = new Telewizor(true, 'TV w sypialni');
$tv3 = new Telewizor(true, 'TV w łazience');
