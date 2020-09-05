<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/d8w3css/templates/navigation/menu.html.twig */
class __TwigTemplate_9cf47041921e008a09479b0e94a19a170cf5b9487b6cab68c7df3bbe91bc85d2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("import" => 21, "macro" => 27, "set" => 30, "if" => 39, "for" => 45);
        $filters = array("clean_class" => 31, "escape" => 41);
        $functions = array("link" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['clean_class', 'escape'],
                ['link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
        $macros = $this->macros;
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 26, $context, $this->getSourceContext()));
        echo "
";
    }

    // line 27
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 28
            echo "  ";
            $macros["menus"] = $this;
            // line 29
            echo "  ";
            // line 30
            $context["menu_classes"] = [0 => ("ul-parent ul-parent-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 31
($context["menu_name"] ?? null), 31, $this->source)))];
            // line 34
            echo "  ";
            // line 35
            $context["submenu_classes"] = [0 => ("ul-child ul-child-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 36
($context["menu_name"] ?? null), 36, $this->source)))];
            // line 39
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 40
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 41
                    echo "      <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["menu_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo " role=\"menu\">
    ";
                } else {
                    // line 43
                    echo "      <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["menu_classes"] ?? null)], "method", false, false, true, 43), "addClass", [0 => ($context["submenu_classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo " role=\"menu\">
    ";
                }
                // line 45
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "      ";
                    // line 47
                    $context["item_classes"] = [0 => ("li-item li-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 48
($context["menu_name"] ?? null), 48, $this->source))), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 49
$context["item"], "is_expanded", [], "any", false, false, true, 49)) ? ("li-expanded") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,                     // line 50
$context["item"], "is_expanded", [], "any", false, false, true, 50) && (($context["menu_level"] ?? null) == 0))) ? ("li-parent") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 51
$context["item"], "in_active_trail", [], "any", false, false, true, 51)) ? ("active") : (""))];
                    // line 54
                    echo "     ";
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 54))) {
                        // line 55
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 55), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo " role=\"none\">
        <a href=\"#\" class=\"w3-button tMenu toggle-parent\" role=\"menuitem\" aria-haspopup=\"true\">";
                        // line 56
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                        echo " <span class=\"fa fa-chevron-down dropdown-arrow\"></span></a>
      ";
                    } elseif (((                    // line 57
($context["menu_level"] ?? null) != 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 57))) {
                        // line 58
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 58), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 58), 58, $this->source), "html", null, true);
                        echo " role=\"none\">
        <a href=\"#\" class=\"w3-button tMenu toggle-child\" role=\"menuitem\" aria-haspopup=\"true\">";
                        // line 59
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                        echo " <span class=\"fa fa-arrow-right right-arrow\"></span><span class=\" fa fa-chevron-down dropdown-arrow\"></span></a>
      ";
                    } else {
                        // line 61
                        echo "      ";
                        // line 62
                        $context["link_classes"] = [0 => ("w3-button li-link li-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                        // line 63
($context["menu_name"] ?? null), 63, $this->source)))];
                        // line 66
                        echo "      <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 66), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
                        echo " role=\"none\">
        ";
                        // line 67
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 69
$context["item"], "title", [], "any", false, false, true, 69), 69, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 70
$context["item"], "url", [], "any", false, false, true, 70), 70, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 71
$context["item"], "attributes", [], "any", false, false, true, 71), "removeClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 71), "addClass", [0 => ($context["link_classes"] ?? null)], "method", false, false, true, 71), 71, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 72
$context["item"], "attributes", [], "any", false, false, true, 72), "setAttribute", [0 => "role", 1 => "menuitem"], "method", false, false, true, 72), 72, $this->source)), "html", null, true);
                        // line 74
                        echo "
      ";
                    }
                    // line 76
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 76)) {
                        // line 77
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 77), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)], 77, $context, $this->getSourceContext()));
                        echo "
      ";
                    }
                    // line 79
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/d8w3css/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 81,  183 => 79,  177 => 77,  174 => 76,  170 => 74,  168 => 72,  167 => 71,  166 => 70,  165 => 69,  164 => 67,  159 => 66,  157 => 63,  156 => 62,  154 => 61,  149 => 59,  144 => 58,  142 => 57,  138 => 56,  133 => 55,  130 => 54,  128 => 51,  127 => 50,  126 => 49,  125 => 48,  124 => 47,  122 => 46,  117 => 45,  111 => 43,  105 => 41,  102 => 40,  99 => 39,  97 => 36,  96 => 35,  94 => 34,  92 => 31,  91 => 30,  89 => 29,  86 => 28,  70 => 27,  64 => 26,  62 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/d8w3css/templates/navigation/menu.html.twig", "D:\\xampp\\htdocs\\drupal-bar-cat\\themes\\d8w3css\\templates\\navigation\\menu.html.twig");
    }
}
