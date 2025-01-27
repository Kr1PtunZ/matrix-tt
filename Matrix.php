<?php

class Matrix
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function add(Matrix $other): Matrix
    {
        $this->validateDimensions($other);

        $result = [];
        for ($i = 0; $i < count($this->data); $i++) {
            for ($j = 0; $j < count($this->data[$i]); $j++) {
                $result[$i][$j] = $this->data[$i][$j] + $other->getData()[$i][$j];
            }
        }

        return new Matrix($result);
    }

    public function subtract(Matrix $other): Matrix
    {
        $this->validateDimensions($other);

        $result = [];
        for ($i = 0; $i < count($this->data); $i++) {
            for ($j = 0; $j < count($this->data[$i]); $j++) {
                $result[$i][$j] = $this->data[$i][$j] - $other->getData()[$i][$j];
            }
        }

        return new Matrix($result);
    }

    private function validateDimensions(Matrix $other): void
    {
        if (count($this->data) !== count($other->getData()) ||
            count($this->data[0]) !== count($other->getData()[0])) {
            throw new InvalidArgumentException('Матрицы должны иметь одинаковые размеры для этой операции.');
        }
    }

    public function __toString(): string
    {
        $output = '';
        foreach ($this->data as $row) {
            $output .= implode(' ', $row) . PHP_EOL;
        }
        return $output;
    }
}