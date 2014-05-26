<?php

/* quickreply_editor.html */
class __TwigTemplate_ba945b8e32e4e659a32132f941dff478 extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo (isset($context["U_QR_ACTION"]) ? $context["U_QR_ACTION"] : null);
        echo "\" id=\"qr_postform\">
";
        // line 2
        // line 3
        echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t\t<h2 class=\"quickreply-title\">";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("QUICKREPLY");
        echo "</h2>
\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t\t<dl style=\"clear: left;\">
\t\t\t\t\t\t<dt><label for=\"subject\">";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("SUBJECT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t\t\t\t<dd><input type=\"text\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"124\" tabindex=\"2\" value=\"";
        // line 9
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t\t</dl>
\t\t\t\t";
        // line 11
        // line 12
        echo "\t\t\t\t<div id=\"message-box\">
\t\t\t\t\t<textarea style=\"height: 9em;\" name=\"message\" rows=\"7\" cols=\"76\" tabindex=\"3\" class=\"inputbox\"></textarea>
\t\t\t\t</div>
\t\t\t\t";
        // line 15
        // line 16
        echo "\t\t\t\t</fieldset>
\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t";
        // line 18
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t\t\t";
        // line 19
        echo (isset($context["QR_HIDDEN_FIELDS"]) ? $context["QR_HIDDEN_FIELDS"] : null);
        echo "
\t\t\t\t\t<input type=\"submit\" accesskey=\"f\" tabindex=\"6\" name=\"preview\" value=\"";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("FULL_EDITOR");
        echo "\" class=\"button2\" id=\"qr_full_editor\" />&nbsp;
\t\t\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"7\" name=\"post\" value=\"";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />&nbsp;
\t\t\t\t</fieldset>
\t\t</div>
\t</div>
";
        // line 25
        // line 26
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "quickreply_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  75 => 25,  68 => 21,  64 => 20,  60 => 19,  56 => 18,  52 => 16,  51 => 15,  46 => 12,  45 => 11,  40 => 9,  35 => 8,  29 => 5,  25 => 3,  24 => 2,  19 => 1,);
    }
}
