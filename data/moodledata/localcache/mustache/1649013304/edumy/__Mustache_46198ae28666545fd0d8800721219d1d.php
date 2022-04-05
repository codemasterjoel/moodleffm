<?php

class __Mustache_46198ae28666545fd0d8800721219d1d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $value = $this->resolveValue($context->find('custom_js'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }
}
