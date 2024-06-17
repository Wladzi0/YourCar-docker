<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestClassRequiresCoversFixer;
use PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer;
use PhpCsFixer\Fixer\Whitespace\StatementIndentationFixer;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\CodingStandard\Fixer\Spacing\MethodChainingNewlineFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ECSConfig): void {
    $ECSConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    // run and fix, one by one
    $ECSConfig->sets([
        SetList::ARRAY,
        SetList::DOCBLOCK,
        SetList::PSR_12,
        SetList::DOCTRINE_ANNOTATIONS,
        SetList::COMMON,
        SetList::CLEAN_CODE,
        SetList::SYMPLIFY,
        SetList::CONTROL_STRUCTURES,
        SetList::SPACES,
        SetList::COMMENTS,
        SetList::NAMESPACES,
    ]);

    $ECSConfig->ruleWithConfiguration(ArraySyntaxFixer::class, [
        'syntax' => 'short',
    ]);

    $ECSConfig->ruleWithConfiguration(ConcatSpaceFixer::class, [
        'spacing' => 'one',
    ]);

    $ECSConfig->skip([
        YodaStyleFixer::class,
        PhpUnitTestClassRequiresCoversFixer::class,
        MethodChainingNewlineFixer::class,
        MultilineWhitespaceBeforeSemicolonsFixer::class,
        StatementIndentationFixer::class,
        LineLengthFixer::class,
        PhpdocTypesOrderFixer::class,
        PhpdocToCommentFixer::class,
    ]);
};