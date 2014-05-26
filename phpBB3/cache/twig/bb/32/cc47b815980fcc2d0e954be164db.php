<?php

/* navbar_header.html */
class __TwigTemplate_bb32cc47b815980fcc2d0e954be164db extends Twig_Template
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

\t<ul class=\"linklist navlinks\">
\t\t";
        // line 5
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 6
        echo "\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 7
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA");
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 8
        echo "\t\t\t<span class=\"crumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" accesskey=\"h\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA");
        echo ">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks"));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            echo "<span class=\"crumb\"><a href=\"";
            echo $this->getAttribute((isset($context["navlinks"]) ? $context["navlinks"] : null), "U_VIEW_FORUM");
            echo "\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA");
            echo ">";
            echo $this->getAttribute((isset($context["navlinks"]) ? $context["navlinks"] : null), "FORUM_NAME");
            echo "</a></span>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t\t";
        // line 11
        echo "\t\t</li>

\t\t";
        // line 13
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            echo "<li id=\"username_logged_in\" class=\"rightside\">";
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
                echo "\" class=\"header-avatar\">";
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo "</a> ";
            }
            echo (isset($context["USERNAME_FULL"]) ? $context["USERNAME_FULL"] : null);
            echo "</li>";
        }
        // line 14
        echo "\t\t";
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) && (!(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null)))) {
            echo "<li class=\"responsive-search rightside\" style=\"display: none;\"><a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV_EXPLAIN");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>";
        }
        // line 15
        echo "\t</ul>

\t<ul class=\"linklist bulletin\">
\t";
        // line 18
        if (((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null))) {
            // line 19
            echo "\t\t";
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 20
                echo "\t\t<li class=\"small-icon icon-notification\" data-skip-responsive=\"true\">
\t\t\t<a href=\"";
                // line 21
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\" id=\"notification_list_button\"><span>";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo " [</span><strong>";
                echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                echo "</strong><span>]</span></a>
\t\t\t";
                // line 22
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->env->loadTemplate("notification_dropdown.html")->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 23
                echo "\t\t</li>
\t\t";
            }
            // line 25
            echo "\t\t";
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 26
                echo "\t\t\t<li class=\"small-icon icon-pm\">
\t\t\t\t<a href=\"";
                // line 27
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\"><span>";
                echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
                echo " [</span><strong>";
                echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                echo "</strong><span>]</span></a>
\t\t\t</li>
\t\t";
            }
            // line 30
            echo "\t\t<li class=\"small-icon icon-ucp\">
\t\t\t<a href=\"";
            // line 31
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" accesskey=\"e\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a>
\t\t</li>
\t\t";
            // line 33
            if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                // line 34
                echo "\t\t\t<li class=\"icon-search-self\"><a href=\"";
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t";
            }
            // line 36
            echo "\t\t";
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                // line 37
                echo "\t\t\t<li class=\"icon-restore-permissions\"><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>
\t\t";
            }
            // line 39
            echo "\t";
        }
        // line 40
        echo "
\t\t";
        // line 41
        // line 42
        echo "\t\t";
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 43
            echo "\t\t\t<li class=\"small-icon icon-logout rightside no-bulletin\"><a href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t";
            // line 44
            if ((((!(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) && (!((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null))))) {
                echo "<li class=\"small-icon icon-register rightside no-bulletin\"><a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a></li>";
            }
            // line 45
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li class=\"small-icon icon-members rightside no-bulletin\"><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 46
            echo "\t\t";
        }
        // line 47
        echo "\t\t<li class=\"small-icon icon-faq rightside no-bulletin\"><a href=\"";
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>
\t\t";
        // line 48
        // line 49
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 49,  231 => 48,  222 => 47,  219 => 46,  208 => 45,  200 => 44,  187 => 41,  184 => 40,  173 => 37,  170 => 36,  160 => 33,  148 => 30,  138 => 27,  135 => 26,  132 => 25,  128 => 23,  116 => 22,  105 => 20,  102 => 19,  100 => 18,  84 => 14,  71 => 13,  67 => 11,  65 => 10,  50 => 9,  41 => 8,  28 => 6,  25 => 5,  366 => 98,  353 => 93,  349 => 91,  347 => 90,  342 => 87,  337 => 84,  325 => 83,  319 => 79,  301 => 73,  293 => 72,  288 => 70,  285 => 69,  283 => 68,  277 => 65,  273 => 64,  269 => 63,  253 => 62,  242 => 53,  233 => 51,  227 => 48,  223 => 46,  211 => 41,  203 => 39,  201 => 38,  190 => 35,  188 => 42,  181 => 39,  177 => 31,  172 => 30,  168 => 29,  162 => 34,  152 => 20,  119 => 17,  75 => 13,  64 => 12,  62 => 11,  37 => 9,  33 => 8,  22 => 2,  376 => 84,  373 => 83,  372 => 82,  369 => 81,  364 => 78,  363 => 97,  352 => 76,  351 => 75,  346 => 73,  343 => 72,  341 => 86,  338 => 70,  333 => 67,  331 => 66,  305 => 74,  304 => 64,  299 => 62,  296 => 61,  294 => 60,  291 => 59,  286 => 56,  284 => 55,  275 => 54,  264 => 53,  263 => 52,  260 => 51,  248 => 50,  245 => 49,  243 => 54,  240 => 47,  239 => 46,  236 => 45,  229 => 41,  224 => 47,  218 => 38,  215 => 43,  207 => 35,  205 => 34,  198 => 37,  191 => 43,  176 => 30,  171 => 29,  169 => 28,  166 => 27,  154 => 26,  151 => 31,  150 => 24,  147 => 23,  143 => 21,  134 => 18,  126 => 18,  118 => 16,  115 => 15,  108 => 21,  104 => 12,  97 => 15,  95 => 15,  92 => 9,  90 => 8,  87 => 7,  86 => 14,  83 => 5,  48 => 4,  34 => 3,  31 => 7,  19 => 1,);
    }
}
