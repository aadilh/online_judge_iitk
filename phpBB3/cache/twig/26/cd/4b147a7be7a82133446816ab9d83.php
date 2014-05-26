<?php

/* navbar_footer.html */
class __TwigTemplate_26cd4b147a7be7a82133446816ab9d83 extends Twig_Template
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
        echo "<div class=\"navbar\">
\t<div class=\"inner\">

\t<ul class=\"linklist bulletin\">
\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 6
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 7
        echo "\t\t\t<span class=\"crumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t";
        // line 8
        // line 9
        echo "\t\t</li>
\t\t";
        // line 10
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 11
            echo "\t\t\t";
            if ((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null)) {
                echo "<li class=\"small-icon icon-";
                if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\"><a href=\"";
                echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
                echo "\" title=\"";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if ((!(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null))) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_WATCH_FORUM_TOGGLE"]) ? $context["S_WATCH_FORUM_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
                echo "\">";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "</a></li>";
            }
            // line 12
            echo "\t\t";
        }
        // line 13
        echo "\t\t";
        // line 14
        echo "\t\t<li class=\"rightside\">";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</li>
\t\t";
        // line 15
        // line 16
        echo "\t\t";
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo "<li class=\"rightside\"><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>";
        }
        // line 17
        echo "\t\t";
        // line 18
        echo "\t\t";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li class=\"rightside\"><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 19
        echo "\t\t";
        // line 20
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 20,  96 => 18,  85 => 16,  79 => 14,  45 => 10,  174 => 47,  155 => 44,  140 => 43,  133 => 42,  121 => 40,  113 => 37,  94 => 17,  78 => 18,  59 => 14,  47 => 11,  42 => 9,  26 => 6,  21 => 2,  137 => 39,  125 => 41,  117 => 38,  114 => 31,  110 => 30,  101 => 27,  89 => 25,  77 => 13,  68 => 21,  63 => 20,  54 => 16,  52 => 12,  46 => 10,  38 => 9,  36 => 8,  30 => 7,  231 => 48,  222 => 47,  219 => 46,  208 => 45,  200 => 44,  187 => 41,  184 => 40,  173 => 46,  170 => 45,  160 => 33,  151 => 31,  148 => 30,  138 => 27,  135 => 26,  128 => 23,  116 => 22,  105 => 19,  102 => 19,  100 => 18,  95 => 15,  84 => 15,  67 => 11,  50 => 9,  41 => 8,  28 => 6,  25 => 4,  366 => 98,  363 => 97,  353 => 93,  349 => 91,  347 => 90,  342 => 87,  341 => 86,  337 => 84,  325 => 83,  319 => 79,  305 => 74,  301 => 73,  293 => 72,  288 => 70,  285 => 69,  283 => 68,  277 => 65,  273 => 64,  269 => 63,  253 => 62,  242 => 53,  233 => 51,  227 => 48,  223 => 46,  215 => 43,  211 => 41,  203 => 39,  201 => 38,  198 => 37,  190 => 35,  188 => 42,  177 => 48,  168 => 29,  162 => 34,  152 => 20,  134 => 18,  119 => 17,  108 => 21,  97 => 15,  86 => 14,  75 => 22,  64 => 12,  62 => 11,  37 => 9,  33 => 8,  22 => 2,  259 => 68,  254 => 65,  243 => 54,  232 => 49,  228 => 56,  224 => 47,  218 => 51,  216 => 50,  210 => 46,  207 => 45,  193 => 44,  191 => 49,  181 => 39,  175 => 35,  172 => 30,  165 => 31,  159 => 30,  156 => 29,  153 => 28,  150 => 27,  136 => 26,  132 => 36,  130 => 24,  127 => 23,  124 => 22,  115 => 21,  106 => 20,  104 => 19,  98 => 26,  91 => 17,  81 => 14,  74 => 12,  71 => 13,  65 => 15,  57 => 13,  48 => 8,  34 => 7,  31 => 7,  19 => 1,);
    }
}
