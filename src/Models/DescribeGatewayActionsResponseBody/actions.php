<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayActionsResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayActionsResponseBody\actions\action;
use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @var action[]
     */
    public $action;
    protected $_name = [
        'action' => 'Action',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = [];
            if (null !== $this->action && \is_array($this->action)) {
                $n = 0;
                foreach ($this->action as $item) {
                    $res['Action'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            if (!empty($map['Action'])) {
                $model->action = [];
                $n             = 0;
                foreach ($map['Action'] as $item) {
                    $model->action[$n++] = null !== $item ? action::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
