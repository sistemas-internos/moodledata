<?php

class __Mustache_8a05855c301a2504f178f3aaf62b96ee extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_moove/inc_start')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" class="container-fluid">
';
        $buffer .= $indent . '        <div id="page-header" class="frontpage-guest-header">
';
        $buffer .= $indent . '
';
        // 'sliderenabled' section
        $value = $context->find('sliderenabled');
        $buffer .= $this->sectionA85cff20c589daacbd5652cdd0f09653($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'sliderenabled' inverted section
        $value = $context->find('sliderenabled');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="row" id="loginbox">
';
            $buffer .= $indent . '                    <div class="col-sm-12 col-md-7 hidden-sm-down" id="intro">
';
            // 'bannerheading' section
            $value = $context->find('bannerheading');
            $buffer .= $this->sectionCc4cec293d2e21ac532c663c38a88380($context, $indent, $value);
            // 'bannercontent' section
            $value = $context->find('bannercontent');
            $buffer .= $this->sectionC35748476c3337185b26cebeff32701a($context, $indent, $value);
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                    <div class="col-12 col-sm-12 col-md-5 card d-none d-lg-block" id="boxForm">
';
            if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_login')) {
                $buffer .= $partial->renderInternal($context, $indent . '                        ');
            }
            $buffer .= $indent . '                    </div><!-- end of .card-body -->
';
            $buffer .= $indent . '                </div> <!-- end of #boxForm -->
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        // 'shoulddisplaymarketing' section
        $value = $context->find('shoulddisplaymarketing');
        $buffer .= $this->section0c4153b13aade124792b3e392ab4c365($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="container-fluid">
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_numbers')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_sponsorsclients')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/inc_end')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function sectionA7d00abee6c79ba350aaf13a681986e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>theme_moove/slideshow}}

                    {{^hasdrawertoggle}}
                        <div id="loginbox" class="d-none d-lg-block">
                            <div class="card" id="boxForm">
                                {{>theme_moove/frontpage_login}}
                            </div>
                        </div>
                    {{/hasdrawertoggle}}
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
                
                if ($partial = $this->mustache->loadPartial('theme_moove/slideshow')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '
';
                // 'hasdrawertoggle' inverted section
                $value = $context->find('hasdrawertoggle');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <div id="loginbox" class="d-none d-lg-block">
';
                    $buffer .= $indent . '                            <div class="card" id="boxForm">
';
                    if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_login')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                                ');
                    }
                    $buffer .= $indent . '                            </div>
';
                    $buffer .= $indent . '                        </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA85cff20c589daacbd5652cdd0f09653(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#sliderfrontpage}}
                    {{>theme_moove/slideshow}}

                    {{^hasdrawertoggle}}
                        <div id="loginbox" class="d-none d-lg-block">
                            <div class="card" id="boxForm">
                                {{>theme_moove/frontpage_login}}
                            </div>
                        </div>
                    {{/hasdrawertoggle}}
                {{/sliderfrontpage}}
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
                
                // 'sliderfrontpage' section
                $value = $context->find('sliderfrontpage');
                $buffer .= $this->sectionA7d00abee6c79ba350aaf13a681986e1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc4cec293d2e21ac532c663c38a88380(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h1>{{{ bannerheading }}}</h1>
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
                
                $buffer .= $indent . '                            <h1>';
                $value = $this->resolveValue($context->find('bannerheading'), $context);
                $buffer .= $value;
                $buffer .= '</h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC35748476c3337185b26cebeff32701a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h2>{{{ bannercontent }}}</h2>
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
                
                $buffer .= $indent . '                            <h2>';
                $value = $this->resolveValue($context->find('bannercontent'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE55b2546ed75820897b59c680bec7c2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{{ marketing1url }}}"> <img src="{{{ marketing1icon }}}" />  </a>';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('marketing1url'), $context);
                $buffer .= $value;
                $buffer .= '"> <img src="';
                $value = $this->resolveValue($context->find('marketing1icon'), $context);
                $buffer .= $value;
                $buffer .= '" />  </a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF13d67b5bd15fd14247ef48054652e4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{{ marketing2url }}}"> <img src="{{{ marketing2icon }}}" />  </a>';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('marketing2url'), $context);
                $buffer .= $value;
                $buffer .= '"> <img src="';
                $value = $this->resolveValue($context->find('marketing2icon'), $context);
                $buffer .= $value;
                $buffer .= '" />  </a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c000c9345a19109514221ea2b1e796f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{{ marketing3url }}}"> <img src="{{{ marketing3icon }}}" />  </a>';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('marketing3url'), $context);
                $buffer .= $value;
                $buffer .= '"> <img src="';
                $value = $this->resolveValue($context->find('marketing3icon'), $context);
                $buffer .= $value;
                $buffer .= '" />  </a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section677ffa50e4f0ac465ca6a80f6c07c2c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{{ marketing4url }}}"> <img src="{{{ marketing4icon }}}" />  </a>';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('marketing4url'), $context);
                $buffer .= $value;
                $buffer .= '"> <img src="';
                $value = $this->resolveValue($context->find('marketing4icon'), $context);
                $buffer .= $value;
                $buffer .= '" />  </a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c4153b13aade124792b3e392ab4c365(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="frontpage-marketing row">
             <div class="col-md-3">
		  <div class="card-body">
		   <div class="mkt_icon">
                    {{#marketing1url}}<a href="{{{ marketing1url }}}"> <img src="{{{ marketing1icon }}}" />  </a>{{/marketing1url}}
		 </div>
 		</div>
	       </div>

              <div class="col-md-3">
                <div class="card-body">
                  <div class="mkt_icon">
                    {{#marketing2url}}<a href="{{{ marketing2url }}}"> <img src="{{{ marketing2icon }}}" />  </a>{{/marketing2url}}

                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card-body">
                  <div class="mkt_icon">
                   {{#marketing3url}}<a href="{{{ marketing3url }}}"> <img src="{{{ marketing3icon }}}" />  </a>{{/marketing3url}}

		  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card-body">
                  <div class="mkt_icon">
                    {{#marketing4url}}<a href="{{{ marketing4url }}}"> <img src="{{{ marketing4icon }}}" />  </a>{{/marketing4url}}
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>
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
                
                $buffer .= $indent . '          <div class="frontpage-marketing row">
';
                $buffer .= $indent . '             <div class="col-md-3">
';
                $buffer .= $indent . '		  <div class="card-body">
';
                $buffer .= $indent . '		   <div class="mkt_icon">
';
                $buffer .= $indent . '                    ';
                // 'marketing1url' section
                $value = $context->find('marketing1url');
                $buffer .= $this->sectionE55b2546ed75820897b59c680bec7c2e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '		 </div>
';
                $buffer .= $indent . ' 		</div>
';
                $buffer .= $indent . '	       </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '              <div class="col-md-3">
';
                $buffer .= $indent . '                <div class="card-body">
';
                $buffer .= $indent . '                  <div class="mkt_icon">
';
                $buffer .= $indent . '                    ';
                // 'marketing2url' section
                $value = $context->find('marketing2url');
                $buffer .= $this->sectionF13d67b5bd15fd14247ef48054652e4e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '              <div class="col-md-3">
';
                $buffer .= $indent . '                <div class="card-body">
';
                $buffer .= $indent . '                  <div class="mkt_icon">
';
                $buffer .= $indent . '                   ';
                // 'marketing3url' section
                $value = $context->find('marketing3url');
                $buffer .= $this->section3c000c9345a19109514221ea2b1e796f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '		  </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '              <div class="col-md-3">
';
                $buffer .= $indent . '                <div class="card-body">
';
                $buffer .= $indent . '                  <div class="mkt_icon">
';
                $buffer .= $indent . '                    ';
                // 'marketing4url' section
                $value = $context->find('marketing4url');
                $buffer .= $this->section677ffa50e4f0ac465ca6a80f6c07c2c1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '              <div class="clearfix"></div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
