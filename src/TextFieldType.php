<?php namespace Streams\Addon\FieldType\Text;

use Streams\Core\Addon\FieldTypeAbstract;

class TextFieldType extends FieldTypeAbstract
{
    /**
     * The database column type this field type uses.
     *
     * @var string
     */
    public $columnType = 'string';

    /**
     * Field type version
     *
     * @var string
     */
    public $version = '1.1.0';

    /**
     * Field type author information.
     *
     * @var array
     */
    public $author = array(
        'name' => 'AI Web Systems, Inc.',
        'url'  => 'http://aiwebsystems.com/',
    );

    /**
     * Return a new presenter instance.
     * @param $resource
     * @return TextFieldTypePresenter|\Streams\Presenter\AddonPresenter|\Streams\Presenter\FieldTypePresenter|\Streams\Presenter\PresenterAbstract
     */
    public function newPresenter($resource)
    {
        return new TextFieldTypePresenter($resource);
    }
}
