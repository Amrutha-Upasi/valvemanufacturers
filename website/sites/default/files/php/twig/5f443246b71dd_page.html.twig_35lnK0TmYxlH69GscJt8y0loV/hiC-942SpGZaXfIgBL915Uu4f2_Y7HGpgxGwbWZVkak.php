<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/ultra_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_648668e9e80a521371e3f25710c53e7acb82a1f916155ff95483631588d6f563 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 70, "for" => 95];
        $filters = ["escape" => 71, "raw" => 96, "date" => 493];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "
<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 70
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 71
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 73
        echo "      </div>
      <!-- End: Header -->

      ";
        // line 76
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 77
            echo "        <div class=\"col-md-9\">
          ";
            // line 78
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
                // line 79
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "
          ";
            }
            // line 81
            echo "        </div>
      ";
        }
        // line 83
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 91
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 92
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 96
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 102
        echo "

<!-- Start: Top widget -->
";
        // line 105
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
            // line 106
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">

      ";
            // line 109
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])) {
                // line 110
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 111
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 114
            echo "
        <div class=\"row topwidget-list clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 118
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                // line 119
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 120
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 124
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                // line 125
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 126
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 130
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                // line 131
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 132
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 139
        echo "<!--End: widget -->

    
<!--Start: Highlighted -->
";
        // line 143
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 144
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 146
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 150
        echo "<!--End: Highlighted -->


<!--Start: Top Message -->
";
        // line 154
        if ($this->getAttribute(($context["page"] ?? null), "topmessage", [])) {
            // line 155
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 157
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topmessage", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 161
        echo "<!--End: widget -->


<!--Start: Title -->
";
        // line 165
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 166
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 169
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 174
        echo "<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->
      ";
        // line 181
        if ( !($context["is_front"] ?? null)) {
            // line 182
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 183
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 186
        echo "      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 191
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 192
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 194
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 198
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 201
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 202
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 204
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 208
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 211
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 212
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 214
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 218
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>
<!-- End: Main content -->


<!-- Start: Features -->
";
        // line 229
        if ((($this->getAttribute(($context["page"] ?? null), "features_first", []) || $this->getAttribute(($context["page"] ?? null), "features_second", [])) || $this->getAttribute(($context["page"] ?? null), "features_third", []))) {
            // line 230
            echo "  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 233
            if ($this->getAttribute(($context["page"] ?? null), "features_title", [])) {
                // line 234
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 235
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 238
            echo "
      <div class=\"row\">

        ";
            // line 241
            if ($this->getAttribute(($context["page"] ?? null), "features_first", [])) {
                // line 242
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 243
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 246
            echo "        
        ";
            // line 247
            if ($this->getAttribute(($context["page"] ?? null), "features_second", [])) {
                // line 248
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 249
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 252
            echo "
        ";
            // line 253
            if ($this->getAttribute(($context["page"] ?? null), "features_third", [])) {
                // line 254
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 255
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 258
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 263
        echo "<!--End: Features -->


<!-- Start: Clients -->
";
        // line 267
        if ($this->getAttribute(($context["page"] ?? null), "clients", [])) {
            echo " 
  <div class=\"clients\" id=\"clients\">

    ";
            // line 270
            if ($this->getAttribute(($context["page"] ?? null), "clients_title", [])) {
                // line 271
                echo "      <div class=\"custom-block-title\" >
        ";
                // line 272
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients_title", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 275
            echo "
    <div class=\"container\">
      ";
            // line 277
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 281
        echo "<!--End: Clients -->


<!-- Start: Updates widgets -->
";
        // line 285
        if ((($this->getAttribute(($context["page"] ?? null), "updates_first", []) || $this->getAttribute(($context["page"] ?? null), "updates_second", [])) || $this->getAttribute(($context["page"] ?? null), "updates_third", []))) {
            // line 286
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 290
            if ($this->getAttribute(($context["page"] ?? null), "updates_title", [])) {
                // line 291
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 292
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 295
            echo "
      <div class=\"row\">
        
        ";
            // line 298
            if ($this->getAttribute(($context["page"] ?? null), "updates_first", [])) {
                // line 299
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 300
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 303
            echo "        
        ";
            // line 304
            if ($this->getAttribute(($context["page"] ?? null), "updates_second", [])) {
                // line 305
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 306
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 309
            echo "        
        ";
            // line 310
            if ($this->getAttribute(($context["page"] ?? null), "updates_third", [])) {
                // line 311
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 312
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 315
            echo "
        ";
            // line 316
            if ($this->getAttribute(($context["page"] ?? null), "updates_forth", [])) {
                // line 317
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 318
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 321
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 327
        echo "<!--End: widgets -->


<!-- Start: Services widgets -->
";
        // line 331
        if (((($this->getAttribute(($context["page"] ?? null), "services_first", []) || $this->getAttribute(($context["page"] ?? null), "services_second", [])) || $this->getAttribute(($context["page"] ?? null), "services_third", [])) || $this->getAttribute(($context["page"] ?? null), "services_forth", []))) {
            // line 332
            echo "
  <div class=\"services\" id=\"services\">    
    <div class=\"container\">

      ";
            // line 336
            if ($this->getAttribute(($context["page"] ?? null), "services_title", [])) {
                // line 337
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 338
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 341
            echo "
      <div class=\"row team-list\">
      
        ";
            // line 344
            if ($this->getAttribute(($context["page"] ?? null), "services_first", [])) {
                // line 345
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 346
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 349
            echo "        
        ";
            // line 350
            if ($this->getAttribute(($context["page"] ?? null), "services_second", [])) {
                // line 351
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 352
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 355
            echo "             
        ";
            // line 356
            if ($this->getAttribute(($context["page"] ?? null), "services_third", [])) {
                // line 357
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 358
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 361
            echo "        
        ";
            // line 362
            if ($this->getAttribute(($context["page"] ?? null), "services_forth", [])) {
                // line 363
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 364
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 367
            echo "        
      </div>
    </div>
  </div>

";
        }
        // line 373
        echo "<!--End: widgets -->


<!-- Start: Bottom widgets -->
";
        // line 377
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
            // line 378
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 382
            if ($this->getAttribute(($context["page"] ?? null), "bottom_title", [])) {
                // line 383
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 384
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 387
            echo "
      <div class=\"row\">
            
        ";
            // line 390
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 391
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 392
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 395
            echo "        
        ";
            // line 396
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 397
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 398
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 401
            echo "
        ";
            // line 402
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 403
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 404
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 407
            echo "        
        ";
            // line 408
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 409
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 410
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 413
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 419
        echo "<!--End: widgets -->


<!-- Start: Footer widgets -->
";
        // line 423
        if (((((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "search", [])) || ($context["show_social_icon"] ?? null)) || ($context["show_credit_link"] ?? null))) {
            // line 424
            echo "  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 427
            if ($this->getAttribute(($context["page"] ?? null), "footer_title", [])) {
                // line 428
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 429
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 432
            echo "
      <div class=\"row\">

        ";
            // line 435
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 436
                echo "          <div class=\"col-sm\">
            ";
                // line 437
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 440
            echo "
        ";
            // line 441
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 442
                echo "          <div class=\"col-sm\">
            ";
                // line 443
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 446
            echo "        
        ";
            // line 447
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 448
                echo "          <div class=\"col-sm\">
            ";
                // line 449
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 452
            echo "
        ";
            // line 453
            if ((($this->getAttribute(($context["page"] ?? null), "search", []) || ($context["show_social_icon"] ?? null)) || ($context["show_credit_link"] ?? null))) {
                // line 454
                echo "          <div class=\"col-sm\">

            ";
                // line 456
                if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
                    // line 457
                    echo "              ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
                    echo "
            ";
                }
                // line 459
                echo "            
            ";
                // line 460
                if (($context["show_social_icon"] ?? null)) {
                    // line 461
                    echo "              <h2>Follow us</h2>
              <p class=\"social-media\">
                ";
                    // line 463
                    if (($context["facebook_url"] ?? null)) {
                        // line 464
                        echo "                  <a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                        echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
                ";
                    }
                    // line 466
                    echo "                ";
                    if (($context["twitter_url"] ?? null)) {
                        // line 467
                        echo "                  <a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                        echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
                ";
                    }
                    // line 469
                    echo "                ";
                    if (($context["linkedin_url"] ?? null)) {
                        // line 470
                        echo "                  <a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                        echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                ";
                    }
                    // line 472
                    echo "                ";
                    if (($context["instagram_url"] ?? null)) {
                        // line 473
                        echo "                  <a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
                        echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
                ";
                    }
                    // line 475
                    echo "                ";
                    if (($context["rss_url"] ?? null)) {
                        // line 476
                        echo "                  <a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                        echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                ";
                    }
                    // line 478
                    echo "              </p>
            ";
                }
                // line 480
                echo "          </div>
        ";
            }
            // line 482
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 487
        echo "<!--End: widgets -->


<!-- Start: Copyright -->
<div class=\"copyright\">
    <div class=\"container\">
      <span>Copyright © ";
        // line 493
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
      ";
        // line 494
        if (($context["show_credit_link"] ?? null)) {
            // line 495
            echo "        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 497
        echo "  </div>
</div>
<!-- End: Copyright -->


";
    }

    public function getTemplateName()
    {
        return "themes/ultra_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  944 => 497,  940 => 495,  938 => 494,  934 => 493,  926 => 487,  919 => 482,  915 => 480,  911 => 478,  905 => 476,  902 => 475,  896 => 473,  893 => 472,  887 => 470,  884 => 469,  878 => 467,  875 => 466,  869 => 464,  867 => 463,  863 => 461,  861 => 460,  858 => 459,  852 => 457,  850 => 456,  846 => 454,  844 => 453,  841 => 452,  835 => 449,  832 => 448,  830 => 447,  827 => 446,  821 => 443,  818 => 442,  816 => 441,  813 => 440,  807 => 437,  804 => 436,  802 => 435,  797 => 432,  791 => 429,  788 => 428,  786 => 427,  781 => 424,  779 => 423,  773 => 419,  765 => 413,  759 => 410,  754 => 409,  752 => 408,  749 => 407,  743 => 404,  738 => 403,  736 => 402,  733 => 401,  727 => 398,  722 => 397,  720 => 396,  717 => 395,  711 => 392,  706 => 391,  704 => 390,  699 => 387,  693 => 384,  690 => 383,  688 => 382,  682 => 378,  680 => 377,  674 => 373,  666 => 367,  660 => 364,  655 => 363,  653 => 362,  650 => 361,  644 => 358,  639 => 357,  637 => 356,  634 => 355,  628 => 352,  623 => 351,  621 => 350,  618 => 349,  612 => 346,  607 => 345,  605 => 344,  600 => 341,  594 => 338,  591 => 337,  589 => 336,  583 => 332,  581 => 331,  575 => 327,  567 => 321,  561 => 318,  556 => 317,  554 => 316,  551 => 315,  545 => 312,  540 => 311,  538 => 310,  535 => 309,  529 => 306,  524 => 305,  522 => 304,  519 => 303,  513 => 300,  508 => 299,  506 => 298,  501 => 295,  495 => 292,  492 => 291,  490 => 290,  484 => 286,  482 => 285,  476 => 281,  469 => 277,  465 => 275,  459 => 272,  456 => 271,  454 => 270,  448 => 267,  442 => 263,  435 => 258,  429 => 255,  424 => 254,  422 => 253,  419 => 252,  413 => 249,  408 => 248,  406 => 247,  403 => 246,  397 => 243,  392 => 242,  390 => 241,  385 => 238,  379 => 235,  376 => 234,  374 => 233,  369 => 230,  367 => 229,  354 => 218,  347 => 214,  341 => 212,  339 => 211,  334 => 208,  327 => 204,  321 => 202,  319 => 201,  314 => 198,  307 => 194,  301 => 192,  299 => 191,  292 => 186,  286 => 183,  283 => 182,  281 => 181,  272 => 174,  264 => 169,  259 => 166,  257 => 165,  251 => 161,  244 => 157,  240 => 155,  238 => 154,  232 => 150,  225 => 146,  221 => 144,  219 => 143,  213 => 139,  204 => 132,  196 => 131,  194 => 130,  188 => 126,  180 => 125,  178 => 124,  172 => 120,  164 => 119,  162 => 118,  156 => 114,  150 => 111,  147 => 110,  145 => 109,  140 => 106,  138 => 105,  133 => 102,  127 => 98,  118 => 96,  114 => 95,  109 => 92,  107 => 91,  97 => 83,  93 => 81,  87 => 79,  85 => 78,  82 => 77,  80 => 76,  75 => 73,  69 => 71,  67 => 70,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ultra_zymphonies_theme/templates/layout/page.html.twig", "/home/ismar950/valvemanufacturers.site/themes/ultra_zymphonies_theme/templates/layout/page.html.twig");
    }
}
