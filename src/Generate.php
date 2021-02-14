<?php
namespace EneyeGenerateString;
class Generate
{
    public $length;
    public $characters;
    protected $generateString;

    public function generateString(int $length, string $characters): string
    {

        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $this->generateString .= $characters[$index];
        }
        return $this->generateString;
    }
}

