<?php
/**
 * Copyright (c) 2019 Matthew Poulter. All rights reserved.
 */

namespace SimpleSquid\Nova\Fields\Link;

use Closure;
use Laravel\Nova\Fields\Field;

class Link extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'link-field';

    /**
     * @param  bool  $boolean
     * @return $this
     */
    public function blank($boolean = true)
    {
        $this->withMeta([
                            'blank' => $boolean ? '_blank' : '_self',
                        ]);

        return $this;
    }

    /**
     * @param  array|Closure  $additionalClasses
     * @return $this
     */
    public function classes($additionalClasses)
    {
        $this->withMeta([
                            'classes' => is_callable($additionalClasses) ? call_user_func($additionalClasses) : $additionalClasses
                        ]);

        return $this;
    }

    /**
     * @param  string  $icon
     * @return $this
     */
    public function icon($icon = 'external-link')
    {
        $this->withMeta([
                            'icon'      => $icon,
                            'textAlign' => 'center'
                        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function meta()
    {
        return array_merge(['href' => $this->value], $this->meta);
    }

    /**
     * @param $text
     * @return $this
     */
    public function text($text)
    {
        $this->withMeta([
                            'text' => is_callable($text) ? call_user_func($text) : $text,
                        ]);

        return $this;
    }

    /**
     * @param  string|Closure  $url
     * @return $this
     */
    public function url($url)
    {
        $this->withMeta([
                            'href' => is_callable($url) ? call_user_func($url) : $url,
                        ]);

        return $this;
    }
}
