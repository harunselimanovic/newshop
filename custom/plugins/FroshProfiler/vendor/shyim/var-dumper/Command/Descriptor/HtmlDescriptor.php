<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Command\Descriptor;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\VarDumper\Cloner\Data;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;

/**
 * Describe collected data clones for html output.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class HtmlDescriptor implements DumpDescriptorInterface
{
    private $dumper;
    private $initialized = false;

    public function __construct(HtmlDumper $dumper)
    {
        $this->dumper = $dumper;
    }

    public function describe(OutputInterface $output, Data $data, array $context, $clientId)
    {
        if (!$this->initialized) {
            $styles = file_get_contents(__DIR__.'/../../Resources/css/htmlDescriptor.css');
            $scripts = file_get_contents(__DIR__.'/../../Resources/js/htmlDescriptor.js');
            $output->writeln("<style>$styles</style><script>$scripts</script>");
            $this->initialized = true;
        }

        $title = '-';
        if (isset($context['request'])) {
            $request = $context['request'];
            $title = sprintf('<code>%s</code> <a href="%s">%s</a>', $request['method'], $uri = $request['uri'], $uri);
            $dedupIdentifier = $request['identifier'];
        } elseif (isset($context['cli'])) {
            $title = '<code>$ </code>'.$context['cli']['command_line'];
            $dedupIdentifier = $context['cli']['identifier'];
        } else {
            $dedupIdentifier = uniqid('', true);
        }

        $contextText = array();
        if (isset($context['source'])) {
            $source = $context['source'];
            $sourceDescription = sprintf('%s on line %d', $source['name'], $source['line']);
            if (isset($source['file_link'])) {
                $sourceDescription = sprintf('<a href="%s">%s</a>', $source['file_link'], $sourceDescription);
            }

            $contextText[] = $sourceDescription;
        }

        $contextText = implode('<br />', $contextText);
        $isoDate = $this->extractDate($context, 'c');

        $output->writeln(<<<HTML
<article data-dedup-id="$dedupIdentifier">
    <header>
        <h2>$title</h2>
        <time class="text-small" title="$isoDate" datetime="$isoDate">
            {$this->extractDate($context)}
        </time>
    </header>
    <section class="body">
        <p class="text-small">
            $contextText
        </p>
        {$this->dumper->dump($data, true)}
    </section>
</article>
HTML
        );
    }

    private function extractDate(array $context, $format = 'r')
    {
        return date($format, $context['timestamp']);
    }
}
