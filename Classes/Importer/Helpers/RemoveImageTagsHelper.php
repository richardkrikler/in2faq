<?php
namespace In2code\In2faq\Importer\Helpers;

/**
 * Class RemoveImageTagsHelper
 * @package In2code\In2faq\Importer\Helpers
 */
class RemoveImageTagsHelper extends AbstractHelper
{

    /**
     * Allowed tags for RTE
     *
     * @var array
     */
    protected $allowedTags = [
        '<div>',
        '<br>',
        '<p>',
        '<ol>',
        '<ul>',
        '<li>',
        '<h1>',
        '<h2>',
        '<h3>',
        '<h4>',
        '<h5>',
        '<h6>',
        '<hr>',
        '<a>',
        '<link>',
        '<em>',
        '<i>',
        '<b>',
        '<strong>',
        '<span>',
        '<blockquote>',
        '<iframe>',
    ];

    /**
     * Try to remove not allowed tags (img e.g.) from a string
     *
     * @param string $value
     * @return string
     */
    public function parseValue($value)
    {
        return strip_tags($value, implode('', $this->allowedTags));
    }
}
