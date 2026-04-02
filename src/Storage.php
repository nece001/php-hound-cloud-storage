<?php

namespace Nece\Hound\Cloud\Storage;

abstract class Storage
{
    /**
     * 构建对象列表项
     *
     * @author nece001@163.com
     * @create 2026-04-02 10:21:06
     *
     * @param string $name 对象名称
     * @param integer $size 对象大小
     * @param boolean $is_dir 是否为目录
     * @param integer $ctime 创建时间戳
     * @param integer $mtime 修改时间戳
     * @param integer $atime 访问时间戳
     * @return array
     */
    protected function buildObjectListItem(string $name, int $size, bool $is_dir, int $ctime, int $mtime, int $atime): array
    {
        return array(
            'name' => $name,
            'size' => $size,
            'is_dir' => $is_dir,
            'ctime' => $ctime,
            'mtime' => $mtime,
            'atime' => $atime,
        );
    }
}
