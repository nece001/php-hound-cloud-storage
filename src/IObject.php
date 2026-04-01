<?php

namespace Nece\Hound\Cloud\Storage;

interface IObject
{
    /**
     * 获取文件访问时间
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:40:27
     *
     * @return integer
     */
    public function getAccessTime(): int;

    /**
     * 获取文件创建时间
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:40:33
     *
     * @return integer
     */
    public function getCreateTime(): int;

    /**
     * 获取文件修改时间
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:40:39
     *
     * @return integer
     */
    public function getModifyTime(): int;

    /**
     * 获取文件基础名，可以指定去掉的后缀
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:40:46
     *
     * @param string $suffix 要去掉的文件后缀
     * @return string
     */
    public function getBasename(string $suffix = ""): string;

    /**
     * 获取文件扩展名
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:40:52
     *
     * @return string
     */
    public function getExtension(): string;

    /**
     * 获取文件名，包含基础名和扩展名
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:40:58
     *
     * @return string
     */
    public function getFilename(): string;

    /**
     * 获取文件路径，不包含开头的斜杠
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:42:22
     *
     * @return string
     */
    public function getPath(): string;

    /**
     * 获取文件完整路径
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:42:22
     *
     * @return string
     */
    public function getRealname(): string;

    /**
     * 获取文件的key（相对路径），不包含开头的斜杠
     *
     * @author nece001@163.com
     * @create 2026-03-30 12:03:45
     *
     * @return string
     */
    public function getKey(): string;

    /**
     * 获取文件大小
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:43:30
     *
     * @return integer
     */
    public function getSize(): int;

    /**
     * 获取文件MIME类型
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:44:53
     *
     * @return string|null
     */
    public function getMimeType(): string;

    /**
     * 判断文件是否为目录
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:45:03
     *
     * @return boolean
     */
    public function isDir(): bool;

    /**
     * 判断文件是否为普通文件
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:45:08
     *
     * @return boolean
     */
    public function isFile(): bool;

    /**
     * 获取文件内容
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:45:16
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * 写入文件内容
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:45:23
     *
     * @param string $content 要写入的内容
     * @param boolean $append 是否追加写入
     * @return boolean
     */
    public function putContent(string $content, bool $append = false): bool;

    /**
     * 删除文件
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:45:33
     *
     * @return boolean
     */
    public function delete(): bool;

    /**
     * 获取文件相对路径，不包含开头的斜杠
     *
     * @author nece001@163.com
     * @create 2026-03-29 18:45:40
     *
     * @return string
     */
    public function __toString(): string;
}
