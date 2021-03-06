<?php

namespace humhub\modules\admin\models\forms;

use Yii;

/**
 * @package humhub.modules_core.admin.forms
 * @since 0.10
 */
class OEmbedProviderForm extends \yii\base\Model
{

    public $prefix;
    public $endpoint;

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return [
            ['prefix', 'safe'],
            [['prefix', 'endpoint'], 'required'],
            ['endpoint', 'url'],
        ];
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return [
            'prefix' => Yii::t('AdminModule.settings', 'Url Prefix'),
            'endpoint' => Yii::t('AdminModule.settings', 'Endpoint Url'),
        ];
    }

}
