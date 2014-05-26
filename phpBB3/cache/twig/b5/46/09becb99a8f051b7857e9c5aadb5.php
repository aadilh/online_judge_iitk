<?php

/* timezone_option.html */
class __TwigTemplate_b54609becb99a8f051b7857e9c5aadb5 extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"timezone\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("BOARD_TIMEZONE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t";
        // line 3
        if ((isset($context["S_TZ_DATE_OPTIONS"]) ? $context["S_TZ_DATE_OPTIONS"] : null)) {
            // line 4
            echo "\t<dd id=\"tz_select_date\" style=\"display: none;\">
\t\t<select name=\"tz_date\" id=\"tz_date\" class=\"autowidth tz_select\">
\t\t\t<option value=\"\">";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("SELECT_CURRENT_TIME");
            echo "</option>
\t\t\t";
            // line 7
            echo (isset($context["S_TZ_DATE_OPTIONS"]) ? $context["S_TZ_DATE_OPTIONS"] : null);
            echo "
\t\t</select>
\t\t<input type=\"button\" id=\"tz_select_date_suggest\" class=\"button2\" style=\"display: none;\" timezone-preselect=\"";
            // line 9
            if ((isset($context["S_TZ_PRESELECT"]) ? $context["S_TZ_PRESELECT"] : null)) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" data-l-suggestion=\"";
            echo $this->env->getExtension('phpbb')->lang("TIMEZONE_DATE_SUGGESTION");
            echo "\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("TIMEZONE_DATE_SUGGESTION");
            echo "\" />
\t</dd>
\t";
        }
        // line 12
        echo "\t<dd>
\t\t<select name=\"tz\" id=\"timezone\" class=\"autowidth tz_select\">
\t\t\t<option value=\"\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("SELECT_TIMEZONE");
        echo "</option>
\t\t\t";
        // line 15
        echo (isset($context["S_TZ_OPTIONS"]) ? $context["S_TZ_OPTIONS"] : null);
        echo "
\t\t</select>

\t\t";
        // line 18
        $asset_file = "timezone.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 19
        echo "\t</dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "timezone_option.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  70 => 18,  64 => 15,  60 => 14,  56 => 12,  42 => 9,  37 => 7,  33 => 6,  29 => 4,  27 => 3,  22 => 2,  310 => 103,  300 => 96,  296 => 95,  292 => 94,  288 => 93,  281 => 88,  274 => 84,  269 => 82,  262 => 77,  260 => 76,  257 => 75,  242 => 73,  238 => 72,  236 => 71,  230 => 67,  227 => 66,  218 => 63,  209 => 62,  203 => 61,  189 => 60,  186 => 59,  182 => 58,  176 => 56,  174 => 55,  171 => 54,  159 => 53,  151 => 50,  146 => 49,  135 => 43,  130 => 42,  122 => 39,  115 => 38,  107 => 35,  102 => 34,  94 => 31,  87 => 30,  84 => 29,  78 => 27,  75 => 26,  69 => 25,  61 => 22,  53 => 17,  41 => 10,  31 => 2,  19 => 1,);
    }
}
