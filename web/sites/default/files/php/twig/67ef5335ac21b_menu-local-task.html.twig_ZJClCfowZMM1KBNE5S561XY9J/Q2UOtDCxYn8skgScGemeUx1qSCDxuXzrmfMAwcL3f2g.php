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

/* themes/contrib/bootstrap_barrio/templates/navigation/menu-local-task.html.twig */
class __TwigTemplate_96ecbf01bac9ab8c37f907369bf73034 extends Template
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
        // line 20
        $context["classes"] = ["nav-link", ((        // line 22
($context["is_active"] ?? null)) ? ("active") : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["item"] ?? null), "url", [], "any", false, false, true, 23), "getOption", ["attributes"], "method", false, false, true, 23), "class", [], "any", false, false, true, 23)) ? (Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 23), "getOption", ["attributes"], "method", false, false, true, 23), "class", [], "any", false, false, true, 23), 23, $this->source), " ")) : ("")), ("nav-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["item"] ?? null), "url", [], "any", false, false, true, 24), "toString", [], "method", false, false, true, 24), 24, $this->source)))];
        // line 27
        yield "<li";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [((($context["is_active"] ?? null)) ? ("active") : ("")), "nav-item"], "method", false, false, true, 27), 27, $this->source), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, true, 27), 27, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 27), 27, $this->source), ["class" => $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 27, $this->source)]), "html", null, true);
        yield "</li>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_active", "item", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/bootstrap_barrio/templates/navigation/menu-local-task.html.twig";
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
        return array (  49 => 27,  47 => 24,  46 => 23,  45 => 22,  44 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/bootstrap_barrio/templates/navigation/menu-local-task.html.twig", "/home/isamu/websites/cesasc.org/web/themes/contrib/bootstrap_barrio/templates/navigation/menu-local-task.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 20);
        static $filters = array("join" => 23, "clean_class" => 24, "escape" => 27);
        static $functions = array("link" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['join', 'clean_class', 'escape'],
                ['link'],
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
