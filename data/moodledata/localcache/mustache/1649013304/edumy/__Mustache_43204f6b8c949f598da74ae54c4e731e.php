<?php

class __Mustache_43204f6b8c949f598da74ae54c4e731e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li class="list-inline-item">
';
        $buffer .= $indent . '    <div class="dropdown bootstrap-select show-tick dropup w-auto">
';
        $buffer .= $indent . '        <button id="sortingdropdown" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3a112d2e610d065e3998597fb898d52d($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <span class="d-sm-inline-block" data-active-item-text>
';
        $buffer .= $indent . '                ';
        // 'title' section
        $value = $context->find('title');
        $buffer .= $this->sectionBc40470c449060467eec912448315828($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        // 'lastaccessed' section
        $value = $context->find('lastaccessed');
        $buffer .= $this->sectionF3f3aa74c8b15b6cc5be300e2ed466b7($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <ul class="dropdown-menu" data-show-active-item aria-labelledby="sortingdropdown">
';
        $buffer .= $indent . '            <li>
';
        $buffer .= $indent . '                <a class="dropdown-item ';
        // 'title' section
        $value = $context->find('title');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '" href="#" data-filter="sort" data-pref="title" data-value="fullname" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9f2d8f6148f8584bb71ba4e618aa0cae($context, $indent, $value);
        $buffer .= '" aria-controls="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section709d33c7e28f926cd84f2f03f3e646fd($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '            <li>
';
        $buffer .= $indent . '                <a class="dropdown-item ';
        // 'lastaccessed' section
        $value = $context->find('lastaccessed');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '" href="#" data-filter="sort" data-pref="lastaccessed" data-value="ul.timeaccess desc" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8e9324585ac0a9296bbaa0b09356550e($context, $indent, $value);
        $buffer .= '" aria-controls="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section1a697b98751f89fac729286365bfa495($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function section3a112d2e610d065e3998597fb898d52d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:sortingdropdown, block_myoverview ';
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
                
                $buffer .= ' aria:sortingdropdown, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section709d33c7e28f926cd84f2f03f3e646fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' title, block_myoverview ';
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
                
                $buffer .= ' title, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc40470c449060467eec912448315828(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} title, block_myoverview {{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section709d33c7e28f926cd84f2f03f3e646fd($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a697b98751f89fac729286365bfa495(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastaccessed, block_myoverview ';
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
                
                $buffer .= ' lastaccessed, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3f3aa74c8b15b6cc5be300e2ed466b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} lastaccessed, block_myoverview {{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section1a697b98751f89fac729286365bfa495($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
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
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f2d8f6148f8584bb71ba4e618aa0cae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:title, block_myoverview ';
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
                
                $buffer .= ' aria:title, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e9324585ac0a9296bbaa0b09356550e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:lastaccessed, block_myoverview ';
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
                
                $buffer .= ' aria:lastaccessed, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
