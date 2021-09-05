<?php
declare(strict_types=1);

namespace XinMo\RPC\BO\Search;

/**
 * 书名搜索参数对象
 */
class BookNameSearchBO extends BookFieldSearchBO
{
    public function __construct($section_id = null, $keyword, $order = null, $offset = null, $limit = null)
    {
        parent::__construct($section_id, $keyword, $order, $offset, $limit);
    }
}
