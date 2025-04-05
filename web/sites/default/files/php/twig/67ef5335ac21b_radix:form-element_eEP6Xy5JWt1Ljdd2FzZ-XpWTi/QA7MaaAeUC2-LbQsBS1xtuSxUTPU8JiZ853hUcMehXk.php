<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* radix:form-element */
class __TwigTemplate_ed3ea06fd1f11210a4937f4cc636423d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--form-element"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:form-element"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:form-element"));
        // line 49
        $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 50
            yield "
";
            // line 52
            $context["form_element_classes"] = Twig\Extension\CoreExtension::merge(["js-form-item", "form-item", ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 55
($context["type"] ?? null), 55, $this->source))), ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 56
($context["type"] ?? null), 56, $this->source))), ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 57
($context["name"] ?? null), 57, $this->source))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 58
($context["name"] ?? null), 58, $this->source))), ((!CoreExtension::inFilter(            // line 59
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((            // line 60
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled disabled") : ("")), ((            // line 61
($context["errors"] ?? null)) ? ("form-item--error has-error") : ("")), "form-group"], ((            // line 63
($context["form_element_utility_classes"] ?? null)) ?: ([])));
            // line 65
            yield "
";
            // line 67
            $context["description_classes"] = ["description", "form-text", "text-muted", (((            // line 71
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
            // line 74
            yield "
";
            // line 75
            $context["form_element_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 76
            yield "
<div";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["form_element_attributes"] ?? null), "addClass", [($context["form_element_classes"] ?? null)], "method", false, false, true, 77), 77, $this->source), "html", null, true);
            yield ">
  ";
            // line 78
            if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
                // line 79
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 79, $this->source), "html", null, true);
                yield "
  ";
            }
            // line 81
            yield "
  ";
            // line 82
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null)))) {
                // line 83
                yield "    <div class=\"input-group\">
    ";
            }
            // line 85
            yield "
    ";
            // line 86
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
                // line 87
                yield "      <span class=\"field-prefix input-group-text\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 87, $this->source), "html", null, true);
                yield "</span>
    ";
            }
            // line 89
            yield "
    ";
            // line 90
            if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 90))) {
                // line 91
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                yield ">
        ";
                // line 92
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 95
            yield "
    ";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 96, $this->source), "html", null, true);
            yield "

    ";
            // line 98
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
                // line 99
                yield "      <span class=\"field-suffix input-group-text\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 99, $this->source), "html", null, true);
                yield "</span>
    ";
            }
            // line 101
            yield "
    ";
            // line 102
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null)))) {
                // line 103
                yield "    </div>
  ";
            }
            // line 105
            yield "
  ";
            // line 106
            if ((($context["label_display"] ?? null) == "after")) {
                // line 107
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 107, $this->source), "html", null, true);
                yield "
  ";
            }
            // line 109
            yield "
  ";
            // line 110
            if (($context["errors"] ?? null)) {
                // line 111
                yield "    <div class=\"invalid-feedback\">
      ";
                // line 112
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 112, $this->source), "html", null, true);
                yield "
    </div>
  ";
            }
            // line 115
            yield "
  ";
            // line 116
            if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 116))) {
                // line 117
                yield "    <small";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 117), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 117), 117, $this->source), "html", null, true);
                yield ">
      ";
                // line 118
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                yield "
    </small>
  ";
            }
            // line 121
            yield "</div>

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_1_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "errors", "form_element_utility_classes", "description_display", "attributes", "label_display", "label", "prefix", "suffix", "description", "children"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:form-element";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  197 => 49,  191 => 121,  185 => 118,  180 => 117,  178 => 116,  175 => 115,  169 => 112,  166 => 111,  164 => 110,  161 => 109,  155 => 107,  153 => 106,  150 => 105,  146 => 103,  144 => 102,  141 => 101,  135 => 99,  133 => 98,  128 => 96,  125 => 95,  119 => 92,  114 => 91,  112 => 90,  109 => 89,  103 => 87,  101 => 86,  98 => 85,  94 => 83,  92 => 82,  89 => 81,  83 => 79,  81 => 78,  77 => 77,  74 => 76,  72 => 75,  69 => 74,  67 => 71,  66 => 67,  63 => 65,  61 => 63,  60 => 61,  59 => 60,  58 => 59,  57 => 58,  56 => 57,  55 => 56,  54 => 55,  53 => 52,  50 => 50,  48 => 49,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:form-element", "themes/contrib/radix/components/form-element/form-element.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 49, "set" => 52, "if" => 78);
        static $filters = array("merge" => 63, "clean_class" => 55, "escape" => 77, "spaceless" => 49);
        static $functions = array("create_attribute" => 75);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if'],
                ['merge', 'clean_class', 'escape', 'spaceless'],
                ['create_attribute'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
