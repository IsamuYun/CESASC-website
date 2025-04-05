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

/* radix:dropdown-menu */
class __TwigTemplate_d29a7b051897736744511a2e7aea2ad7 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--dropdown-menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:dropdown-menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:dropdown-menu"));
        // line 7
        $___internal_parse_9_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 8
            yield "
";
            // line 10
            $context["dropdown_menu_classes"] = Twig\Extension\CoreExtension::merge(["dropdown-menu"], ((            // line 12
($context["dropdown_menu_utility_classes"] ?? null)) ?: ([])));
            // line 14
            yield "
";
            // line 15
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null)) > 0)) {
                // line 16
                yield "  <ul class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(($context["dropdown_menu_classes"] ?? null), 16, $this->source), " "), "html", null, true);
                yield "\">
    ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 18
                    yield "      ";
                    $context["nav_link_classes"] = ["dropdown-item", ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 18)) ? ("active") : (""))];
                    // line 19
                    yield "
      ";
                    // line 20
                    if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 20), "options", [], "any", false, false, true, 20), "attributes", [], "any", false, false, true, 20), "class", [], "any", false, false, true, 20))) {
                        // line 21
                        yield "        ";
                        $context["nav_link_classes"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 21, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 21), "options", [], "any", false, false, true, 21), "attributes", [], "any", false, false, true, 21), "class", [], "any", false, false, true, 21), 21, $this->source));
                        // line 22
                        yield "      ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 22), "options", [], "any", false, false, true, 22), "attributes", [], "any", false, false, true, 22), "class", [], "any", false, false, true, 22)) {
                        // line 23
                        yield "        ";
                        $context["nav_link_classes"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 23, $this->source), [$this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 23), "options", [], "any", false, false, true, 23), "attributes", [], "any", false, false, true, 23), "class", [], "any", false, false, true, 23), 23, $this->source)]);
                        // line 24
                        yield "      ";
                    }
                    // line 25
                    yield "
      <li class=\"dropdown";
                    // line 26
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 26)) {
                        yield " ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dropdown_direction"] ?? null), 26, $this->source), "html", null, true);
                    }
                    yield "\">
        <a href=\"";
                    // line 27
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                    yield "\" class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 27, $this->source), ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 27)) ? (["dropdown-toggle"]) : ([]))), " "), "html", null, true);
                    yield "\" ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 27)) {
                        yield "data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\"";
                    }
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                    yield "</a>
        ";
                    // line 28
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 28)) {
                        // line 29
                        yield "          ";
                        // line 30
                        yield from                         $this->loadTemplate("radix:dropdown-menu", "radix:dropdown-menu", 30)->unwrap()->yield(CoreExtension::merge($context, ["items" => CoreExtension::getAttribute($this->env, $this->source,                         // line 31
$context["item"], "below", [], "any", false, false, true, 31)]));
                        // line 34
                        yield "        ";
                    }
                    // line 35
                    yield "      </li>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "  </ul>
";
            }
            // line 39
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_9_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["dropdown_menu_utility_classes", "items", "dropdown_direction"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:dropdown-menu";
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
        return array (  159 => 7,  154 => 39,  150 => 37,  135 => 35,  132 => 34,  130 => 31,  129 => 30,  127 => 29,  125 => 28,  113 => 27,  106 => 26,  103 => 25,  100 => 24,  97 => 23,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  83 => 18,  66 => 17,  61 => 16,  59 => 15,  56 => 14,  54 => 12,  53 => 10,  50 => 8,  48 => 7,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:dropdown-menu", "themes/contrib/radix/components/dropdown-menu/dropdown-menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 7, "set" => 10, "if" => 15, "for" => 17, "include" => 30);
        static $filters = array("merge" => 12, "length" => 15, "escape" => 16, "join" => 16, "spaceless" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'for', 'include'],
                ['merge', 'length', 'escape', 'join', 'spaceless'],
                [],
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
