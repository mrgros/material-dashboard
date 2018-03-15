<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\material;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Side bar for the material dashboard.
 *
 * @author Konstantin Prokhorov <salem.kde@gmail.com>
 */
class SideBar extends Widget
{
    /**
     * @var array the HTML attributes for the widget container tag. The following special options are recognized:
     *
     * - tag: string, defaults to "nav", the name of the container tag.
     *
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];
    /**
     * @var array the HTML attributes for the container tag. The following special options are recognized:
     *
     * - tag: string, defaults to "div", the name of the container tag.
     *
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $containerOptions = [];
    /**
     * @var string|bool the text of the brand or false if it's not used. Note that this is not HTML-encoded.
     * @see https://getbootstrap.com/docs/3.3/components/#navbar
     */
    public $brandLabel = false;
    /**
     * @var string|bool src of the brand image or false if it's not used. Note that this param will override `$this->brandLabel` param.
     * @see https://getbootstrap.com/docs/3.3/components/#navbar
     * @since 2.0.8
     */
    public $brandImage = false;
    /**
     * @var array|string|bool $url the URL for the brand's hyperlink tag. This parameter will be processed by [[\yii\helpers\Url::to()]]
     * and will be used for the "href" attribute of the brand link. Default value is false that means
     * [[\yii\web\Application::homeUrl]] will be used.
     * You may set it to `null` if you want to have no link at all.
     */
    public $brandUrl = false;
    /**
     * @var array the HTML attributes of the brand link.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $brandOptions = [];
    /**
     * @var string HTML content to be added in navbar-header div, for example, mobile search form.
     * @since 2.0.8
     */
    public $headerContent;
    /**
     * @var string text to show for screen readers for the button to toggle the navbar.
     */
    public $screenReaderToggleText = 'Toggle navigation';
    /**
     * @var bool whether the navbar content should be included in an inner div container which by default
     * adds left and right padding. Set this to false for a 100% width navbar.
     */
    public $renderInnerContainer = true;
    /**
     * @var array the HTML attributes of the inner container.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $innerContainerOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (empty($this->options['class'])) {
            Html::addCssClass($this->options, ['sidebar']);
        }

        $tag = ArrayHelper::remove($this->options, 'tag', 'div');
        echo Html::beginTag($tag, $this->options);

        if ($this->brandLabel !== false) {
            echo Html::beginTag('div', ['class' => 'logo']);
            echo Html::a($this->brandLabel, $this->brandUrl === false ? Yii::$app->homeUrl : $this->brandUrl, ['class' => 'simple-text']);
            echo Html::endTag('div');
        }

        if ($this->renderInnerContainer) {
            if (!isset($this->innerContainerOptions['class'])) {
                Html::addCssClass($this->innerContainerOptions, 'sidebar-wrapper');
            }
            echo Html::beginTag('div', $this->innerContainerOptions);
        }
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        if ($this->renderInnerContainer) {
            echo Html::endTag('div');
        }

        $tag = ArrayHelper::remove($this->options, 'tag', 'div');
        echo Html::endTag($tag);
    }
}
