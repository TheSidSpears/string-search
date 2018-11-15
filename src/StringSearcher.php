<?php


class StringSearcher
{
    public function findStingAndPosition(string $filePath, string $needle): ?array
    {
        $file = file($filePath);

        foreach ($file as $stringNum => $string) {
            if ($foundedPosition = mb_strpos($string, $needle)) {
                return [
                    'string' => ++$stringNum,
                    'position' => $foundedPosition
                ];
            }
        }
        return null;
    }
}