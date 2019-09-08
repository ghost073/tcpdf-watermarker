<?php

namespace Youling073\PDFWatermark;

class Position
{
    private $name;
    private static $options = [
        'TopLeft', 'TopCenter', 'TopRight',
        'MiddleLeft', 'MiddleCenter', 'MiddleRight',
        'BottomLeft', 'BottomCenter', 'BottomRight',
    ];

    /**
     * @param $name
     *
     * @throws \Exception
     */
    public function __construct($name)
    {
        if (!array_key_exists($name, array_flip(self::$options))) {
            throw new \Exception('Unsupported position:' . $name);
        }

        $this->name = $name;
    }

    /**
     * @return string name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Position $position
     *
     * @return bool
     */
    public function equals(Position $position)
    {
        return ($this->name === $position->getName());
    }

    /**
     * @return string name
     */
    public function __toString()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @param $arguments
     *
     * @return Position
     */
    public static function __callStatic($name, $arguments)
    {
        return new self($name);
    }

}
