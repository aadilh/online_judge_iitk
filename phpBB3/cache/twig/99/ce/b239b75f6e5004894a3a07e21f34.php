<?php

/* acp_ext_list.html */
class __TwigTemplate_99ceb239b75f6e5004894a3a07e21f34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

\t<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_ADMIN");
        echo "</h1>

\t<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_EXPLAIN");
        echo "</p>

\t<table class=\"table1\">
\t\t<col class=\"row1\" ><col class=\"row2\" ><col class=\"row2\" >
\t<thead>
\t\t<tr>
\t\t\t<th>";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_NAME");
        echo "</th>
\t\t\t<th>";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_OPTIONS");
        echo "</th>
\t\t\t<th>";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_ACTIONS");
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 19
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "enabled"))) {
            // line 20
            echo "\t\t<tr>
\t\t\t<td class=\"row3\" colspan=\"3\"><strong>";
            // line 21
            echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_ENABLED");
            echo "</strong></td>
\t\t</tr>
\t\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "enabled"));
            foreach ($context['_seq'] as $context["_key"] => $context["enabled"]) {
                // line 24
                echo "\t\t<tr class=\"ext_enabled\">
\t\t\t<td><strong>";
                // line 25
                echo $this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "META_DISPLAY_NAME");
                echo "</strong></td>
\t\t\t<td style=\"text-align: center;\"><a href=\"";
                // line 26
                echo $this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "U_DETAILS");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("DETAILS");
                echo "</a></td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t";
                // line 28
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "actions"));
                foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
                    // line 29
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "U_ACTION");
                    echo "\"";
                    if ($this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "L_ACTION_EXPLAIN")) {
                        echo " title=\"";
                        echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "L_ACTION_EXPLAIN");
                        echo "\"";
                    }
                    echo ">";
                    echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "L_ACTION");
                    echo "</a>
\t\t\t\t\t";
                    // line 30
                    if ((!$this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "S_LAST_ROW"))) {
                        echo "&nbsp;|&nbsp;";
                    }
                    // line 31
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t\t</td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enabled'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t";
        }
        // line 36
        echo "
\t\t";
        // line 37
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "disabled"))) {
            // line 38
            echo "\t\t<tr>
\t\t\t<td class=\"row3\" colspan=\"3\"><strong>";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_DISABLED");
            echo "</strong></td>
\t\t</tr>
\t\t";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "disabled"));
            foreach ($context['_seq'] as $context["_key"] => $context["disabled"]) {
                // line 42
                echo "\t\t<tr class=\"ext_disabled\">
\t\t\t<td><strong>";
                // line 43
                echo $this->getAttribute((isset($context["disabled"]) ? $context["disabled"] : null), "META_DISPLAY_NAME");
                echo "</strong></td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t";
                // line 45
                if ($this->getAttribute((isset($context["disabled"]) ? $context["disabled"] : null), "U_DETAILS")) {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["disabled"]) ? $context["disabled"] : null), "U_DETAILS");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("DETAILS");
                    echo "</a>";
                }
                // line 46
                echo "\t\t\t</td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t";
                // line 48
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["disabled"]) ? $context["disabled"] : null), "actions"));
                foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
                    // line 49
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "U_ACTION");
                    echo "\"";
                    if ($this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "L_ACTION_EXPLAIN")) {
                        echo " title=\"";
                        echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "L_ACTION_EXPLAIN");
                        echo "\"";
                    }
                    echo ">";
                    echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "L_ACTION");
                    echo "</a>
\t\t\t\t\t";
                    // line 50
                    if ((!$this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "S_LAST_ROW"))) {
                        echo "&nbsp;|&nbsp;";
                    }
                    // line 51
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t\t</td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disabled'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t";
        }
        // line 56
        echo "\t</tbody>
\t</table>
\t<br />

\t<table class=\"table1\">
\t<tr>
\t\t<th>";
        // line 62
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_UPDATE_HEADLINE");
        echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row3\">";
        // line 65
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_UPDATE_EXPLAIN");
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>";
        // line 68
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_REMOVE_HEADLINE");
        echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row3\">";
        // line 71
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_REMOVE_EXPLAIN");
        echo "</td>
\t</tr>
\t</tbody>
\t</table>

";
        // line 76
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ext_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 76,  232 => 71,  226 => 68,  220 => 65,  214 => 62,  206 => 56,  203 => 55,  195 => 52,  189 => 51,  185 => 50,  172 => 49,  168 => 48,  164 => 46,  156 => 45,  151 => 43,  148 => 42,  144 => 41,  139 => 39,  136 => 38,  134 => 37,  131 => 36,  128 => 35,  120 => 32,  114 => 31,  110 => 30,  97 => 29,  93 => 28,  86 => 26,  82 => 25,  79 => 24,  75 => 23,  70 => 21,  67 => 20,  65 => 19,  58 => 15,  54 => 14,  50 => 13,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
