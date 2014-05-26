<?php

/* ucp_register.html */
class __TwigTemplate_fec8ac10bc652c84ddefcd79df0de9bc extends Twig_Template
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
<script type=\"text/javascript\">
// <![CDATA[
\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
        // line 10
        echo (isset($context["COOKIE_NAME"]) ? $context["COOKIE_NAME"] : null);
        echo "_lang=' + lang_iso + '; path=";
        echo (isset($context["COOKIE_PATH"]) ? $context["COOKIE_PATH"] : null);
        echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit.click();
\t}
// ]]>
</script>

<form method=\"post\" action=\"";
        // line 17
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\" id=\"register\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<h2>";
        // line 22
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo " - ";
        echo $this->env->getExtension('phpbb')->lang("REGISTRATION");
        echo "</h2>

\t<fieldset class=\"fields2\">
\t";
        // line 25
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<dl><dd class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</dd></dl>";
        }
        // line 26
        echo "\t";
        if ((isset($context["L_REG_COND"]) ? $context["L_REG_COND"] : null)) {
            // line 27
            echo "\t\t<dl><dd><strong>";
            echo $this->env->getExtension('phpbb')->lang("REG_COND");
            echo "</strong></dd></dl>
\t";
        }
        // line 29
        echo "\t<dl>
\t\t<dt><label for=\"username\">";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("USERNAME_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
        // line 31
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"email\">";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input type=\"email\" tabindex=\"2\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" value=\"";
        // line 35
        echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"new_password\">";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"password\" tabindex=\"4\" name=\"new_password\" id=\"new_password\" size=\"25\" value=\"";
        // line 39
        echo (isset($context["PASSWORD"]) ? $context["PASSWORD"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("NEW_PASSWORD");
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"password_confirm\">";
        // line 42
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input type=\"password\"  tabindex=\"5\" name=\"password_confirm\" id=\"password_confirm\" size=\"25\" value=\"";
        // line 43
        echo (isset($context["PASSWORD_CONFIRM"]) ? $context["PASSWORD_CONFIRM"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
        echo "\" /></dd>
\t</dl>

\t<hr />

\t<dl>
\t\t<dt><label for=\"lang\">";
        // line 49
        echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" tabindex=\"6\" title=\"";
        // line 50
        echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
        echo "\">";
        echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
        echo "</select></dd>
\t</dl>

\t";
        // line 53
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("timezone_option.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 54
        echo "
\t";
        // line 55
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields"))) {
            // line 56
            echo "\t\t<dl><dd><strong>";
            echo $this->env->getExtension('phpbb')->lang("ITEMS_REQUIRED");
            echo "</strong></dd></dl>

\t";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 59
                echo "\t\t<dl>
\t\t\t<dt><label";
                // line 60
                if ($this->getAttribute((isset($context["profile_fields"]) ? $context["profile_fields"] : null), "FIELD_ID")) {
                    echo " for=\"";
                    echo $this->getAttribute((isset($context["profile_fields"]) ? $context["profile_fields"] : null), "FIELD_ID");
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute((isset($context["profile_fields"]) ? $context["profile_fields"] : null), "LANG_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                if ($this->getAttribute((isset($context["profile_fields"]) ? $context["profile_fields"] : null), "S_REQUIRED")) {
                    echo " *";
                }
                echo "</label>
\t\t\t";
                // line 61
                if ($this->getAttribute((isset($context["profile_fields"]) ? $context["profile_fields"] : null), "LANG_EXPLAIN")) {
                    echo "<br /><span>";
                    echo $this->getAttribute((isset($context["profile_fields"]) ? $context["profile_fields"] : null), "LANG_EXPLAIN");
                    echo "</span>";
                }
                // line 62
                echo "\t\t\t";
                if ($this->getAttribute((isset($context["profile_fields"]) ? $context["profile_fields"] : null), "ERROR")) {
                    echo "<br /><span class=\"error\">";
                    echo $this->getAttribute((isset($context["profile_fields"]) ? $context["profile_fields"] : null), "ERROR");
                    echo "</span>";
                }
                echo "</dt>
\t\t\t<dd>";
                // line 63
                echo $this->getAttribute((isset($context["profile_fields"]) ? $context["profile_fields"] : null), "FIELD");
                echo "</dd>
\t\t</dl>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t";
        }
        // line 67
        echo "
\t</fieldset>
\t</div>
</div>
";
        // line 71
        if ((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) {
            // line 72
            echo "\t";
            $value = 8;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 73
            echo "\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $template = $this->env->resolveTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""));
            $template->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 75
        echo "
";
        // line 76
        if ((isset($context["S_COPPA"]) ? $context["S_COPPA"] : null)) {
            // line 77
            echo "

<div class=\"panel\">
\t<div class=\"inner\">

\t<h4>";
            // line 82
            echo $this->env->getExtension('phpbb')->lang("COPPA_COMPLIANCE");
            echo "</h4>

\t<p>";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("COPPA_EXPLAIN");
            echo "</p>
\t</div>
</div>
";
        }
        // line 88
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset class=\"submit-buttons\">
\t\t";
        // line 93
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t<input type=\"reset\" value=\"";
        // line 94
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" tabindex=\"9\" name=\"submit\" id=\"submit\" value=\"";
        // line 95
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1 default-submit-action\" />
\t\t";
        // line 96
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>

\t</div>
</div>
</form>

";
        // line 103
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
        return "ucp_register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 103,  300 => 96,  296 => 95,  292 => 94,  288 => 93,  281 => 88,  274 => 84,  269 => 82,  262 => 77,  260 => 76,  257 => 75,  242 => 73,  238 => 72,  236 => 71,  230 => 67,  227 => 66,  218 => 63,  209 => 62,  203 => 61,  189 => 60,  186 => 59,  182 => 58,  176 => 56,  174 => 55,  171 => 54,  159 => 53,  151 => 50,  146 => 49,  135 => 43,  130 => 42,  122 => 39,  115 => 38,  107 => 35,  102 => 34,  94 => 31,  87 => 30,  84 => 29,  78 => 27,  75 => 26,  69 => 25,  61 => 22,  53 => 17,  41 => 10,  31 => 2,  19 => 1,);
    }
}
