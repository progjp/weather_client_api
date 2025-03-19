<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1742402950,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.8',
  'metaExtensions' => 
  array (
    'symfonyDiContainer' => '319f34d76167e6b7f06ffb5a9ccff9b79845031ed4ea11227f74df13e1b27772',
  ),
  'phpVersion' => 80405,
  'projectConfig' => '{conditionalTags: {PHPStan\\Rules\\DisallowedConstructs\\DisallowedLooseComparisonRule: {phpstan.rules.rule: %strictRules.disallowedLooseComparison%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanAndRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanNotRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanOrRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInDoWhileConditionRule: {phpstan.rules.rule: %strictRules.booleansInLoopConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInElseIfConditionRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInIfConditionRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInTernaryOperatorRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInWhileConditionRule: {phpstan.rules.rule: %strictRules.booleansInLoopConditions%}, PHPStan\\Rules\\Cast\\UselessCastRule: {phpstan.rules.rule: %strictRules.uselessCast%}, PHPStan\\Rules\\Classes\\RequireParentConstructCallRule: {phpstan.rules.rule: %strictRules.requireParentConstructorCall%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedBacktickRule: {phpstan.rules.rule: %strictRules.disallowedBacktick%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedEmptyRule: {phpstan.rules.rule: %strictRules.disallowedEmpty%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedImplicitArrayCreationRule: {phpstan.rules.rule: %strictRules.disallowedImplicitArrayCreation%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedShortTernaryRule: {phpstan.rules.rule: %strictRules.disallowedShortTernary%}, PHPStan\\Rules\\ForeachLoop\\OverwriteVariablesWithForeachRule: {phpstan.rules.rule: %strictRules.overwriteVariablesWithLoop%}, PHPStan\\Rules\\ForLoop\\OverwriteVariablesWithForLoopInitRule: {phpstan.rules.rule: %strictRules.overwriteVariablesWithLoop%}, PHPStan\\Rules\\Functions\\ArrayFilterStrictRule: {phpstan.rules.rule: %strictRules.strictArrayFilter%}, PHPStan\\Rules\\Functions\\ClosureUsesThisRule: {phpstan.rules.rule: %strictRules.closureUsesThis%}, PHPStan\\Rules\\Methods\\WrongCaseOfInheritedMethodRule: {phpstan.rules.rule: %strictRules.matchingInheritedMethodNames%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPostDecrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPostIncrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPreDecrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPreIncrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticAdditionRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticDivisionRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticExponentiationRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticModuloRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticMultiplicationRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticSubtractionRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsRule: {phpstan.rules.rule: %strictRules.dynamicCallOnStaticMethod%}, PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsCallableRule: {phpstan.rules.rule: %strictRules.dynamicCallOnStaticMethod%}, PHPStan\\Rules\\StrictCalls\\StrictFunctionCallsRule: {phpstan.rules.rule: %strictRules.strictFunctionCalls%}, PHPStan\\Rules\\SwitchConditions\\MatchingTypeInSwitchCaseConditionRule: {phpstan.rules.rule: %strictRules.switchConditionsMatchingType%}, PHPStan\\Rules\\VariableVariables\\VariableMethodCallRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableMethodCallableRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallableRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableStaticPropertyFetchRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableVariablesRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariablePropertyFetchRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\Methods\\IllegalConstructorMethodCallRule: {phpstan.rules.rule: %strictRules.illegalConstructorMethodCall%}, PHPStan\\Rules\\Methods\\IllegalConstructorStaticCallRule: {phpstan.rules.rule: %strictRules.illegalConstructorMethodCall%}}, parameters: {strictRulesInstalled: true, polluteScopeWithLoopInitialAssignments: false, polluteScopeWithAlwaysIterableForeach: false, polluteScopeWithBlock: false, checkDynamicProperties: true, checkExplicitMixedMissingReturn: true, checkFunctionNameCase: true, checkInternalClassCaseSensitivity: true, reportMaybesInMethodSignatures: true, reportStaticMethodSignatures: true, reportMaybesInPropertyPhpDocTypes: true, reportWrongPhpDocTypeInVarTag: true, strictRules: {allRules: true, disallowedLooseComparison: %strictRules.allRules%, booleansInConditions: %strictRules.allRules%, booleansInLoopConditions: [%strictRules.allRules%, %featureToggles.bleedingEdge%], uselessCast: %strictRules.allRules%, requireParentConstructorCall: %strictRules.allRules%, disallowedBacktick: %strictRules.allRules%, disallowedEmpty: %strictRules.allRules%, disallowedImplicitArrayCreation: %strictRules.allRules%, disallowedShortTernary: %strictRules.allRules%, overwriteVariablesWithLoop: %strictRules.allRules%, closureUsesThis: %strictRules.allRules%, matchingInheritedMethodNames: %strictRules.allRules%, numericOperandsInArithmeticOperators: %strictRules.allRules%, strictFunctionCalls: %strictRules.allRules%, dynamicCallOnStaticMethod: %strictRules.allRules%, switchConditionsMatchingType: %strictRules.allRules%, noVariableVariables: %strictRules.allRules%, strictArrayFilter: %strictRules.allRules%, illegalConstructorMethodCall: %strictRules.allRules%}, dynamicConstantNames: [Symfony\\Component\\HttpKernel\\Kernel::VERSION_ID], exceptions: {uncheckedExceptionClasses: [Symfony\\Component\\Console\\Exception\\InvalidArgumentException]}, symfony: {containerXmlPath: null, constantHassers: true, consoleApplicationLoader: null}, stubFiles: [/var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Psr/Cache/CacheException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Psr/Cache/CacheItemInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Psr/Cache/InvalidArgumentException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/Controller/AbstractController.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/KernelBrowser.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/Test/KernelTestCase.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/FrameworkBundle/Test/TestContainer.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/SecurityBundle/DependencyInjection/Security/Factory/AuthenticatorFactoryInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Bundle/SecurityBundle/DependencyInjection/Security/Factory/FirewallListenerFactoryInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Command.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Exception/ExceptionInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Exception/InvalidArgumentException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Exception/LogicException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Helper/HelperInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Console/Output/OutputInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/DependencyInjection/ContainerBuilder.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/DependencyInjection/Extension/ExtensionInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/EventDispatcherInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/EventSubscriberInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/EventDispatcher/GenericEvent.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/AbstractType.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/ChoiceList/Loader/ChoiceLoaderInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/Exception/ExceptionInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/Exception/RuntimeException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/Exception/TransformationFailedException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/DataTransformerInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormBuilderInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormConfigBuilderInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormConfigInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormFactoryInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormTypeExtensionInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormTypeInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Form/FormView.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/Cookie.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/HeaderBag.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/ParameterBag.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/HttpFoundation/Session.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Messenger/StampInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Messenger/Envelope.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/OptionsResolver/Exception/InvalidOptionsException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/OptionsResolver/Options.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Process/Exception/LogicException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Process/Process.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/PropertyAccess/Exception/AccessException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/PropertyAccess/Exception/ExceptionInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/PropertyAccess/Exception/InvalidArgumentException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/PropertyAccess/Exception/RuntimeException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/PropertyAccess/Exception/UnexpectedTypeException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/PropertyAccess/PropertyAccessorInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/PropertyAccess/PropertyPathInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Security/Acl/Model/AclInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Security/Acl/Model/EntryInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Security/Core/Authentication/Token/TokenInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Security/Core/Authorization/Voter/Voter.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Security/Core/Authorization/Voter/VoterInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/ContextAwareDecoderInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/DecoderInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Encoder/EncoderInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Exception/BadMethodCallException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Exception/CircularReferenceException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Exception/ExceptionInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Exception/ExtraAttributesException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Exception/InvalidArgumentException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Exception/LogicException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Exception/RuntimeException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Exception/UnexpectedValueException.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/ContextAwareDenormalizerInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/ContextAwareNormalizerInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/DenormalizableInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/DenormalizerInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/NormalizableInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Serializer/Normalizer/NormalizerInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/Constraint.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/Constraints/Composite.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/Constraints/Compound.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/ConstraintViolationInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Component/Validator/ConstraintViolationListInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/CacheInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/CallbackInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Cache/ItemInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Symfony/Contracts/Service/ServiceSubscriberInterface.stub, /var/www/symfony/app/vendor/phpstan/phpstan-symfony/stubs/Twig/Node/Node.stub], typeAliases: null, tmpDir: /var/www/symfony/app/build/cache, fileExtensions: [php, dist], paths: [/var/www/symfony/app/src, /var/www/symfony/app/config], excludePaths: {analyse: [/var/www/symfony/app/src/Util, /var/www/symfony/app/config]}, level: max, scanDirectories: [/var/www/symfony/app/var/cache/dev/Symfony/Config], treatPhpDocTypesAsCertain: false}, rules: [PHPStan\\Rules\\Symfony\\ContainerInterfacePrivateServiceRule, PHPStan\\Rules\\Symfony\\ContainerInterfaceUnknownServiceRule, PHPStan\\Rules\\Symfony\\UndefinedArgumentRule, PHPStan\\Rules\\Symfony\\InvalidArgumentDefaultValueRule, PHPStan\\Rules\\Symfony\\UndefinedOptionRule, PHPStan\\Rules\\Symfony\\InvalidOptionDefaultValueRule], services: {{class: PHPStan\\Rules\\BooleansInConditions\\BooleanRuleHelper}, {class: PHPStan\\Rules\\Operators\\OperatorRuleHelper}, {class: PHPStan\\Rules\\VariableVariables\\VariablePropertyFetchRule, arguments: {universalObjectCratesClasses: %universalObjectCratesClasses%}}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedLooseComparisonRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanAndRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanNotRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanOrRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInDoWhileConditionRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInElseIfConditionRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInIfConditionRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInTernaryOperatorRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInWhileConditionRule}, {class: PHPStan\\Rules\\Cast\\UselessCastRule, arguments: {treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%, treatPhpDocTypesAsCertainTip: %tips.treatPhpDocTypesAsCertain%}}, {class: PHPStan\\Rules\\Classes\\RequireParentConstructCallRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedBacktickRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedEmptyRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedImplicitArrayCreationRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedShortTernaryRule}, {class: PHPStan\\Rules\\ForeachLoop\\OverwriteVariablesWithForeachRule}, {class: PHPStan\\Rules\\ForLoop\\OverwriteVariablesWithForLoopInitRule}, {class: PHPStan\\Rules\\Functions\\ArrayFilterStrictRule, arguments: {treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%, checkNullables: %checkNullables%, treatPhpDocTypesAsCertainTip: %tips.treatPhpDocTypesAsCertain%}}, {class: PHPStan\\Rules\\Functions\\ClosureUsesThisRule}, {class: PHPStan\\Rules\\Methods\\WrongCaseOfInheritedMethodRule}, {class: PHPStan\\Rules\\Methods\\IllegalConstructorMethodCallRule}, {class: PHPStan\\Rules\\Methods\\IllegalConstructorStaticCallRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPostDecrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPostIncrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPreDecrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPreIncrementRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticAdditionRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticDivisionRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticExponentiationRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticModuloRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticMultiplicationRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticSubtractionRule}, {class: PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsRule}, {class: PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsCallableRule}, {class: PHPStan\\Rules\\StrictCalls\\StrictFunctionCallsRule}, {class: PHPStan\\Rules\\SwitchConditions\\MatchingTypeInSwitchCaseConditionRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableMethodCallRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableMethodCallableRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallableRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableStaticPropertyFetchRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableVariablesRule}, {factory: PHPStan\\Symfony\\ConsoleApplicationResolver, arguments: {consoleApplicationLoader: %symfony.consoleApplicationLoader%}}, symfony.serviceMapFactory: {class: PHPStan\\Symfony\\ServiceMapFactory, factory: PHPStan\\Symfony\\XmlServiceMapFactory, arguments: {containerXmlPath: %symfony.containerXmlPath%}}, {factory: {arguments: []}}, symfony.parameterMapFactory: {class: PHPStan\\Symfony\\ParameterMapFactory, factory: PHPStan\\Symfony\\XmlParameterMapFactory, arguments: {containerXmlPath: %symfony.containerXmlPath%}}, {factory: {arguments: []}}, symfony.messageMapFactory: {class: PHPStan\\Symfony\\MessageMapFactory, factory: PHPStan\\Symfony\\MessageMapFactory}, {factory: {arguments: []}}, {factory: {arguments: [Symfony\\Component\\DependencyInjection\\ContainerInterface, %symfony.constantHassers%]}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: {arguments: [Psr\\Container\\ContainerInterface, %symfony.constantHassers%]}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: {arguments: [Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller, %symfony.constantHassers%]}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: {arguments: [Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController, %symfony.constantHassers%]}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: {arguments: [Symfony\\Component\\DependencyInjection\\ContainerInterface]}, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {factory: {arguments: [Psr\\Container\\ContainerInterface]}, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {factory: {arguments: [Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller]}, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {factory: {arguments: [Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController]}, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {factory: PHPStan\\Type\\Symfony\\RequestDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\RequestTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {factory: PHPStan\\Type\\Symfony\\InputBagDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\HeaderBagDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: {arguments: [Symfony\\Component\\Serializer\\SerializerInterface, deserialize]}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: {arguments: [Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface, denormalize]}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\EnvelopeReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Type\\Symfony\\MessengerHandleTraitReturnTypeExtension, tags: [phpstan.broker.expressionTypeResolverExtension]}, {factory: PHPStan\\Type\\Symfony\\InputInterfaceGetArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\ArgumentTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {factory: PHPStan\\Type\\Symfony\\InputInterfaceHasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\GetOptionTypeHelper}, {factory: PHPStan\\Type\\Symfony\\InputInterfaceGetOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\InputInterfaceGetOptionsDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\OptionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {factory: PHPStan\\Type\\Symfony\\InputInterfaceHasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\Config\\ArrayNodeDefinitionPrototypeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\Config\\ReturnParentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Symfony\\Component\\Config\\Definition\\Builder\\ExprBuilder, methods: [end]}}, {factory: PHPStan\\Type\\Symfony\\Config\\PassParentObjectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Symfony\\Component\\Config\\Definition\\Builder\\NodeBuilder, methods: [arrayNode, scalarNode, booleanNode, integerNode, floatNode, enumNode, variableNode]}}, {factory: PHPStan\\Type\\Symfony\\Config\\ReturnParentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Symfony\\Component\\Config\\Definition\\Builder\\NodeBuilder, methods: [end]}}, {factory: PHPStan\\Type\\Symfony\\Config\\PassParentObjectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition, methods: [children, validate, beforeNormalization]}}, {factory: PHPStan\\Type\\Symfony\\Config\\ReturnParentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition, methods: [end]}}, {factory: PHPStan\\Type\\Symfony\\Config\\TreeBuilderDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\Config\\TreeBuilderGetRootNodeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Type\\Symfony\\KernelInterfaceDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: {arguments: [Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface, get, has, %symfony.constantHassers%]}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: {arguments: [Symfony\\Component\\DependencyInjection\\ContainerInterface, getParameter, hasParameter, %symfony.constantHassers%]}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: {arguments: [Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController, getParameter, null, %symfony.constantHassers%]}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: {arguments: [Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller, getParameter, null, %symfony.constantHassers%]}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Symfony\\InputBagStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: PHPStan\\Symfony\\PasswordAuthenticatedUserStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: PHPStan\\Symfony\\SymfonyDiagnoseExtension, tags: [phpstan.diagnoseExtension]}, {factory: PHPStan\\Type\\Symfony\\Form\\FormInterfaceDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\CommandGetHelperDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\ResponseHeaderBagDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\InputBagTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {class: PHPStan\\Symfony\\RequiredAutowiringExtension, tags: [phpstan.properties.readWriteExtension, phpstan.additionalConstructorsExtension]}, {factory: PHPStan\\Type\\Symfony\\CacheInterfaceGetDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {factory: PHPStan\\Type\\Symfony\\ExtensionGetConfigurationReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Symfony\\SymfonyContainerResultCacheMetaExtension, tags: [phpstan.resultCacheMetaExtension]}}}',
  'analysedPaths' => 
  array (
    0 => '/var/www/symfony/app/src',
    1 => '/var/www/symfony/app/config',
  ),
  'scannedFiles' => 
  array (
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/AnnotationsConfig.php' => 'f745ab0c41c4be34d6f370f3eb5e3f948b0e32e1',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/AssetMapperConfig.php' => '6575a332167739333b4b681821488aa815dac9a1',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Assets/PackageConfig.php' => '63554c418d14d5bc832a40d8d3cf07b226e10c91',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/AssetsConfig.php' => '3fdf0097394d51f09bdf97fed53e7154470b9888',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Cache/PoolConfig.php' => '967cbcc0a11b2514f045570179152bf3ebdea7fa',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/CacheConfig.php' => '44bb358dd27a916a9a34ef9859af9d98b4584c49',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/CsrfProtectionConfig.php' => '7a365dca0b9559a8810adc6e6e94adca2f909703',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/EsiConfig.php' => 'e9f965ebd32df0e710137796bc19aabf47e6fc11',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/ExceptionConfig.php' => 'a7c7fc699d549c21ba18520b798ef97784f91f95',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Form/CsrfProtectionConfig.php' => '0ef310f26cf5adb123ea74be81670a704276d561',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/FormConfig.php' => 'a539a10a34727285a331ed9d142c65e722b9ff2f',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/FragmentsConfig.php' => '9ffbae418555bdccef30637fe52ca8bce976b72d',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/HtmlSanitizer/SanitizerConfig.php' => 'f2bf1aa0da12b104f4c5626162ea45a98afc0665',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/HtmlSanitizerConfig.php' => 'def653d0672ed92e80477f3c14be32ca238780f6',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/HttpCacheConfig.php' => '1f75aafb8046490b8820c23bbd5785cb7f9cc24a',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/HttpClient/DefaultOptions/PeerFingerprintConfig.php' => '8c6cebb486cd448459691d704082fdab2bd7b21b',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/HttpClient/DefaultOptions/RetryFailed/HttpCodeConfig.php' => '1dd17902995be5b78104c5ca833de1e119c78df4',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/HttpClient/DefaultOptions/RetryFailedConfig.php' => '7115f99ecc43d3820fe798505eb4f19237fe362a',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/HttpClient/DefaultOptionsConfig.php' => '222b26c05277965c26cf565c27d62b6dcd9da890',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/HttpClient/ScopedClientConfig.php' => 'ff195263c02801be93a07bf9790f0f06d47740a3',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/HttpClient/ScopedClientConfig/PeerFingerprintConfig.php' => 'b9f8efc322869f8034f8aa1ea8f4774e9127046b',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/HttpClient/ScopedClientConfig/RetryFailed/HttpCodeConfig.php' => '89ffe9e4b6fce0f3b36daf275c3d9f56e68f7d75',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/HttpClient/ScopedClientConfig/RetryFailedConfig.php' => 'e70af31744e1188762fdbedcc8849a12e797d072',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/HttpClientConfig.php' => '48e369ff938293ed6c84551b4aaf00ef8b8daae5',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/LockConfig.php' => '57f0b04a753ec82e7dc4356aa4309f0f8f01b222',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Mailer/EnvelopeConfig.php' => '142338f5de8d232de12b7be6b4d42dad0550e3a4',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Mailer/HeaderConfig.php' => '5fdd33ec25b8abedf0a8890229bc8d23fad0120d',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/MailerConfig.php' => 'b8c901d4e38c72b495c57f33bacadf669b431c24',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Messenger/BusConfig.php' => 'fbff9b15fce0d9a8108cad1d2e281f04825ca874',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Messenger/BusConfig/DefaultMiddlewareConfig.php' => 'be33a54e2e44437a3a2e2be843078644cb86e375',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Messenger/BusConfig/MiddlewareConfig.php' => '8360a199a5f93d197fe0dcb574d1d4f5650aa2c0',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Messenger/RoutingConfig.php' => 'df7a9583c62cdf7582ffe97790f55cd9b45d44ad',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Messenger/Serializer/SymfonySerializerConfig.php' => 'b1061a7b78b6543532d5f6f023bafbb78e1e4c5b',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Messenger/SerializerConfig.php' => '675745d7f51913b8af87558fc2c0ba7a8277fb59',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Messenger/TransportConfig.php' => '1879fa0cd414c70d16f951fb42cb3bfe0907802c',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Messenger/TransportConfig/RetryStrategyConfig.php' => '2aca47f221c058e73817e5f8c0e629e57a3feb36',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/MessengerConfig.php' => '4686c4ca26bc95f5b593c5e9a74357d17b6a48ea',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Notifier/AdminRecipientConfig.php' => '6f55996259da3eab7cea3735bf057424b0ea8933',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/NotifierConfig.php' => '4b453626076a9ea5afcd8430800db93be9bf7e86',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/PhpErrorsConfig.php' => 'f746f4e8d2e94b6ba33319a509138f6a5c91cf67',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/ProfilerConfig.php' => 'fcee6d104a6bba8f663deb60ceec298db66e2610',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/PropertyAccessConfig.php' => 'd55fdf25ec02deb563b5f84038ae16fd456d6b89',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/PropertyInfoConfig.php' => 'e7ff483124a90ac8e35bf0f1e6ce6aeed7e1893b',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/RateLimiter/LimiterConfig.php' => '76e885d9b5dc89d780751c5423bc01af9f7bb244',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/RateLimiter/LimiterConfig/RateConfig.php' => 'c593ef703c5508a716c87975c0316a4da2426790',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/RateLimiterConfig.php' => 'ed7e3fc1e5755845663a761d298b95367d040a44',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/RemoteeventConfig.php' => '27aa11d94cb514f914cc4b80c97bdeb83acfddcd',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/RequestConfig.php' => '07e53e85ba25bba1c0f3ef83d0923464cedb8cbd',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/RouterConfig.php' => '4bb533d1c82d63314b15369ee43eb0397f0726f6',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/SchedulerConfig.php' => '19cc3194d5bc2ef5be732be094b9614f7d654613',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/SecretsConfig.php' => '2b138a8870a974ddf36c43fd9ce78217c851aec4',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/SemaphoreConfig.php' => '624b4a38170021542449181ff6916bfffa5e65bd',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Serializer/MappingConfig.php' => '28dd3c8f6a1b4c6a24ccee35cc955019ce2b1524',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Serializer/NamedSerializerConfig.php' => '12be0ba58e160ae7ccf4528bc0e919c9ac80fe79',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/SerializerConfig.php' => '1775e421d939fdbf8cce436dfb61b631f013e2c3',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/SessionConfig.php' => '0833db4c384f69b349ca5e035890fad82d521169',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/SsiConfig.php' => '408ca5a71138ed545cbfebbb4dced14ac26c90c3',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Translator/ProviderConfig.php' => '49a5a9a6e5b68d6f2655357db8afa5789222a469',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Translator/PseudoLocalizationConfig.php' => '705b2dcde4bb227ce39c002af9cd60ffb7906ddb',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/TranslatorConfig.php' => '558245ea5721214405845304de1697d92e8c489c',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/TypeInfoConfig.php' => 'd7a0ce75eccfa7aa1059d36048780f191509ca50',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/UidConfig.php' => '036600c1b67fdcc6596c739b3d9b8a50639d27fc',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Validation/AutoMappingConfig.php' => 'c1e22c0d175c77b1982942804b24c110a33952d5',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Validation/MappingConfig.php' => 'd38d6a144208eed1fe06b9aabb48066815cdb38b',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Validation/NotCompromisedPasswordConfig.php' => 'b158c913b14e3287ed325dbd7790a578fcbe9b52',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/ValidationConfig.php' => '29b404d948c3f3c9483c58d68e86246ea0b16cc2',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/WebLinkConfig.php' => '19aeede010c033f4d1c9b83348718abe03ea3683',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Webhook/RoutingConfig.php' => '731003c45aebfae4c0944fa0aaf5818aa9fcbc88',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/WebhookConfig.php' => '28c7bd4877a0c0819df30296aa1b629e08830cf8',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Workflows/WorkflowsConfig.php' => '9a1d8565229bd24e424da4fcd748bab29e764260',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Workflows/WorkflowsConfig/AuditTrailConfig.php' => '7ca311d19668a8a46b232b5840baadd311f5f34b',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Workflows/WorkflowsConfig/MarkingStoreConfig.php' => 'efd13fedfb0200e28e79acd5aa077fb5b70650ba',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Workflows/WorkflowsConfig/PlaceConfig.php' => '9d78fe3bd2dc3094904a028759b20e8a1661e66a',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/Workflows/WorkflowsConfig/TransitionConfig.php' => '4ae85e01acf112a99abde70267d12469a33fd82e',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Framework/WorkflowsConfig.php' => '2694ad6e957e9bb7ec4087512a14cc053b4586ba',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/FrameworkConfig.php' => '8d3e1ef658efb1434c0c952e33a9a20bb4d0aade',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Monolog/HandlerConfig.php' => '693dea21f9770a43f1ef00ae7de831be2116ec96',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Monolog/HandlerConfig/ChannelsConfig.php' => '0c20e92ede413b963f0a3bac8dbd58871f68ee71',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Monolog/HandlerConfig/ElasticsearchConfig.php' => '2e5a2a91ace9f9406a4c3207216541efbf5970f6',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Monolog/HandlerConfig/EmailPrototypeConfig.php' => '596a30be07bc5acef45facb4e992c1ee71e0ea17',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Monolog/HandlerConfig/ExcludedHttpCodeConfig.php' => '1d6169277e446134d97454b6f851b89b2dcfb04f',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Monolog/HandlerConfig/MongoConfig.php' => 'f2b5292e36e53fa122d3b8d02572984bca92d3bb',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Monolog/HandlerConfig/PredisConfig.php' => 'b9dce07b2e76410aad2f46241793d2c33b5e3141',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Monolog/HandlerConfig/ProcessPsr3MessagesConfig.php' => '79bc1310e6430dc29b94008a7b9c39418ce1d66d',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Monolog/HandlerConfig/PublisherConfig.php' => '939a58ee7b0ce451e3125f7d0dda73f11c7b32cf',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Monolog/HandlerConfig/RedisConfig.php' => '7c0ac038a5f4c00eeeb1eb34f5b1206839dd8c39',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Monolog/HandlerConfig/VerbosityLevelsConfig.php' => 'c3470951c266cee249e42e551526f3662568ba8c',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/MonologConfig.php' => '185d8482365df1029983153380e7416234739084',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/NelmioApiDoc/AreasConfig.php' => '29863dbd6732f0b422b444d34f1e220ac5cfde57',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/NelmioApiDoc/AreasConfig/CacheConfig.php' => '0d39aa1f7b6aa80267796fc9fa7a14fb83fac82b',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/NelmioApiDoc/CacheConfig.php' => '72f9a33821939ce3cf28fe5f81995f68f04c1d19',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/NelmioApiDoc/HtmlConfig/RedoclyConfigConfig.php' => '667621a5ab8dd88bb61d15b054082ebd2ffd17ca',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/NelmioApiDoc/HtmlConfig/StoplightConfigConfig.php' => 'd81760a23cd1458449870748de34b877e0e2061d',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/NelmioApiDoc/HtmlConfig/SwaggerUiConfigConfig.php' => 'afb0214d2244511fd263b23f4caf86fc76bec3e9',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/NelmioApiDoc/HtmlConfigConfig.php' => 'cc8c663426bb070174b1c33a064fda5ca0ce8053',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/NelmioApiDoc/Models/NamesConfig.php' => '85c2a2496d2ae9a68ecd6eac0020842eeab5e28c',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/NelmioApiDoc/ModelsConfig.php' => 'd0b55107251f1ce787be1fa68207aa6fd4d7ca5c',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/NelmioApiDocConfig.php' => '201d0afa2cd1eb9d989a40d20a866d386f864dbc',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Twig/DateConfig.php' => 'b8831a15ba7e8cf9fb05364a5b4a95bade97f6c2',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Twig/GlobalConfig.php' => 'ac95fe9cd82b1f511ac4dfa38faf478c41cccd4d',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Twig/MailerConfig.php' => 'cb06df694591eda7adb7785ebce2b33c10f8c609',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/Twig/NumberFormatConfig.php' => 'af9f4c44b4c263c7e8a463b82f6e939671502ea1',
    '/var/www/symfony/app/var/cache/dev/Symfony/Config/TwigConfig.php' => '8b55198407d10cc748017e0d33e5de7784fb454e',
  ),
  'composerLocks' => 
  array (
    '/var/www/symfony/app/composer.lock' => '225ccb9346d39c7f93f0bee1b1e4731aa0a04a6b',
  ),
  'composerInstalled' => 
  array (
    '/var/www/symfony/app/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.4',
          'version' => '1.1.4.0',
          'reference' => '31610dbb31faa98e6b5447b62340826f54fbc4e9',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/instantiator' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'c6222283fa3f4ac679f8b9ced9a4e23f163e80d0',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../doctrine/instantiator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'masterminds/html5' => 
        array (
          'pretty_version' => '2.9.0',
          'version' => '2.9.0.0',
          'reference' => 'f5ac2c0b0a2eefca70b2ce32a5809992227e75a6',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../masterminds/html5',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.8.1',
          'version' => '3.8.1.0',
          'reference' => 'aef6ee73a77a66e404dd6540934a9ef1b3c855b4',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.0',
          'version' => '1.13.0.0',
          'reference' => '024473a478be9df5fdaca2c793f2232fe788e414',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nelmio/api-doc-bundle' => 
        array (
          'pretty_version' => 'v5.0.0',
          'version' => '5.0.0.0',
          'reference' => '44a40c31fd568cf5c6c7294a122166d613a5fd9c',
          'type' => 'symfony-bundle',
          'install_path' => '/var/www/symfony/app/vendor/composer/../nelmio/api-doc-bundle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.4.0',
          'version' => '5.4.0.0',
          'reference' => '447a020a1f875a434d62f2a401f53b82a396e494',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-http/async-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
          ),
        ),
        'php-http/client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '*',
          ),
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '5.6.1',
          'version' => '5.6.1.0',
          'reference' => 'e5e784149a09bd69d9a5e3b01c5cbd2e2bd653d8',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.10.0',
          'version' => '1.10.0.0',
          'reference' => '679e3ce485b99e84c775d28e2e96fade9a7fb50a',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '9b30d6fd026b2c132b3985ce6b23bec09ab3aa68',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.8',
          'version' => '2.1.8.0',
          'reference' => 'f9adff3b87c03b12cc7e46a30a524648e497758f',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-strict-rules' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '3e139cbe67fafa3588e1dbe27ca50f31fdb6236a',
          'type' => 'phpstan-extension',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phpstan/phpstan-strict-rules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-symfony' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '8f0edc7ea5a8769cdef8aa67b7eeec4a8a9f3746',
          'type' => 'phpstan-extension',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phpstan/phpstan-symfony',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '9.2.32',
          'version' => '9.2.32.0',
          'reference' => '85402a822d1ecf1db1096959413d35e1c37cf1a5',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '3.0.6',
          'version' => '3.0.6.0',
          'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '3.1.1',
          'version' => '3.1.1.0',
          'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '5.0.3',
          'version' => '5.0.3.0',
          'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '9.6.22',
          'version' => '9.6.22.0',
          'reference' => 'f80235cb4d3caa59ae09be3adf1ded27521d1a9c',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../psr/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => '2b56bea83a09de3ac06bb18b92f068e60cc6f50b',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '1.0.8',
          'version' => '1.0.8.0',
          'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '4.0.8',
          'version' => '4.0.8.0',
          'reference' => 'fa0f136dd2334583309d32b62544682ee972b51a',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '25f207c40d62b8b7aa32f5ab026c53561964053a',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '4.0.6',
          'version' => '4.0.6.0',
          'reference' => 'ba01945089c3a293b01ba9badc29ad55b106b0bc',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '5.1.5',
          'version' => '5.1.5.0',
          'reference' => '830c43a844f1f8d5b7a1f6d6076b784454d8b7ed',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '4.0.6',
          'version' => '4.0.6.0',
          'reference' => '78c00df8f170e02473b682df15bfcdacc3d32d72',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '5.0.7',
          'version' => '5.0.7.0',
          'reference' => 'bca7df1f32ee6fe93b4d4a9abbf69e13a4ada2c9',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '1.0.4',
          'version' => '1.0.4.0',
          'reference' => 'e1e4a170560925c26d424b6a03aed157e7dcc5c5',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '4.0.5',
          'version' => '4.0.5.0',
          'reference' => 'e75bd0f07204fec2a0af9b0f3cfe97d05f92efc1',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/resource-operations' => 
        array (
          'pretty_version' => '3.0.4',
          'version' => '3.0.4.0',
          'reference' => '05d5692a7993ecccd56a03e40cd7e5b09b1d404e',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/resource-operations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '75e2c2a32f5e0b3aef905b9ed0b179b953b3d7c7',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'squizlabs/php_codesniffer' => 
        array (
          'pretty_version' => '3.12.0',
          'version' => '3.12.0.0',
          'reference' => '2d1b63db139c3c6ea0c927698e5160f8b3b8d630',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../squizlabs/php_codesniffer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/asset' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => 'cb926cd59fefa1f9b4900b3695f0f846797ba5c0',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/asset',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/browser-kit' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '8ce0ee23857d87d5be493abba2d52d1f9e49da61',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/browser-kit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/cache' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => 'd33cd9e14326e14a4145c21e600602eaf17cc9e7',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/cache-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '15a4f8e5cd3bce9aeafc882b1acab39ec8de2c1b',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/cache-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0|3.0',
          ),
        ),
        'symfony/config' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => '7716594aaae91d9141be080240172a92ecca4d44',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.2.1',
          'version' => '7.2.1.0',
          'reference' => 'fefcc18c0f5d0efe3ab3152f15857298868dc2c3',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '601a5ce9aaad7bf10797e3663faefce9e26c24e2',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/dependency-injection' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => 'f0a1614cccb4b8431a97076f9debc08ddca321ca',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/dependency-injection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '74c71c939a79f7d5bf3c1ce9f5ea37ba0114c6f6',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/dom-crawler' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '19cc7b08efe9ad1ab1b56e0948e8d02e15ed3ef7',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/dom-crawler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/dotenv' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '28347a897771d0c28e99b75166dd2689099f3045',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/dotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => 'aabf79938aa795350c07ce6464dd1985607d95d5',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '910c5db85a5356d0fea57680defec4e99eb9c8c1',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '7642f5e970b672283b7823222ae8ef8bbc160b9f',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/filesystem' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => 'b8dce482de9d7c9fe2891155035a7248ab5c7fdb',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/filesystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.2.2',
          'version' => '7.2.2.0',
          'reference' => '87a71856f2f56e4100373e92529eed3171695cfb',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/flex' => 
        array (
          'pretty_version' => 'v2.5.0',
          'version' => '2.5.0.0',
          'reference' => '8ce1acd9842abe0e9b4c4a0bd3f259859516c018',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/flex',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/framework-bundle' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '6d6614378cd8128eed0a037ce6ac51a26c5aaed5',
          'type' => 'symfony-bundle',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/framework-bundle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-client' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '78981a2ffef6437ed92d4d7e2a86a82f256c6dc6',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-client-contracts' => 
        array (
          'pretty_version' => 'v3.5.2',
          'version' => '3.5.2.0',
          'reference' => 'ee8d807ab20fcb51267fdace50fbe3494c31e645',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/http-client-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '3.0',
          ),
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => 'ee1b504b8926198be89d05e5b6fc4c3810c090f0',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '9f1103734c5789798fefb90e91de4586039003ed',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/monolog-bridge' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => 'bbae784f0456c5a87c89d7c1a3fcc9cbee976c1d',
          'type' => 'symfony-bridge',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/monolog-bridge',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/monolog-bundle' => 
        array (
          'pretty_version' => 'v3.10.0',
          'version' => '3.10.0.0',
          'reference' => '414f951743f4aa1fd0f5bf6a0e9c16af3fe7f181',
          'type' => 'symfony-bundle',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/monolog-bundle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/options-resolver' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '7da8fbac9dcfef75ffc212235d76b2754ce0cf50',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/options-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/phpunit-bridge' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '2bbde92ab25a0e2c88160857af7be9db5da0d145',
          'type' => 'symfony-bridge',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/phpunit-bridge',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'symfony/polyfill-iconv' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '85181ba99b2345b0ef10ce42ecac37612d9fd341',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php72' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'symfony/polyfill-php73' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'symfony/polyfill-php74' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'symfony/polyfill-php80' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'symfony/polyfill-php81' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'symfony/polyfill-php82' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '2fb86d65e2d424369ad2905e83b236a8805ba491',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/property-info' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => 'dedb118fd588a92f226b390250b384d25f4192fe',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/property-info',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => 'ee9a67edc6baa33e5fae662f94f91fd262930996',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/runtime' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => '8e8d09bd69b7f6c0260dd3d58f37bd4fbdeab5ad',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/runtime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => 'e53260aabf78fb3d63f8d79d69ece59f80d5eda0',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0|3.0',
          ),
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '446e0d146f991dde3e73f45f2c97a9faad773c82',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '4667ff3bd513750603a09c8dedbea942487fb07c',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/twig-bridge' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '45c00afd4c9accf00a91215067c2858e5a9a3c4e',
          'type' => 'symfony-bridge',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/twig-bridge',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/twig-bundle' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => 'cd2be4563afaef5285bb6e0a06c5445e644a5c01',
          'type' => 'symfony-bundle',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/twig-bundle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/type-info' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '269344575181c326781382ed53f7262feae3c6a4',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/type-info',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => '82b478c69745d8878eb60f9a049a4d584996f73a',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-exporter' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '4ede73aa7a73d81506002d2caadbbdad1ef5b69a',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/var-exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => 'ac238f173df0c9c1120f862d0f599e17535a87ec',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'twig/twig' => 
        array (
          'pretty_version' => 'v3.20.0',
          'version' => '3.20.0.0',
          'reference' => '3468920399451a384bef53cf7996965f7cd40183',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../twig/twig',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'zircote/swagger-php' => 
        array (
          'pretty_version' => '5.0.6',
          'version' => '5.0.6.0',
          'reference' => 'ea60f1439aa4fefba230a4386a403eeb1ee52f08',
          'type' => 'library',
          'install_path' => '/var/www/symfony/app/vendor/composer/../zircote/swagger-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'phar:///var/www/symfony/app/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///var/www/symfony/app/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///var/www/symfony/app/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///var/www/symfony/app/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'Zend OPcache',
    7 => 'ctype',
    8 => 'curl',
    9 => 'date',
    10 => 'dom',
    11 => 'exif',
    12 => 'fileinfo',
    13 => 'filter',
    14 => 'gd',
    15 => 'hash',
    16 => 'iconv',
    17 => 'intl',
    18 => 'json',
    19 => 'libxml',
    20 => 'mbstring',
    21 => 'mysqlnd',
    22 => 'openssl',
    23 => 'pcre',
    24 => 'pdo_mysql',
    25 => 'pdo_pgsql',
    26 => 'pdo_sqlite',
    27 => 'pgsql',
    28 => 'posix',
    29 => 'random',
    30 => 'readline',
    31 => 'session',
    32 => 'sodium',
    33 => 'sqlite3',
    34 => 'standard',
    35 => 'tokenizer',
    36 => 'xml',
    37 => 'xmlreader',
    38 => 'xmlwriter',
    39 => 'xsl',
    40 => 'zip',
    41 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => 'max',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/var/www/symfony/app/src/Application/Feature/Weather/WeatherCityCommand.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'App\\Application\\Feature\\Weather\\WeatherCityCommand',
       'filePath' => '/var/www/symfony/app/src/Application/Feature/Weather/WeatherCityCommand.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector',
    )),
    1 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'App\\Application\\Feature\\Weather\\WeatherCityCommand',
        1 => 'getCity',
        2 => 'App\\Application\\Feature\\Weather\\WeatherCityCommand',
      ),
       'filePath' => '/var/www/symfony/app/src/Application/Feature/Weather/WeatherCityCommand.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector',
    )),
  ),
  '/var/www/symfony/app/src/Application/Feature/Weather/WeatherCityCommandHandler.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'App\\Application\\Feature\\Weather\\WeatherCityCommandHandler',
       'filePath' => '/var/www/symfony/app/src/Application/Feature/Weather/WeatherCityCommandHandler.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector',
    )),
  ),
  '/var/www/symfony/app/src/Infrastructure/Api/Weather/CurrentWeatherDTO.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'App\\Infrastructure\\Api\\Weather\\CurrentWeatherDTO',
       'filePath' => '/var/www/symfony/app/src/Infrastructure/Api/Weather/CurrentWeatherDTO.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector',
    )),
  ),
  '/var/www/symfony/app/src/Infrastructure/Api/Weather/WeatherApiService.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 'App\\Infrastructure\\Api\\Weather\\WeatherApiService',
       'filePath' => '/var/www/symfony/app/src/Infrastructure/Api/Weather/WeatherApiService.php',
       'collectorType' => 'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector',
    )),
  ),
  '/var/www/symfony/app/src/Kernel.php' => 
  array (
    0 => 
    \PHPStan\Collectors\CollectedData::__set_state(array(
       'data' => 
      array (
        0 => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
      ),
       'filePath' => '/var/www/symfony/app/src/Kernel.php',
       'collectorType' => 'PHPStan\\Rules\\Traits\\TraitUseCollector',
    )),
  ),
); },
	'dependencies' => array (
  '/var/www/symfony/app/src/Api/Weather.php' => 
  array (
    'fileHash' => 'c0ba7e75c37fa0def87827def9a2880e05bfe494',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/symfony/app/src/Application/Feature/Weather/WeatherCityCommand.php' => 
  array (
    'fileHash' => 'd6135c7141bbc6c62dcab8ccf27fef52763ab126',
    'dependentFiles' => 
    array (
      0 => '/var/www/symfony/app/src/Api/Weather.php',
      1 => '/var/www/symfony/app/src/Application/Feature/Weather/WeatherCityCommandHandler.php',
    ),
  ),
  '/var/www/symfony/app/src/Application/Feature/Weather/WeatherCityCommandHandler.php' => 
  array (
    'fileHash' => '229de0e7cd17ed9fc23972c8ea4face093fe51ee',
    'dependentFiles' => 
    array (
      0 => '/var/www/symfony/app/src/Api/Weather.php',
    ),
  ),
  '/var/www/symfony/app/src/Domain/WeatherProvider/WeatherProviderInterface.php' => 
  array (
    'fileHash' => '4b9fe84881b3f94f987d3a3937d02ccd81dbfcab',
    'dependentFiles' => 
    array (
      0 => '/var/www/symfony/app/src/Application/Feature/Weather/WeatherCityCommandHandler.php',
      1 => '/var/www/symfony/app/src/Infrastructure/Api/Weather/WeatherApiService.php',
    ),
  ),
  '/var/www/symfony/app/src/Infrastructure/Api/Weather/CurrentWeatherDTO.php' => 
  array (
    'fileHash' => 'db667d2e4c942b35b6d14fec3449e7e0893464c1',
    'dependentFiles' => 
    array (
      0 => '/var/www/symfony/app/src/Api/Weather.php',
      1 => '/var/www/symfony/app/src/Application/Feature/Weather/WeatherCityCommandHandler.php',
      2 => '/var/www/symfony/app/src/Domain/WeatherProvider/WeatherProviderInterface.php',
      3 => '/var/www/symfony/app/src/Infrastructure/Api/Weather/WeatherApiService.php',
    ),
  ),
  '/var/www/symfony/app/src/Infrastructure/Api/Weather/WeatherApiService.php' => 
  array (
    'fileHash' => '653360d387725f37845c28a0abe99a57783eef18',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/symfony/app/src/Kernel.php' => 
  array (
    'fileHash' => 'bee38488089a3614485de86c5eb58ed05f12499f',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/var/www/symfony/app/src/Api/Weather.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Api\\Weather',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'weather',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'handler',
               'type' => 'App\\Application\\Feature\\Weather\\WeatherCityCommandHandler',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'city',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Symfony\\Component\\Routing\\Annotation\\Route',
               'args' => 
              array (
                0 => '\'/api/weather/{city}\'',
                'name' => '\'weather_city\'',
                'methods' => '[\'GET\']',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/symfony/app/src/Application/Feature/Weather/WeatherCityCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Feature\\Weather\\WeatherCityCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'city',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCity',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/symfony/app/src/Application/Feature/Weather/WeatherCityCommandHandler.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Application\\Feature\\Weather\\WeatherCityCommandHandler',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'weatherProvider',
               'type' => 'App\\Domain\\WeatherProvider\\WeatherProviderInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Infrastructure\\Api\\Weather\\CurrentWeatherDTO',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'command',
               'type' => 'App\\Application\\Feature\\Weather\\WeatherCityCommand',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/symfony/app/src/Domain/WeatherProvider/WeatherProviderInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Domain\\WeatherProvider\\WeatherProviderInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCurrentWeather',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Infrastructure\\Api\\Weather\\CurrentWeatherDTO',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'city',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/var/www/symfony/app/src/Infrastructure/Api/Weather/CurrentWeatherDTO.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Api\\Weather\\CurrentWeatherDTO',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'city',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'country',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'temperature',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'condition',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'humidity',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'windSpeed',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lastUpdated',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/symfony/app/src/Infrastructure/Api/Weather/WeatherApiService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Infrastructure\\Api\\Weather\\WeatherApiService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Domain\\WeatherProvider\\WeatherProviderInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'apiUrl',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'apiKey',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'httpClient',
               'type' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logger',
               'type' => 'Psr\\Log\\LoggerInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCurrentWeather',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Fetch current weather data for a given location.
     *
     * @param string $city
     * @return CurrentWeatherDTO
     * @throws Exception
     * @throws TransportExceptionInterface
     */',
             'namespace' => 'App\\Infrastructure\\Api\\Weather',
             'uses' => 
            array (
              'weatherproviderinterface' => 'App\\Domain\\WeatherProvider\\WeatherProviderInterface',
              'detailedexception' => 'App\\Util\\Exception\\DetailedException',
              'exception' => 'Exception',
              'loggerinterface' => 'Psr\\Log\\LoggerInterface',
              'httpexceptioninterface' => 'Symfony\\Contracts\\HttpClient\\Exception\\HttpExceptionInterface',
              'transportexceptioninterface' => 'Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface',
              'httpclientinterface' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Infrastructure\\Api\\Weather\\CurrentWeatherDTO',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'city',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/symfony/app/src/Kernel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Kernel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Symfony\\Component\\HttpKernel\\Kernel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
