<?php

class __Mustache_56adc80c0d28a4e130d32950c0dbdd5f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="top-footer">
';
        $buffer .= $indent . '  <div class="container-fluid">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-md-7 contact">
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '  	       </div>
';
        $buffer .= $indent . '        <div class="col-md-5 social">
';
        $buffer .= $indent . '          <ul>
';
        // 'facebook' section
        $value = $context->find('facebook');
        $buffer .= $this->section678c325511a34c75dfcc0db0d7fc8b50($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'twitter' section
        $value = $context->find('twitter');
        $buffer .= $this->sectionAb129d62d91a1a88edb66e8478434949($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'googleplus' section
        $value = $context->find('googleplus');
        $buffer .= $this->section67cbd9e0f6da12f83b52d86eaeec0e25($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'linkedin' section
        $value = $context->find('linkedin');
        $buffer .= $this->section0297610ed27d2f8fe96691f9de994fb8($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'youtube' section
        $value = $context->find('youtube');
        $buffer .= $this->section028483acd22251ef4132948c54a4ac14($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'instagram' section
        $value = $context->find('instagram');
        $buffer .= $this->sectionCceb978585d8ec3122b499fb040e7659($context, $indent, $value);
        $buffer .= $indent . '          </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'disablebottomfooter' inverted section
        $value = $context->find('disablebottomfooter');
        if (empty($value)) {
            
            $buffer .= $indent . '  <footer id="page-footer" class="p-y-1">
';
            $buffer .= $indent . '      <div class="container-fluid">
';
            $buffer .= $indent . '          <div id="course-footer">';
            $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
            $buffer .= $value;
            $buffer .= '</div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '          <div class="madewithmoodle">
';
            $buffer .= $indent . '              <p>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section35f635c8ba97bc48efcfa9ed9dd99cf3($context, $indent, $value);
            $buffer .= '</p>
';
            $buffer .= $indent . '              <a href="https://moodle.org"><img src="';
            $value = $this->resolveValue($context->findDot('output.get_pix_image_url_base'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '/moodle-logo-white.png" alt="Moodle logo"></a>
';
            $buffer .= $indent . '          </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '          <div class="madeby">
';
            $buffer .= $indent . '              <p>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section56e3b38ca8d3097861df300611a406de($context, $indent, $value);
            $buffer .= ' <i class="text-danger fa fa-heart"></i> ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section7a1b67c3b84451cafdd6fc65fb7ab03a($context, $indent, $value);
            $buffer .= ' <a href="http://conecti.me">conecti.me</a></p>
';
            $buffer .= $indent . '          </div>
';
            $buffer .= $indent . '      </div>
';
            $buffer .= $indent . '  </footer>
';
        }
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }

    private function section678c325511a34c75dfcc0db0d7fc8b50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{facebook}}}" target="_blank" class="facebook">
                    <i class="icon-social-facebook"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('facebook'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="facebook">
';
                $buffer .= $indent . '                    <i class="icon-social-facebook"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb129d62d91a1a88edb66e8478434949(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{twitter}}}" target="_blank" class="twitter">
                    <i class="icon-social-twitter"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('twitter'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="twitter">
';
                $buffer .= $indent . '                    <i class="icon-social-twitter"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67cbd9e0f6da12f83b52d86eaeec0e25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{googleplus}}}" target="_blank" class="googleplus">
                    <i class="icon-social-gplus"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('googleplus'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="googleplus">
';
                $buffer .= $indent . '                    <i class="icon-social-gplus"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0297610ed27d2f8fe96691f9de994fb8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{linkedin}}}" target="_blank" class="linkedin">
                    <i class="icon-social-linkedin"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('linkedin'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="linkedin">
';
                $buffer .= $indent . '                    <i class="icon-social-linkedin"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section028483acd22251ef4132948c54a4ac14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{youtube}}}" target="_blank" class="youtube">
                    <i class="icon-social-youtube"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('youtube'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="youtube">
';
                $buffer .= $indent . '                    <i class="icon-social-youtube"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCceb978585d8ec3122b499fb040e7659(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{instagram}}}" target="_blank" class="instagram">
                    <i class="icon-social-instagram"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('instagram'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="instagram">
';
                $buffer .= $indent . '                    <i class="icon-social-instagram"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35f635c8ba97bc48efcfa9ed9dd99cf3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'madewitmoodle, theme_moove';
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
                
                $buffer .= 'madewitmoodle, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56e3b38ca8d3097861df300611a406de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'madeby, theme_moove';
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
                
                $buffer .= 'madeby, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a1b67c3b84451cafdd6fc65fb7ab03a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'by, theme_moove';
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
                
                $buffer .= 'by, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
