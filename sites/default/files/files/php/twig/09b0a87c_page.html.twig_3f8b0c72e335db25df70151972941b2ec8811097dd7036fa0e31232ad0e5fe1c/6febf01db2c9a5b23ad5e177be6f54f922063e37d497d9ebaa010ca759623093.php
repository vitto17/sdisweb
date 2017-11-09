<?php

/* themes/quatro/templates/page.html.twig */
class __TwigTemplate_238f9617e9673a5c50c9161c4eb2cf7651bd7223351ef319b8279bf4b7688044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'header_first' => array($this, 'block_header_first'),
            'header_second' => array($this, 'block_header_second'),
            'main' => array($this, 'block_main'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 64, "block" => 65);
        $filters = array("clean_class" => 70, "t" => 84);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 60
        echo "

";
        // line 63
        echo "<div id=\"header-navbar-wrapper\" class=\"header-navbar-wrapper\">
";
        // line 64
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 65
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 104
        echo "</div>

";
        // line 107
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array())) {
            // line 108
            echo "<div class=\"header-wrapper\">
  <div role=\"header\" class=\"header-container ";
            // line 109
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo " \">
    <div class=\"row\">

      ";
            // line 113
            echo "\t  
\t   ";
            // line 115
            $context["header_first_classes"] = array(0 => (($this->getAttribute(            // line 116
(isset($context["page"]) ? $context["page"] : null), "header_second", array())) ? ("col-sm-9") : ("")), 1 => ((twig_test_empty($this->getAttribute(            // line 117
(isset($context["page"]) ? $context["page"] : null), "header_second", array()))) ? ("col-sm-12") : ("")));
            // line 120
            echo "\t  
      ";
            // line 121
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array())) {
                // line 122
                echo "        ";
                $this->displayBlock('header_first', $context, $blocks);
                // line 127
                echo "      ";
            }
            // line 128
            echo "\t  
\t  ";
            // line 130
            echo "      ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_second", array())) {
                // line 131
                echo "        ";
                $this->displayBlock('header_second', $context, $blocks);
                // line 136
                echo "      ";
            }
            // line 137
            echo "\t  
\t</div>
  </div>
</div>
";
        }
        // line 143
        echo "
";
        // line 145
        $this->displayBlock('main', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 223
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 65
    public function block_navbar($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        // line 67
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 69
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 70
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 73
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 74
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 75
            echo "        <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 77
        echo "\t  <div class=\"row\">
      <div class=\"navbar-header col-sm-12\">
        ";
        // line 79
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 81
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 82
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
\t\t\t<span class=\"menu-text\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
";
            // line 84
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Menu")));
            echo "</span>
          </button>
        ";
        }
        // line 87
        echo "      </div>
\t  </div>

      ";
        // line 91
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 92
            echo "\t  \t<div class=\"row\">
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse col-sm-12\">
          ";
            // line 94
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
\t\t</div>
      ";
        }
        // line 98
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 99
            echo "        </div>
      ";
        }
        // line 101
        echo "    </header>
  ";
    }

    // line 122
    public function block_header_first($context, array $blocks = array())
    {
        // line 123
        echo "          <div ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["header_first_classes"]) ? $context["header_first_classes"] : null)), "method"), "html", null, true));
        echo " role=\"headingfirst\">
            ";
        // line 124
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 131
    public function block_header_second($context, array $blocks = array())
    {
        // line 132
        echo "          <div class=\"col-sm-3\" role=\"headingsecond\">
            ";
        // line 133
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_second", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 145
    public function block_main($context, array $blocks = array())
    {
        // line 146
        echo "  <div role=\"main\" id=\"main-container\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
\t
\t<div class=\"row\">
      ";
        // line 150
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 151
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 156
            echo "      ";
        }
        // line 157
        echo "
      ";
        // line 159
        echo "      ";
        // line 160
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 161
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-md-6") : ("")), 1 => ((($this->getAttribute(        // line 162
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-md-9") : ("")), 2 => ((($this->getAttribute(        // line 163
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-md-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 164
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-md-12") : ("")));
        // line 167
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 170
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 171
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 174
            echo "        ";
        }
        // line 175
        echo "
        ";
        // line 177
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 178
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 181
            echo "        ";
        }
        // line 182
        echo "
        ";
        // line 184
        echo "\t\t";
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 185
            echo "          <h1";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "page-header"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
        ";
        }
        // line 187
        echo "\t\t";
        // line 188
        echo "\t\t
        ";
        // line 190
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 191
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 194
            echo "        ";
        }
        // line 195
        echo "
        ";
        // line 197
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 198
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 201
            echo "        ";
        }
        // line 202
        echo "
        ";
        // line 204
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 208
        echo "      </section>

      ";
        // line 211
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 212
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 217
            echo "      ";
        }
        // line 218
        echo "    </div>
  </div>
";
    }

    // line 151
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 152
        echo "          <aside class=\"col-md-3\" role=\"complementary\">
            ";
        // line 153
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 171
    public function block_highlighted($context, array $blocks = array())
    {
        // line 172
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 178
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 179
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 191
    public function block_action_links($context, array $blocks = array())
    {
        // line 192
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 198
    public function block_help($context, array $blocks = array())
    {
        // line 199
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 204
    public function block_content($context, array $blocks = array())
    {
        // line 205
        echo "          <a id=\"main-content\"></a>
          ";
        // line 206
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 212
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 213
        echo "          <aside id=\"sidebar-second\" class=\"col-md-3\" role=\"complementary\">
            ";
        // line 214
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 223
    public function block_footer($context, array $blocks = array())
    {
        // line 224
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      <div class=\"footer-inner\">
          ";
        // line 226
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
\t  </div>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/quatro/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 226,  443 => 224,  440 => 223,  433 => 214,  430 => 213,  427 => 212,  421 => 206,  418 => 205,  415 => 204,  408 => 199,  405 => 198,  398 => 192,  395 => 191,  388 => 179,  385 => 178,  378 => 172,  375 => 171,  368 => 153,  365 => 152,  362 => 151,  356 => 218,  353 => 217,  350 => 212,  347 => 211,  343 => 208,  340 => 204,  337 => 202,  334 => 201,  331 => 198,  328 => 197,  325 => 195,  322 => 194,  319 => 191,  316 => 190,  313 => 188,  311 => 187,  303 => 185,  300 => 184,  297 => 182,  294 => 181,  291 => 178,  288 => 177,  285 => 175,  282 => 174,  279 => 171,  276 => 170,  270 => 167,  268 => 164,  267 => 163,  266 => 162,  265 => 161,  264 => 160,  262 => 159,  259 => 157,  256 => 156,  253 => 151,  250 => 150,  243 => 146,  240 => 145,  233 => 133,  230 => 132,  227 => 131,  220 => 124,  215 => 123,  212 => 122,  207 => 101,  203 => 99,  200 => 98,  193 => 94,  189 => 92,  186 => 91,  181 => 87,  175 => 84,  171 => 82,  168 => 81,  164 => 79,  160 => 77,  154 => 75,  152 => 74,  147 => 73,  145 => 70,  144 => 69,  143 => 67,  141 => 66,  138 => 65,  132 => 223,  130 => 222,  127 => 221,  125 => 145,  122 => 143,  115 => 137,  112 => 136,  109 => 131,  106 => 130,  103 => 128,  100 => 127,  97 => 122,  95 => 121,  92 => 120,  90 => 117,  89 => 116,  88 => 115,  85 => 113,  79 => 109,  76 => 108,  74 => 107,  70 => 104,  66 => 65,  64 => 64,  61 => 63,  57 => 60,  55 => 59,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the navigation region.*/
/*  * - page.navigation_collapsible: Items for the navigation (collapsible) region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* {% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}*/
/* */
/* */
/* {# Navbar #}*/
/* <div id="header-navbar-wrapper" class="header-navbar-wrapper">*/
/* {% if page.navigation or page.navigation_collapsible %}*/
/*   {% block navbar %}*/
/*     {%*/
/*       set navbar_classes = [*/
/*         'navbar',*/
/*         theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',*/
/*         theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,*/
/*       ]*/
/*     %}*/
/*     <header{{ navbar_attributes.addClass(navbar_classes) }} id="navbar" role="banner">*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         <div class="{{ container }}">*/
/*       {% endif %}*/
/* 	  <div class="row">*/
/*       <div class="navbar-header col-sm-12">*/
/*         {{ page.navigation }}*/
/*         {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*         {% if page.navigation_collapsible %}*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">*/
/* 			<span class="menu-text"><i class="fa fa-bars" aria-hidden="true"></i>*/
/* {{ 'Menu'|t }}</span>*/
/*           </button>*/
/*         {% endif %}*/
/*       </div>*/
/* 	  </div>*/
/* */
/*       {# Navigation (collapsible) #}*/
/*       {% if page.navigation_collapsible %}*/
/* 	  	<div class="row">*/
/*         <div id="navbar-collapse" class="navbar-collapse collapse col-sm-12">*/
/*           {{ page.navigation_collapsible }}*/
/*         </div>*/
/* 		</div>*/
/*       {% endif %}*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         </div>*/
/*       {% endif %}*/
/*     </header>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* </div>*/
/* */
/* {# Header #}*/
/* {% if page.header_first  %}*/
/* <div class="header-wrapper">*/
/*   <div role="header" class="header-container {{ container }} ">*/
/*     <div class="row">*/
/* */
/*       {# Header First #}*/
/* 	  */
/* 	   {%*/
/*         set header_first_classes = [*/
/*           page.header_second ? 'col-sm-9',*/
/*           page.header_second is empty  ? 'col-sm-12'*/
/*         ]*/
/*       %}*/
/* 	  */
/*       {% if page.header_first %}*/
/*         {% block header_first %}*/
/*           <div {{ attributes.addClass(header_first_classes) }} role="headingfirst">*/
/*             {{ page.header_first }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  {# Header Second #}*/
/*       {% if page.header_second %}*/
/*         {% block header_second %}*/
/*           <div class="col-sm-3" role="headingsecond">*/
/*             {{ page.header_second }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	</div>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* {# End Header #}*/
/* */
/* {# Main #}*/
/* {% block main %}*/
/*   <div role="main" id="main-container" class="main-container {{ container }} js-quickedit-main-content">*/
/* 	*/
/* 	<div class="row">*/
/*       {# Sidebar First #}*/
/*       {% if page.sidebar_first %}*/
/*         {% block sidebar_first %}*/
/*           <aside class="col-md-3" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Content #}*/
/*       {%*/
/*         set content_classes = [*/
/*           page.sidebar_first and page.sidebar_second ? 'col-md-6',*/
/*           page.sidebar_first and page.sidebar_second is empty ? 'col-md-9',*/
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-md-9',*/
/*           page.sidebar_first is empty and page.sidebar_second is empty ? 'col-md-12'*/
/*         ]*/
/*       %}*/
/*       <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/*         {# Highlighted #}*/
/*         {% if page.highlighted %}*/
/*           {% block highlighted %}*/
/*             <div class="highlighted">{{ page.highlighted }}</div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Breadcrumbs #}*/
/*         {% if breadcrumb %}*/
/*           {% block breadcrumb %}*/
/*             {{ breadcrumb }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Title #}*/
/* 		{% if title %}*/
/*           <h1{{ title_attributes.addClass('page-header') }}>{{ title }}</h1>*/
/*         {% endif %}*/
/* 		{# Title #}*/
/* 		*/
/*         {# Action Links #}*/
/*         {% if action_links %}*/
/*           {% block action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Help #}*/
/*         {% if page.help %}*/
/*           {% block help %}*/
/*             {{ page.help }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/*         {% block content %}*/
/*           <a id="main-content"></a>*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/*       </section>*/
/* */
/*       {# Sidebar Second #}*/
/*       {% if page.sidebar_second %}*/
/*         {% block sidebar_second %}*/
/*           <aside id="sidebar-second" class="col-md-3" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% if page.footer %}*/
/*   {% block footer %}*/
/*     <footer class="footer {{ container }}" role="contentinfo">*/
/*       <div class="footer-inner">*/
/*           {{ page.footer }}*/
/* 	  </div>*/
/*     </footer>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
