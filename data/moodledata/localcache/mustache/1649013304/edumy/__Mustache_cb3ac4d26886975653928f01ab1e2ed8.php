<?php

class __Mustache_cb3ac4d26886975653928f01ab1e2ed8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '  <li class="user_setting ccn-settings-nav ccn-lang-menu">
';
        $buffer .= $indent . '    <div class="dropdown">
';
        $buffer .= $indent . '      <a class="lang_icon" href="#" data-toggle="dropdown"><img class="lang_icon" src="';
        $value = $this->resolveValue($context->find('current_icon'), $context);
        $buffer .= $value;
        $buffer .= '" /></a>
';
        $buffer .= $indent . '      <div class="dropdown-menu notification_dropdown_content">
';
        $buffer .= $indent . '        <div class="so_heading">
';
        $buffer .= $indent . '          <p>';
        $value = $this->resolveValue($context->find('strlang'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="user_setting_content">
';
        $buffer .= $indent . '          <div class="so_content" data-simplebar="init">
';
        $buffer .= $indent . '            <nav class="list-group">
';
        // 'langs' section
        $value = $context->find('langs');
        $buffer .= $this->section5f0eef78c9f28fb8918d9a1d3a079ac7($context, $indent, $value);
        $buffer .= $indent . '            </nav>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </li>
';

        return $buffer;
    }

    private function section5f0eef78c9f28fb8918d9a1d3a079ac7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{url}}">
                  <div class="lang_icon_flag"><img src="{{icon}}" /></div>{{name}}
                </a>
              ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                  <div class="lang_icon_flag"><img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" /></div>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
