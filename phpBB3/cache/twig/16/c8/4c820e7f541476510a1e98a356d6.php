<?php

/* captcha_default.html */
class __TwigTemplate_16c84c820e7f541476510a1e98a356d6 extends Twig_Template
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
        if (((isset($context["S_TYPE"]) ? $context["S_TYPE"] : null) == 1)) {
            // line 2
            echo "<div class=\"panel\">
\t<div class=\"inner\">

\t<h3 class=\"captcha-title\">";
            // line 5
            echo $this->env->getExtension('phpbb')->lang("CONFIRMATION");
            echo "</h3>
\t<p>";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_EXPLAIN");
            echo "</p>

\t<fieldset class=\"fields2\">
";
        }
        // line 10
        echo "
\t<dl>
\t\t<dt><label for=\"confirm_code\">";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_CODE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><img src=\"";
        // line 13
        echo (isset($context["CONFIRM_IMAGE_LINK"]) ? $context["CONFIRM_IMAGE_LINK"] : null);
        echo "\" alt=\"";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_CODE");
        echo "\" /></dd>
\t\t<dd><input type=\"text\" name=\"confirm_code\" id=\"confirm_code\" size=\"8\" maxlength=\"8\" tabindex=\"";
        // line 14
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CAPTCHA_TAB_INDEX");
        echo "\" class=\"inputbox narrow\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_CODE");
        echo "\" />
\t\t";
        // line 15
        if ((isset($context["S_CONFIRM_REFRESH"]) ? $context["S_CONFIRM_REFRESH"] : null)) {
            echo "<input type=\"submit\" name=\"refresh_vc\" id=\"refresh_vc\" class=\"button2\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("VC_REFRESH");
            echo "\" />";
        }
        // line 16
        echo "\t\t<input type=\"hidden\" name=\"confirm_id\" id=\"confirm_id\" value=\"";
        echo (isset($context["CONFIRM_ID"]) ? $context["CONFIRM_ID"] : null);
        echo "\" /></dd>
\t\t<dd>";
        // line 17
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_CODE_EXPLAIN");
        echo "</dd>
\t</dl>

";
        // line 20
        if (((isset($context["S_TYPE"]) ? $context["S_TYPE"] : null) == 1)) {
            // line 21
            echo "\t</fieldset>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "captcha_default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  58 => 15,  52 => 14,  46 => 13,  30 => 6,  26 => 5,  21 => 2,  85 => 19,  70 => 18,  64 => 16,  60 => 14,  56 => 12,  42 => 9,  37 => 10,  33 => 6,  29 => 4,  27 => 3,  22 => 2,  310 => 103,  300 => 96,  296 => 95,  292 => 94,  288 => 93,  281 => 88,  274 => 84,  269 => 82,  262 => 77,  260 => 76,  257 => 75,  242 => 73,  238 => 72,  236 => 71,  230 => 67,  227 => 66,  218 => 63,  209 => 62,  203 => 61,  189 => 60,  186 => 59,  182 => 58,  176 => 56,  174 => 55,  171 => 54,  159 => 53,  151 => 50,  146 => 49,  135 => 43,  130 => 42,  122 => 39,  115 => 38,  107 => 35,  102 => 34,  94 => 31,  87 => 30,  84 => 29,  78 => 27,  75 => 20,  69 => 17,  61 => 22,  53 => 17,  41 => 12,  31 => 2,  19 => 1,);
    }
}
