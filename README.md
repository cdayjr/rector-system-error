# Rector Error

Running this:

```sh
composer exec rector -- src/Example.php --debug
```

Produces this:

```
[info] Sets loaded based on installed packages:
 * /Users/cday/Projects/php/example/vendor/rector/rector/vendor/rector/rector-phpunit/config/sets/phpunit120.php

[file] /Users/cday/Projects/php/example/src/Example.php

 [ERROR] Could not process "/Users/cday/Projects/php/example/src/Example.php"
         file, due to:
         "System error: "assert($startPos >= 0 && $endPos >= 0)"

         Stack trace:
         #0
         vendor/rector/rector/vendor/nikic/php-parser/lib/PhpParser/PrettyPrinte
         rAbstract.php(589): assert(false, 'assert($startPo...')
         #1
         vendor/rector/rector/src/PhpParser/Printer/BetterStandardPrinter.php(14
         4):
         PhpParser\PrettyPrinterAbstract->p(Object(Rector\PhpParser\Node\Custom
         Node\FileWithoutNamespace), 1000, 1000, true)
         #2
         vendor/rector/rector/vendor/nikic/php-parser/lib/PhpParser/PrettyPrinte
         rAbstract.php(881):
         Rector\PhpParser\Printer\BetterStandardPrinter->p(Object(Rector\PhpPar
         ser\Node\CustomNode\FileWithoutNamespace), 1000, 1000, true)
         #3
         vendor/rector/rector/src/PhpParser/Printer/BetterStandardPrinter.php(21
         5): PhpParser\PrettyPrinterAbstract->pArray(Array, Array, 14, 0,
         'File', 'stmts', NULL)
         #4
         vendor/rector/rector/vendor/nikic/php-parser/lib/PhpParser/PrettyPrinte
         rAbstract.php(548):
         Rector\PhpParser\Printer\BetterStandardPrinter->pArray(Array, Array,
         14, 0, 'File', 'stmts', NULL)
         #5
         vendor/rector/rector/src/PhpParser/Printer/BetterStandardPrinter.php(82
         ): PhpParser\PrettyPrinterAbstract->printFormatPreserving(Array,
         Array, Array)
         #6 vendor/rector/rector/src/Application/FileProcessor.php(155):
         Rector\PhpParser\Printer\BetterStandardPrinter->printFormatPreserving(
         Array, Array, Array)
         #7 vendor/rector/rector/src/Application/FileProcessor.php(102):
         Rector\Application\FileProcessor->printFile(Object(Rector\ValueObject\
         Application\File), Object(Rector\ValueObject\Configuration),
         '/Users/cday/Pro...')
         #8
         vendor/rector/rector/src/Application/ApplicationFileProcessor.php(178):
         Rector\Application\FileProcessor->processFile(Object(Rector\ValueObjec
         t\Application\File), Object(Rector\ValueObject\Configuration))
         #9
         vendor/rector/rector/src/Application/ApplicationFileProcessor.php(152):
         Rector\Application\ApplicationFileProcessor->processFile(Object(Rector
         \ValueObject\Application\File),
         Object(Rector\ValueObject\Configuration))
         #10
         vendor/rector/rector/src/Application/ApplicationFileProcessor.php(128):
         Rector\Application\ApplicationFileProcessor->processFiles(Array,
         Object(Rector\ValueObject\Configuration), Object(Closure),
         Object(Closure))
         #11 vendor/rector/rector/src/Console/Command/ProcessCommand.php(172):
         Rector\Application\ApplicationFileProcessor->run(Object(Rector\ValueOb
         ject\Configuration),
         Object(RectorPrefix202511\Symfony\Component\Console\Input\ArgvInput))
         #12
         vendor/rector/rector/vendor/symfony/console/Command/Command.php(289):
         Rector\Console\Command\ProcessCommand->execute(Object(RectorPrefix2025
         11\Symfony\Component\Console\Input\ArgvInput),
         Object(RectorPrefix202511\Symfony\Component\Console\Output\ConsoleOutpu
         t))
         #13 vendor/rector/rector/vendor/symfony/console/Application.php(892):
         RectorPrefix202511\Symfony\Component\Console\Command\Command->run(Obje
         ct(RectorPrefix202511\Symfony\Component\Console\Input\ArgvInput),
         Object(RectorPrefix202511\Symfony\Component\Console\Output\ConsoleOutpu
         t))
         #14 vendor/rector/rector/vendor/symfony/console/Application.php(279):
         RectorPrefix202511\Symfony\Component\Console\Application->doRunCommand
         (Object(Rector\Console\Command\ProcessCommand),
         Object(RectorPrefix202511\Symfony\Component\Console\Input\ArgvInput),
         Object(RectorPrefix202511\Symfony\Component\Console\Output\ConsoleOutpu
         t))
         #15 vendor/rector/rector/src/Console/ConsoleApplication.php(60):
         RectorPrefix202511\Symfony\Component\Console\Application->doRun(Object
         (RectorPrefix202511\Symfony\Component\Console\Input\ArgvInput),
         Object(RectorPrefix202511\Symfony\Component\Console\Output\ConsoleOutpu
         t))
         #16 vendor/rector/rector/vendor/symfony/console/Application.php(162):
         Rector\Console\ConsoleApplication->doRun(Object(RectorPrefix202511\Sym
         fony\Component\Console\Input\ArgvInput),
         Object(RectorPrefix202511\Symfony\Component\Console\Output\ConsoleOutpu
         t))
         #17 vendor/rector/rector/bin/rector.php(130):
         RectorPrefix202511\Symfony\Component\Console\Application->run()
         #18 vendor/rector/rector/bin/rector(5):
         require_once('/Users/cday/Pro...')
         #19 vendor/bin/rector(119): include('/Users/cday/Pro...')
         #20 {main}". On line: 589
```
