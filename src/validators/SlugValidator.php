<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\validators;

use Craft;
use craft\helpers\ElementHelper;
use craft\helpers\StringHelper;
use yii\validators\Validator;

/**
 * Class SlugValidator.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class SlugValidator extends Validator
{
    // Properties
    // =========================================================================

    /**
     * @var string|null The source attribute that auto-generated slugs should be based on. Set to null to skip validation for blank slugs.
     */
    public $sourceAttribute = 'title';

    /**
     * @var bool|null Whether auto-generated slugs should be limited to ASCII characters. Defaults to the `limitAutoSlugsToAscii` config setting if left null.
     */
    public $limitAutoSlugsToAscii;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if ($this->sourceAttribute !== null) {
            $this->skipOnEmpty = false;
        }

        if ($this->limitAutoSlugsToAscii === null) {
            $this->limitAutoSlugsToAscii = Craft::$app->getConfig()->getGeneral()->limitAutoSlugsToAscii;
        }
    }

    /**
     * @inheritdoc
     */
    public function validateAttribute($model, $attribute)
    {
        $slug = $originalSlug = (string)$model->$attribute;

        if ($slug === '' && $this->sourceAttribute !== null) {
            // Create a slug for them, based on the element's title.
            // Replace periods, underscores, and hyphens with spaces so they get separated with the slugWordSeparator
            // to mimic the default JavaScript-based slug generation.
            $slug = str_replace(['.', '_', '-'], ' ', $model->{$this->sourceAttribute});

            if ($this->limitAutoSlugsToAscii) {
                $slug = StringHelper::toAscii($slug);
            }
        }

        // Apply normal slug rules
        $slug = ElementHelper::createSlug($slug);

        if ($slug !== '') {
            $model->$attribute = $slug;
        } else {
            if ($originalSlug !== '') {
                $this->addError($model, $attribute, Craft::t('yii', '{attribute} is invalid.'));
            } else {
                $this->addError($model, $attribute, Craft::t('yii', '{attribute} cannot be blank.'));
            }
        }
    }

    // Protected Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    protected function validateValue($value)
    {
        $value = (string)$value;

        if ($value === '') {
            return [Craft::t('yii', '{attribute} cannot be blank.'), []];
        }

        $slug = ElementHelper::createSlug($value);

        if ($slug !== $value) {
            return [Craft::t('yii', '{attribute} is invalid.'), []];
        }

        return null;
    }
}
