<?php

/* confirm_delete_body.html */
class __TwigTemplate_daa559de0740878cc516673131472e3c extends Twig_Template
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
        if ((isset($context["S_AJAX_REQUEST"]) ? $context["S_AJAX_REQUEST"] : null)) {
            // line 2
            echo "\t<form action=\"";
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
\t\t<p>";
            // line 3
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>

\t\t";
            // line 5
            if (((!(isset($context["S_SOFTDELETED"]) ? $context["S_SOFTDELETED"] : null)) && ((isset($context["S_DELETE_REASON"]) ? $context["S_DELETE_REASON"] : null) || ((isset($context["S_ALLOWED_DELETE"]) ? $context["S_ALLOWED_DELETE"] : null) && (isset($context["S_ALLOWED_SOFTDELETE"]) ? $context["S_ALLOWED_SOFTDELETE"] : null))))) {
                // line 6
                echo "\t\t\t";
                if (((isset($context["S_ALLOWED_DELETE"]) ? $context["S_ALLOWED_DELETE"] : null) && (isset($context["S_ALLOWED_SOFTDELETE"]) ? $context["S_ALLOWED_SOFTDELETE"] : null))) {
                    // line 7
                    echo "\t\t\t\t<label>
\t\t\t\t\t<strong>";
                    // line 8
                    echo $this->env->getExtension('phpbb')->lang("DELETE_PERMANENTLY");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 9
                    echo (isset($context["S_CHECKED_PERMANENT"]) ? $context["S_CHECKED_PERMANENT"] : null);
                    echo " />
\t\t\t\t\t";
                    // line 10
                    if ((isset($context["S_TOPIC_MODE"]) ? $context["S_TOPIC_MODE"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_TOPIC_PERMANENTLY");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                    }
                    // line 11
                    echo "\t\t\t\t</label>
\t\t\t";
                }
                // line 13
                echo "
\t\t\t";
                // line 14
                if ((isset($context["S_DELETE_REASON"]) ? $context["S_DELETE_REASON"] : null)) {
                    // line 15
                    echo "\t\t\t\t<label for=\"delete_reason\">
\t\t\t\t\t<strong>";
                    // line 16
                    echo $this->env->getExtension('phpbb')->lang("DELETE_REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_REASON_EXPLAIN");
                    echo "</span><br />
\t\t\t\t\t<input type=\"text\" name=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" />
\t\t\t\t</label>
\t\t\t";
                }
                // line 20
                echo "\t\t";
            }
            // line 21
            echo "
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 24
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t\t</fieldset>
\t</form>

";
        } else {
            // line 29
            echo "
";
            // line 30
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
            // line 31
            echo "
<form id=\"confirm\" action=\"";
            // line 32
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
<div class=\"panel\">
\t<div class=\"inner\">

\t<h2 class=\"message-title\">";
            // line 36
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h2>

\t<p>";
            // line 38
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>

\t";
            // line 40
            if (((!(isset($context["S_SOFTDELETED"]) ? $context["S_SOFTDELETED"] : null)) && ((isset($context["S_DELETE_REASON"]) ? $context["S_DELETE_REASON"] : null) || ((isset($context["S_ALLOWED_DELETE"]) ? $context["S_ALLOWED_DELETE"] : null) && (isset($context["S_ALLOWED_SOFTDELETE"]) ? $context["S_ALLOWED_SOFTDELETE"] : null))))) {
                // line 41
                echo "\t<fieldset class=\"fields1\">
\t\t";
                // line 42
                if (((isset($context["S_ALLOWED_DELETE"]) ? $context["S_ALLOWED_DELETE"] : null) && (isset($context["S_ALLOWED_SOFTDELETE"]) ? $context["S_ALLOWED_SOFTDELETE"] : null))) {
                    // line 43
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"delete_permanent\">";
                    // line 44
                    echo $this->env->getExtension('phpbb')->lang("DELETE_PERMANENTLY");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label for=\"delete_permanent\">
\t\t\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 47
                    echo (isset($context["S_CHECKED_PERMANENT"]) ? $context["S_CHECKED_PERMANENT"] : null);
                    echo " />
\t\t\t\t\t\t";
                    // line 48
                    if ((isset($context["S_TOPIC_MODE"]) ? $context["S_TOPIC_MODE"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_TOPIC_PERMANENTLY");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                    }
                    // line 49
                    echo "\t\t\t\t\t</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
                }
                // line 53
                echo "
\t\t";
                // line 54
                if ((isset($context["S_DELETE_REASON"]) ? $context["S_DELETE_REASON"] : null)) {
                    // line 55
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"delete_reason\">";
                    // line 56
                    echo $this->env->getExtension('phpbb')->lang("DELETE_REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_REASON_EXPLAIN");
                    echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" name=\"delete_reason\" id=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" /></dd>
\t\t\t</dl>
\t\t";
                }
                // line 60
                echo "\t</fieldset>
\t";
            }
            // line 62
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 64
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t<input type=\"submit\" name=\"confirm\" value=\"";
            // line 65
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"button1\" />&nbsp; 
\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t</fieldset>

\t</div>
</div>
</form>

";
            // line 73
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
    }

    public function getTemplateName()
    {
        return "confirm_delete_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 73,  197 => 66,  193 => 65,  189 => 64,  185 => 62,  181 => 60,  171 => 56,  168 => 55,  166 => 54,  163 => 53,  157 => 49,  151 => 48,  147 => 47,  140 => 44,  137 => 43,  135 => 42,  132 => 41,  130 => 40,  125 => 38,  120 => 36,  113 => 32,  110 => 31,  98 => 30,  95 => 29,  87 => 24,  83 => 23,  79 => 21,  76 => 20,  66 => 16,  63 => 15,  61 => 14,  58 => 13,  54 => 11,  48 => 10,  44 => 9,  39 => 8,  36 => 7,  33 => 6,  31 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }
}
