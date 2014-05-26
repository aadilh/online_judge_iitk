<?php

/* ucp_footer.html */
class __TwigTemplate_a6999e12f3a60fc40fe58ada3fa071f3 extends Twig_Template
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
        echo "
\t\t</div>

\t</div>
\t</div>
</div>
";
        // line 7
        if ((isset($context["S_COMPOSE_PM"]) ? $context["S_COMPOSE_PM"] : null)) {
            // line 8
            echo "<div>";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "</div>
</form>
";
        }
        // line 11
        echo "
";
        // line 12
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("jumpbox.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 13
        echo "
";
        // line 14
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
        return "ucp_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  51 => 13,  39 => 12,  36 => 11,  29 => 8,  27 => 7,  350 => 98,  343 => 93,  325 => 91,  321 => 90,  317 => 89,  311 => 85,  309 => 84,  306 => 83,  299 => 78,  280 => 76,  276 => 75,  273 => 74,  251 => 72,  242 => 69,  236 => 65,  234 => 64,  229 => 61,  223 => 60,  212 => 57,  204 => 55,  201 => 54,  198 => 53,  194 => 52,  190 => 50,  186 => 48,  180 => 47,  175 => 46,  159 => 44,  143 => 42,  140 => 41,  135 => 40,  131 => 39,  127 => 37,  121 => 36,  117 => 34,  109 => 32,  101 => 30,  99 => 29,  96 => 28,  93 => 27,  86 => 25,  75 => 16,  67 => 14,  65 => 13,  45 => 8,  41 => 7,  320 => 68,  313 => 63,  301 => 62,  285 => 61,  270 => 60,  247 => 71,  240 => 58,  233 => 57,  227 => 54,  224 => 53,  220 => 59,  203 => 46,  195 => 45,  177 => 41,  172 => 40,  161 => 37,  156 => 36,  153 => 35,  148 => 32,  142 => 31,  132 => 29,  126 => 27,  118 => 26,  115 => 25,  111 => 24,  107 => 22,  105 => 21,  91 => 20,  88 => 26,  82 => 18,  73 => 17,  69 => 16,  60 => 10,  56 => 14,  49 => 11,  47 => 10,  42 => 8,  34 => 3,  31 => 2,  19 => 1,);
    }
}
