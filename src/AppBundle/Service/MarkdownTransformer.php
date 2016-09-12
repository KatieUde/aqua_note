<?php

namespace AppBundle\Service;

use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;

// A SERVICE is just a class that does work for us!
// When you isolate a lot of your code into these service classes, you start to build what is called a **SERVICE-Oriented Architecture.**
// Instead of having all of your code in big controllers, your organize them into nice little service classes that each do one job

class MarkdownTransformer
{
    // **DEPENDENCY INJECTION** -- whenever you are inside a class and you need access to an object you don't have add a public function __construct and add the object that you need as an argument
    // After adding the constructor argument typehint it with either the class you see in debug:container OR an interface if you can find one
    // Then create a private property and in the constructor assign that to the object

    private $markdownParser;

    public function __construct(MarkdownParserInterface $markdownParser)
    {
        $this->markdownParser = $markdownParser;
    }

    public function parse($str)
    {
        return $this->markdownParser
            ->transformMarkdown($str);
    }
}
