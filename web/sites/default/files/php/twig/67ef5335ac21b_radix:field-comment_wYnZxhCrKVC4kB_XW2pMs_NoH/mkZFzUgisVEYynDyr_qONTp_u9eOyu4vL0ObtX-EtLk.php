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

/* radix:field-comment */
class __TwigTemplate_443fef3f7ad80238219f0b046fdea243 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--field-comment"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:field-comment"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:field-comment"));
        // line 7
        $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 8
            yield "
";
            // line 9
            $context["field_comment_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 10
            yield "<section ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_comment_attributes"] ?? null), 10, $this->source), "html", null, true);
            yield ">
  ";
            // line 11
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 11, $this->source), "html", null, true);
            yield "
  ";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 12, $this->source), "html", null, true);
            yield "

  ";
            // line 14
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comments"] ?? null), 14, $this->source), "html", null, true);
            yield "

  ";
            // line 16
            if (($context["comment_form"] ?? null)) {
                // line 17
                yield "    <div class=\"row\">
      <div class=\"col-md-10 offset-md-2\">
        <div class=\"card\">
          <div class=\"card-header\">";
                // line 20
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add new comment"));
                yield "</div>
          <div class=\"card-body\">";
                // line 21
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_form"] ?? null), 21, $this->source), "html", null, true);
                yield "</div>
        </div>
      </div>
    </div>
  ";
            }
            // line 26
            yield "</section>

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_1_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title_prefix", "title_suffix", "comments", "comment_form"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:field-comment";
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
        return array (  99 => 7,  93 => 26,  85 => 21,  81 => 20,  76 => 17,  74 => 16,  69 => 14,  64 => 12,  60 => 11,  55 => 10,  53 => 9,  50 => 8,  48 => 7,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:field-comment", "themes/contrib/radix/components/field-comment/field-comment.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 7, "set" => 9, "if" => 16);
        static $filters = array("escape" => 10, "t" => 20, "spaceless" => 7);
        static $functions = array("create_attribute" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if'],
                ['escape', 't', 'spaceless'],
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
