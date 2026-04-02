<?php

namespace Nece\Hound\Cloud\Storage;

interface IStorage
{
    /**
     * 文件、目录是否存在
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:35:57
     *
     * @param string $path
     * @return boolean
     */
    public function exists(string $path): bool;

    /**
     * 是否是目录
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:36:21
     *
     * @param string $path
     * @return boolean
     */
    public function isDir(string $path): bool;

    /**
     * 是否是文件
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:38:49
     *
     * @param string $path
     * @return boolean
     */
    public function isFile(string $path): bool;

    /**
     * 复制文件、目录
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:38:56
     *
     * @param string $from
     * @param string $to
     * @return boolean
     */
    public function copy(string $from, string $to): bool;

    /**
     * 移动文件、目录（重命名）
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:39:03
     *
     * @param string $from
     * @param string $to
     * @return boolean
     */
    public function move(string $from, string $to): bool;

    /**
     * 删除文件、目录
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:39:17
     *
     * @param string $path
     * @return boolean
     */
    public function delete(string $path): bool;

    /**
     * 创建目录
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:39:23
     *
     * @param string $path
     * @param integer $mode
     * @param boolean $recursive
     * @return boolean
     */
    public function mkdir(string $path, int $mode = 0755, bool $recursive = true): bool;

    /**
     * 删除目录
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:39:32
     *
     * @param string $path
     * @return boolean
     */
    public function rmdir(string $path): bool;

    /**
     * 目录列表
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:39:38
     *
     * @param string $path
     * @param integer $order
     * @return array
     */
    public function list(string $path, int $order = Consts::SCANDIR_SORT_ASCENDING): array;

    /**
     * 上传文件
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:39:51
     *
     * @param string $local_src
     * @param string $to
     * @return boolean
     */
    public function upload(string $local_src, string $to): bool;

    /**
     * 下载文件
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:40:02
     *
     * @param string $src
     * @param string $local_dst
     * @return boolean
     */
    public function download(string $src, string $local_dst): bool;

    /**
     * 获取文件对象
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:40:09
     *
     * @param string $path
     * @return IObject
     */
    public function file(string $path): IObject;

    /**
     * 获取URI
     *
     * @author nece001@163.com
     * @create 2026-03-29 19:00:13
     *
     * @param string $path
     * @return string
     */
    public function uri(string $path): string;

    /**
     * 获取URL
     *
     * @author nece001@163.com
     * @create 2026-03-29 19:24:04
     *
     * @param string $path
     * @return string
     */
    public function url(string $path): string;
}
