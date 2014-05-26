<?php

/* navbar_footer.html */
class __TwigTemplate_708ab8357d3d667acbaa49fc77054ebc extends Twig_Template
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
        return array (  96 => 18,  79 => 14,  45 => 10,  174 => 47,  155 => 44,  140 => 43,  133 => 42,  121 => 40,  113 => 37,  78 => 18,  74 => 12,  59 => 14,  47 => 11,  42 => 9,  26 => 6,  21 => 2,  360 => 97,  356 => 95,  350 => 93,  340 => 87,  335 => 85,  330 => 82,  312 => 79,  306 => 78,  303 => 77,  289 => 74,  282 => 73,  274 => 71,  266 => 69,  257 => 66,  250 => 65,  241 => 63,  235 => 60,  213 => 54,  206 => 51,  192 => 47,  167 => 45,  161 => 44,  159 => 43,  156 => 42,  145 => 39,  141 => 38,  107 => 20,  94 => 17,  85 => 16,  82 => 27,  80 => 26,  51 => 17,  44 => 12,  40 => 10,  27 => 3,  137 => 39,  125 => 41,  117 => 38,  114 => 31,  110 => 30,  101 => 27,  98 => 32,  89 => 25,  77 => 13,  68 => 21,  63 => 18,  57 => 13,  54 => 16,  52 => 12,  46 => 10,  38 => 9,  36 => 8,  30 => 7,  232 => 49,  231 => 58,  222 => 56,  219 => 46,  208 => 52,  200 => 49,  187 => 41,  184 => 40,  173 => 46,  170 => 45,  160 => 33,  148 => 30,  138 => 27,  135 => 26,  132 => 36,  128 => 36,  116 => 22,  105 => 19,  102 => 19,  100 => 18,  84 => 15,  71 => 20,  67 => 19,  65 => 15,  50 => 9,  41 => 8,  28 => 6,  25 => 4,  366 => 98,  353 => 93,  349 => 91,  347 => 92,  342 => 87,  337 => 84,  325 => 83,  319 => 79,  301 => 73,  293 => 76,  288 => 70,  285 => 69,  283 => 68,  277 => 65,  273 => 64,  269 => 63,  253 => 62,  242 => 53,  233 => 51,  227 => 48,  223 => 46,  211 => 53,  203 => 50,  201 => 38,  190 => 35,  188 => 42,  181 => 39,  177 => 48,  172 => 30,  168 => 29,  162 => 34,  152 => 20,  119 => 17,  75 => 22,  64 => 12,  62 => 11,  37 => 9,  33 => 8,  22 => 2,  376 => 84,  373 => 83,  372 => 82,  369 => 81,  364 => 78,  363 => 97,  352 => 76,  351 => 75,  346 => 91,  343 => 72,  341 => 86,  338 => 86,  333 => 67,  331 => 66,  305 => 74,  304 => 64,  299 => 62,  296 => 61,  294 => 60,  291 => 75,  286 => 56,  284 => 55,  275 => 54,  264 => 68,  263 => 52,  260 => 51,  248 => 50,  245 => 49,  243 => 54,  240 => 47,  239 => 62,  236 => 45,  229 => 41,  224 => 47,  218 => 38,  215 => 43,  207 => 35,  205 => 34,  198 => 48,  191 => 49,  176 => 30,  171 => 46,  169 => 28,  166 => 27,  154 => 26,  151 => 31,  150 => 24,  147 => 40,  143 => 21,  134 => 37,  126 => 18,  118 => 16,  115 => 15,  108 => 21,  104 => 33,  97 => 15,  95 => 15,  92 => 9,  90 => 30,  87 => 29,  86 => 14,  83 => 5,  48 => 4,  34 => 7,  31 => 7,  19 => 1,);
    }
}
