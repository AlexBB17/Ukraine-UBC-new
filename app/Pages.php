<?php

namespace App;

use Kalnoy\Nestedset\NodeTrait;

class Pages extends Main
{
    use NodeTrait;

    protected $table = 'pages';
    protected $_left = 'left_key';
    protected $_right = 'right_key';

    public function getPageAndChildren($href) {
        return $this->_query()
            ->where(['href' => $href])
            ->get()
            ->toArray();
    }

    public function makeMagic() {
        $parent = self::find(1);

        $this->attributes['title'] = 'BRITAIN MAIN PAGE';
        $this->attributes['href'] = 'great-britain';
        $this->appendToNode($parent)->save();
        //print_r($parent);
    }

    public function getLftName() {
        return $this->_left;
    }

    public function getRgtName() {
        return $this->_right;
    }
}
