<?php

class __Mustache_49883adae8369d55349352f3a3d4688c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_preloader')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  <div class="wrapper">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    <section class="our-log style3">
';
        $buffer .= $indent . '      <div class="container-fluid">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '          <div class="col-12 col-lg-6">
';
        // 'logo' section
        $value = $context->find('logo');
        $buffer .= $this->sectionDa3b464fd8358b5957a6966019a6a3b1($context, $indent, $value);
        $buffer .= $indent . '            <div class="login_form inner_page style3">
';
        $buffer .= $indent . '              ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '          <div class="col-12 col-lg-6"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </section>
';
        $buffer .= $indent . '  </div>
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_footer_essentials')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</html>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section594644b43f41eedfedc914de6473d7f6($context, $indent, $value);

        return $buffer;
    }

    private function sectionF4ae517f1e51da61f377c3a37c32b2b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="{{{logo_styles}}}" ';
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
                $value = $this->resolveValue($context->find('logo_styles'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf06384b4e759b6b2be9147d409ad885(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img class="logo2 img-fluid" src="{{{headerlogo2}}}{{!output.get_logo_url}}" alt="{{sitename}}" {{#logo_styles}} style="{{{logo_styles}}}" {{/logo_styles}}>';
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
                
                $buffer .= '<img class="logo2 img-fluid" src="';
                $value = $this->resolveValue($context->find('headerlogo2'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'logo_styles' section
                $value = $context->find('logo_styles');
                $buffer .= $this->sectionF4ae517f1e51da61f377c3a37c32b2b7($context, $indent, $value);
                $buffer .= '>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section675f23d2691a1d78291e2a27c079194a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span>{{{ sitename }}}</span>';
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
                $buffer .= $value;
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa3b464fd8358b5957a6966019a6a3b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <a href="{{{ ccnLogoUrl }}}" class="login_page_logo text-center">
                {{#logo_image}}<img class="logo2 img-fluid" src="{{{headerlogo2}}}{{!output.get_logo_url}}" alt="{{sitename}}" {{#logo_styles}} style="{{{logo_styles}}}" {{/logo_styles}}>{{/logo_image}}
                {{#logotype}}<span>{{{ sitename }}}</span>{{/logotype}}
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
                
                $buffer .= $indent . '              <a href="';
                $value = $this->resolveValue($context->find('ccnLogoUrl'), $context);
                $buffer .= $value;
                $buffer .= '" class="login_page_logo text-center">
';
                $buffer .= $indent . '                ';
                // 'logo_image' section
                $value = $context->find('logo_image');
                $buffer .= $this->sectionDf06384b4e759b6b2be9147d409ad885($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                // 'logotype' section
                $value = $context->find('logotype');
                $buffer .= $this->section675f23d2691a1d78291e2a27c079194a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '              </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section594644b43f41eedfedc914de6473d7f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  M.util.js_pending(\'theme_boost/loader\');
  require([\'theme_boost/loader\'], function() {
  M.util.js_complete(\'theme_boost/loader\');
  });
  M.util.js_pending(\'theme_boost/drawer\');
  require([\'theme_boost/drawer\'], function(mod) {
  mod.init();
  M.util.js_complete(\'theme_boost/drawer\');
  });
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
                
                $buffer .= $indent . '  M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . '  require([\'theme_boost/loader\'], function() {
';
                $buffer .= $indent . '  M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '  M.util.js_pending(\'theme_boost/drawer\');
';
                $buffer .= $indent . '  require([\'theme_boost/drawer\'], function(mod) {
';
                $buffer .= $indent . '  mod.init();
';
                $buffer .= $indent . '  M.util.js_complete(\'theme_boost/drawer\');
';
                $buffer .= $indent . '  });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
