<?php

class __Mustache_d48d76be3219fbcfbd09952d950fa162 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<section class="footer_one home8 pb0">
';
        $buffer .= $indent . '  <div class="container">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '      <div class="col-lg-6 offset-lg-3">
';
        // 'logo_footer' section
        $value = $context->find('logo_footer');
        $buffer .= $this->section905e3ff49d87c904b291cecc58bc7835($context, $indent, $value);
        $buffer .= $indent . '        <div class="footer_contact_widget home8 text-center">
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->find('footer_col_1_body'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="footer_social_widget home8 mt35 mb80">
';
        $buffer .= $indent . '          <ul>
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_social_icons')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '          </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <div class="container">
';
        $buffer .= $indent . '    <div class="row">
';
        // 'cocoon_copyright' section
        $value = $context->find('cocoon_copyright');
        $buffer .= $this->section8ea60c53eda5dc72a47e3e0e7f434fbb($context, $indent, $value);
        // 'footer_menu' section
        $value = $context->find('footer_menu');
        $buffer .= $this->section7398a8ba5ebc808ed072990720c66cdd($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</section>
';

        return $buffer;
    }

    private function sectionEbcb475427c7d7727fb30e127940463d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="{{{logo_styles_footer}}}" ';
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
                
                $buffer .= ' style="';
                $value = $this->resolveValue($context->find('logo_styles_footer'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a19a470f89eec2fc8a01d959dcefb49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>';
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
                
                $buffer .= '<img class="img-fluid" src="';
                $value = $this->resolveValue($context->find('footerlogo1'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'logo_styles_footer' section
                $value = $context->find('logo_styles_footer');
                $buffer .= $this->sectionEbcb475427c7d7727fb30e127940463d($context, $indent, $value);
                $buffer .= '>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section254d7600dae2d4e2af67ba2cfb1315f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span>{{ sitename }}</span>';
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
                
                $buffer .= '<span>';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section905e3ff49d87c904b291cecc58bc7835(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="logo-widget home8 mb60">
            {{#logo_image_footer}}<img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>{{/logo_image_footer}}
            {{#logotype_footer}}<span>{{ sitename }}</span>{{/logotype_footer}}
          </div>
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
                
                $buffer .= $indent . '          <div class="logo-widget home8 mb60">
';
                $buffer .= $indent . '            ';
                // 'logo_image_footer' section
                $value = $context->find('logo_image_footer');
                $buffer .= $this->section4a19a470f89eec2fc8a01d959dcefb49($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                // 'logotype_footer' section
                $value = $context->find('logotype_footer');
                $buffer .= $this->section254d7600dae2d4e2af67ba2cfb1315f4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ea60c53eda5dc72a47e3e0e7f434fbb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-lg-6 col-xl-6">
          <div class="copyright-widget text-center mt25">
            <p>{{{ cocoon_copyright }}}</p>
            <div class="tool_usertours-resettourcontainer"></div>
          </div>
        </div>
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
                
                $buffer .= $indent . '        <div class="col-lg-6 col-xl-6">
';
                $buffer .= $indent . '          <div class="copyright-widget text-center mt25">
';
                $buffer .= $indent . '            <p>';
                $value = $this->resolveValue($context->find('cocoon_copyright'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '            <div class="tool_usertours-resettourcontainer"></div>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7398a8ba5ebc808ed072990720c66cdd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-lg-6 col-xl-6 pb25 pt25 text-right tac-smd">
          <div class="footer_menu_widget home3">
            {{{footer_menu}}}
          </div>
        </div>
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
                
                $buffer .= $indent . '        <div class="col-lg-6 col-xl-6 pb25 pt25 text-right tac-smd">
';
                $buffer .= $indent . '          <div class="footer_menu_widget home3">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('footer_menu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
