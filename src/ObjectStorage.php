<?php

namespace Nece\Hound\Cloud\Storage;

abstract class ObjectStorage extends Storage
{
    /**
     * 清理对象的key
     *
     * @author nece001@163.com
     * @create 2026-03-31 17:47:33
     *
     * @param string $path 对象路径键值
     * @return string
     */
    protected function keyPath($path)
    {
        return trim(ltrim(str_replace("\\", "/", $path), '/'));
    }

    /**
     * 清理对象的目录路径
     *
     * @author nece001@163.com
     * @create 2026-03-31 17:47:49
     *
     * @param string $path 对象路径键值
     * @return string
     */
    protected function dirPath($path)
    {
        return trim(trim(str_replace("\\", "/", $path), '/')) . '/';
    }
}
