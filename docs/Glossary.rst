.. Glossary:

Glossary
============
+ `$`
    + `$HTTP_RAW_POST_DATA`

      + :ref:`$HTTP_RAW_POST_DATA Usage <$http\_raw\_post\_data-usage>`

    + `$_ENV`

      + :ref:`Useless Global <useless-global>`

    + `$_GET`

      + :ref:`Don't Change Incomings <don't-change-incomings>`
      + :ref:`Indirect Injection <indirect-injection>`
      + :ref:`Useless Global <useless-global>`

    + `$_POST`

      + :ref:`Don't Change Incomings <don't-change-incomings>`
      + :ref:`Indirect Injection <indirect-injection>`
      + :ref:`Useless Global <useless-global>`

    + `$_REQUEST`

      + :ref:`Indirect Injection <indirect-injection>`
      + :ref:`Useless Global <useless-global>`

    + `$this`

      + :ref:`$this Belongs To Classes Or Traits <$this-belongs-to-classes-or-traits>`
      + :ref:`$this Is Not An Array <$this-is-not-an-array>`
      + :ref:`$this Is Not For Static Methods <$this-is-not-for-static-methods>`
      + :ref:`Closure May Use $this <closure-may-use-$this>`
      + :ref:`Method Could Be Static <method-could-be-static>`
      + :ref:`Non Static Methods Called In A Static <non-static-methods-called-in-a-static>`
      + :ref:`Static Methods Called From Object <static-methods-called-from-object>`
      + :ref:`Static Methods Can't Contain $this <static-methods-can't-contain-$this>`
      + :ref:`Used Once Variables <used-once-variables>`
      + :ref:`Using $this Outside A Class <using-$this-outside-a-class>`


+ `*`
    + `**`

      + :ref:`** For Exponent <**-for-exponent>`
      + :ref:`Exponent Usage <exponent-usage>`
      + :ref:`Mismatch Type And Default <mismatch-type-and-default>`
      + :ref:`Negative Power <negative-power>`


+ `.`
    + `...`

      + :ref:`Ellipsis Usage <ellipsis-usage>`
      + :ref:`Iffectations <iffectations>`
      + :ref:`Multiple Definition Of The Same Argument <multiple-definition-of-the-same-argument>`
      + :ref:`Reserved Keywords In PHP 7 <reserved-keywords-in-php-7>`
      + :ref:`Should Use Operator <should-use-operator>`


+ `@`
    + `@`

      + :ref:`@ Operator <@-operator>`


+ `A`
    + `ArrayAccess`

      + :ref:`$this Is Not An Array <$this-is-not-an-array>`

    + `ArrayObject`

      + :ref:`$this Is Not An Array <$this-is-not-an-array>`

    + `Array_search()`

      + :ref:`Find Key Directly <find-key-directly>`

    + `abs()`

      + :ref:`Always Positive Comparison <always-positive-comparison>`
      + :ref:`No Real Comparison <no-real-comparison>`

    + `array_column()`

      + :ref:`Should Use array_column() <should-use-array\_column()>`
      + :ref:`Should Use array_filter() <should-use-array\_filter()>`

    + `array_count_values()`

      + :ref:`Avoid array_unique() <avoid-array\_unique()>`
      + :ref:`Slow Functions <slow-functions>`

    + `array_diff()`

      + :ref:`Slow Functions <slow-functions>`

    + `array_fill_keys()`

      + :ref:`Could Use array_fill_keys <could-use-array\_fill\_keys>`

    + `array_filter()`

      + :ref:`Should Use array_filter() <should-use-array\_filter()>`

    + `array_flip()`

      + :ref:`Avoid array_unique() <avoid-array\_unique()>`
      + :ref:`Double array_flip() <double-array\_flip()>`
      + :ref:`Slow Functions <slow-functions>`

    + `array_intersect()`

      + :ref:`Slow Functions <slow-functions>`

    + `array_key_exists()`

      + :ref:`Slow Functions <slow-functions>`
      + :ref:`array_key_exists() Speedup <array\_key\_exists()-speedup>`

    + `array_keys()`

      + :ref:`Avoid array_unique() <avoid-array\_unique()>`
      + :ref:`Find Key Directly <find-key-directly>`
      + :ref:`Slow Functions <slow-functions>`

    + `array_map()`

      + :ref:`Altering Foreach Without Reference <altering-foreach-without-reference>`
      + :ref:`Callback Needs Return <callback-needs-return>`
      + :ref:`Could Be Typehinted Callable <could-be-typehinted-callable>`
      + :ref:`Slow Functions <slow-functions>`

    + `array_merge()`

      + :ref:`No array_merge() In Loops <no-array\_merge()-in-loops>`

    + `array_merge_recursive()`

      + :ref:`No array_merge() In Loops <no-array\_merge()-in-loops>`

    + `array_push()`

      + :ref:`Avoid array_push() <avoid-array\_push()>`
      + :ref:`Should Use Operator <should-use-operator>`

    + `array_search()`

      + :ref:`Find Key Directly <find-key-directly>`
      + :ref:`Slow Functions <slow-functions>`

    + `array_sum()`

      + :ref:`Avoid Concat In Loop <avoid-concat-in-loop>`
      + :ref:`Static Loop <static-loop>`

    + `array_udiff()`

      + :ref:`Slow Functions <slow-functions>`

    + `array_uintersect()`

      + :ref:`Slow Functions <slow-functions>`

    + `array_unique()`

      + :ref:`Avoid array_unique() <avoid-array\_unique()>`
      + :ref:`Could Use array_unique <could-use-array\_unique>`
      + :ref:`Slow Functions <slow-functions>`

    + `array_unshift()`

      + :ref:`Slow Functions <slow-functions>`

    + `array_walk()`

      + :ref:`Altering Foreach Without Reference <altering-foreach-without-reference>`
      + :ref:`Slow Functions <slow-functions>`

    + `assert()`

      + :ref:`Assert Function Is Reserved <assert-function-is-reserved>`
      + :ref:`PHP 7.2 Deprecations <php-7.2-deprecations>`


+ `B`
    + `Break`

      + :ref:`Break With 0 <break-with-0>`
      + :ref:`Switch Fallthrough <switch-fallthrough>`

    + `basename()`

      + :ref:`Use Basename Suffix <use-basename-suffix>`
      + :ref:`Use pathinfo() Arguments <use-pathinfo()-arguments>`

    + `break`

      + :ref:`Break Outside Loop <break-outside-loop>`
      + :ref:`Break With 0 <break-with-0>`
      + :ref:`Break With Non Integer <break-with-non-integer>`
      + :ref:`Continue Is For Loop <continue-is-for-loop>`
      + :ref:`Exit() Usage <exit()-usage>`
      + :ref:`Long Arguments <long-arguments>`
      + :ref:`No Need For Else <no-need-for-else>`
      + :ref:`No Return Or Throw In Finally <no-return-or-throw-in-finally>`
      + :ref:`Non-lowercase Keywords <non-lowercase-keywords>`
      + :ref:`Switch Fallthrough <switch-fallthrough>`
      + :ref:`Unconditional Break In Loop <unconditional-break-in-loop>`
      + :ref:`Unreachable Code <unreachable-code>`


+ `C`
    + `Closure`

      + :ref:`Argument Should Be Typehinted <argument-should-be-typehinted>`
      + :ref:`Closure Could Be A Callback <closure-could-be-a-callback>`
      + :ref:`Could Be Static Closure <could-be-static-closure>`
      + :ref:`Unused Inherited Variable In Closure <unused-inherited-variable-in-closure>`

    + `Compact()`

      + :ref:`Could Use Compact <could-use-compact>`

    + `Count()`

      + :ref:`Can't Count Non-Countable <can't-count-non-countable>`
      + :ref:`Uses Default Values <uses-default-values>`

    + `call_user_func()`

      + :ref:`Should Use Operator <should-use-operator>`

    + `call_user_method()`

      + :ref:`PHP 70 Removed Functions <php-70-removed-functions>`

    + `call_user_method_array()`

      + :ref:`PHP 70 Removed Functions <php-70-removed-functions>`

    + `chr()`

      + :ref:`Should Preprocess Chr <should-preprocess-chr>`
      + :ref:`Should Use Operator <should-use-operator>`

    + `closure`

      + :ref:`Closure Could Be A Callback <closure-could-be-a-callback>`
      + :ref:`Closure May Use $this <closure-may-use-$this>`
      + :ref:`Could Be Typehinted Callable <could-be-typehinted-callable>`
      + :ref:`Parent, Static Or Self Outside Class <parent,-static-or-self-outside-class>`
      + :ref:`Should Use array_filter() <should-use-array\_filter()>`
      + :ref:`Using $this Outside A Class <using-$this-outside-a-class>`
      + :ref:`preg_replace With Option e <preg\_replace-with-option-e>`

    + `constant()`

      + :ref:`Fully Qualified Constants <fully-qualified-constants>`

    + `continue`

      + :ref:`Break Outside Loop <break-outside-loop>`
      + :ref:`Continue Is For Loop <continue-is-for-loop>`
      + :ref:`No Need For Else <no-need-for-else>`
      + :ref:`No Return Or Throw In Finally <no-return-or-throw-in-finally>`
      + :ref:`Unconditional Break In Loop <unconditional-break-in-loop>`
      + :ref:`Unreachable Code <unreachable-code>`

    + `count()`

      + :ref:`Always Positive Comparison <always-positive-comparison>`
      + :ref:`Cache Variable Outside Loop <cache-variable-outside-loop>`
      + :ref:`No Count With 0 <no-count-with-0>`
      + :ref:`Use is_countable <use-is\_countable>`
      + :ref:`Uses Default Values <uses-default-values>`

    + `crc32()`

      + :ref:`Crc32() Might Be Negative <crc32()-might-be-negative>`

    + `create_function()`

      + :ref:`PHP 7.2 Deprecations <php-7.2-deprecations>`

    + `crypt()`

      + :ref:`Use password_hash() <use-password\_hash()>`
      + :ref:`crypt() Without Salt <crypt()-without-salt>`

    + `current()`

      + :ref:`Foreach Don't Change Pointer <foreach-don't-change-pointer>`


+ `D`
    + `Die`

      + :ref:`Print And Die <print-and-die>`

    + `define()`

      + :ref:`Case Insensitive Constants <case-insensitive-constants>`
      + :ref:`Constants Created Outside Its Namespace <constants-created-outside-its-namespace>`
      + :ref:`Define With Array <define-with-array>`
      + :ref:`Fully Qualified Constants <fully-qualified-constants>`
      + :ref:`Invalid Constant Name <invalid-constant-name>`
      + :ref:`Non-constant Index In Array <non-constant-index-in-array>`
      + :ref:`Use const <use-const>`

    + `die`

      + :ref:`Exit() Usage <exit()-usage>`
      + :ref:`Print And Die <print-and-die>`
      + :ref:`Unreachable Code <unreachable-code>`

    + `dirname()`

      + :ref:`Could Use __DIR__ <could-use-\_\_dir\_\_>`
      + :ref:`PHP7 Dirname <php7-dirname>`
      + :ref:`Use pathinfo() Arguments <use-pathinfo()-arguments>`


+ `E`
    + `Each()`

      + :ref:`While(List() = Each()) <while(list()-=-each())>`

    + `each()`

      + :ref:`PHP 7.2 Deprecations <php-7.2-deprecations>`

    + `empty()`

      + :ref:`Cant Use Return Value In Write Context <cant-use-return-value-in-write-context>`
      + :ref:`Empty With Expression <empty-with-expression>`
      + :ref:`Modernize Empty With Expression <modernize-empty-with-expression>`
      + :ref:`No Count With 0 <no-count-with-0>`
      + :ref:`No isset() With empty() <no-isset()-with-empty()>`

    + `eval()`

      + :ref:`Eval() Usage <eval()-usage>`
      + :ref:`preg_replace With Option e <preg\_replace-with-option-e>`

    + `exit`

      + :ref:`Exit() Usage <exit()-usage>`
      + :ref:`Unreachable Code <unreachable-code>`

    + `extract()`

      + :ref:`Configure Extract <configure-extract>`
      + :ref:`Register Globals <register-globals>`


+ `F`
    + `For()`

      + :ref:`Sequences In For <sequences-in-for>`

    + `Foreach()`

      + :ref:`Altering Foreach Without Reference <altering-foreach-without-reference>`
      + :ref:`Should Use Foreach <should-use-foreach>`
      + :ref:`Use List With Foreach <use-list-with-foreach>`

    + `feof()`

      + :ref:`Possible Infinite Loop <possible-infinite-loop>`

    + `fgetcsv()`

      + :ref:`Possible Infinite Loop <possible-infinite-loop>`

    + `fgets()`

      + :ref:`Possible Infinite Loop <possible-infinite-loop>`

    + `fgetss()`

      + :ref:`Possible Infinite Loop <possible-infinite-loop>`

    + `file()`

      + :ref:`Joining file() <joining-file()>`

    + `file_get_contents()`

      + :ref:`Joining file() <joining-file()>`

    + `file_put_contents()`

      + :ref:`No array_merge() In Loops <no-array\_merge()-in-loops>`

    + `fopen()`

      + :ref:`@ Operator <@-operator>`
      + :ref:`Wrong fopen() Mode <wrong-fopen()-mode>`

    + `for()`

      + :ref:`Bracketless Blocks <bracketless-blocks>`
      + :ref:`For Using Functioncall <for-using-functioncall>`

    + `foreach()`

      + :ref:`Avoid array_unique() <avoid-array\_unique()>`
      + :ref:`Bracketless Blocks <bracketless-blocks>`
      + :ref:`Break Outside Loop <break-outside-loop>`
      + :ref:`Dont Change The Blind Var <dont-change-the-blind-var>`
      + :ref:`Find Key Directly <find-key-directly>`
      + :ref:`Foreach Don't Change Pointer <foreach-don't-change-pointer>`
      + :ref:`Foreach With list() <foreach-with-list()>`
      + :ref:`No Direct Usage <no-direct-usage>`
      + :ref:`Should Use array_column() <should-use-array\_column()>`
      + :ref:`Should Use array_filter() <should-use-array\_filter()>`
      + :ref:`Should Yield With Key <should-yield-with-key>`
      + :ref:`Slow Functions <slow-functions>`
      + :ref:`preg_match_all() Flag <preg\_match\_all()-flag>`

    + `fputcsv()`

      + :ref:`fputcsv() In Loops <fputcsv()-in-loops>`

    + `fread()`

      + :ref:`Possible Infinite Loop <possible-infinite-loop>`

    + `func_get_arg()`

      + :ref:`func_get_arg() Modified <func\_get\_arg()-modified>`

    + `func_get_args()`

      + :ref:`Wrong Number Of Arguments <wrong-number-of-arguments>`
      + :ref:`Wrong Number Of Arguments In Methods <wrong-number-of-arguments-in-methods>`
      + :ref:`func_get_arg() Modified <func\_get\_arg()-modified>`


+ `G`
    + `generator`

      + :ref:`Don't Loop On Yield <don't-loop-on-yield>`

    + `glob()`

      + :ref:`Avoid glob() Usage <avoid-glob()-usage>`
      + :ref:`No Direct Usage <no-direct-usage>`


+ `H`
    + `header()`

      + :ref:`Should Use SetCookie() <should-use-setcookie()>`

    + `highlight_file()`

      + :ref:`Directly Use File <directly-use-file>`

    + `highlight_string()`

      + :ref:`Directly Use File <directly-use-file>`

    + `htmlentities()`

      + :ref:`Htmlentities Calls <htmlentities-calls>`
      + :ref:`Uses Default Values <uses-default-values>`

    + `htmlspecialchars()`

      + :ref:`Htmlentities Calls <htmlentities-calls>`


+ `I`
    + `Isset`

      + :ref:`Isset() On The Whole Array <isset()-on-the-whole-array>`

    + `implode()`

      + :ref:`Avoid Concat In Loop <avoid-concat-in-loop>`
      + :ref:`Joining file() <joining-file()>`

    + `import_request_variables()`

      + :ref:`Register Globals <register-globals>`

    + `in_array()`

      + :ref:`Logical To in_array <logical-to-in\_array>`
      + :ref:`Processing Collector <processing-collector>`
      + :ref:`Slow Functions <slow-functions>`
      + :ref:`Strict Comparison With Booleans <strict-comparison-with-booleans>`

    + `instanceof`

      + :ref:`Avoid get_class() <avoid-get\_class()>`
      + :ref:`Could Typehint <could-typehint>`
      + :ref:`Should Use Operator <should-use-operator>`
      + :ref:`Undefined ::class <undefined-\:\:class>`
      + :ref:`Unresolved Instanceof <unresolved-instanceof>`
      + :ref:`Use Instanceof <use-instanceof>`
      + :ref:`Useless Interfaces <useless-interfaces>`

    + `intval()`

      + :ref:`Should Typecast <should-typecast>`

    + `is_array()`

      + :ref:`Should Use Operator <should-use-operator>`

    + `is_callable()`

      + :ref:`Check All Types <check-all-types>`

    + `is_int()`

      + :ref:`Should Use Operator <should-use-operator>`

    + `is_integer()`

      + :ref:`Use Instanceof <use-instanceof>`

    + `is_null()`

      + :ref:`Should Use Operator <should-use-operator>`
      + :ref:`Use === null <use-===-null>`

    + `is_object()`

      + :ref:`Should Use Operator <should-use-operator>`
      + :ref:`Use Instanceof <use-instanceof>`

    + `is_real()`

      + :ref:`Avoid Real <avoid-real>`

    + `is_scalar()`

      + :ref:`Use Instanceof <use-instanceof>`

    + `is_string()`

      + :ref:`Check All Types <check-all-types>`
      + :ref:`Use Instanceof <use-instanceof>`

    + `isset`

      + :ref:`Isset Multiple Arguments <isset-multiple-arguments>`
      + :ref:`Isset() On The Whole Array <isset()-on-the-whole-array>`
      + :ref:`No isset() With empty() <no-isset()-with-empty()>`
      + :ref:`Should Use array_column() <should-use-array\_column()>`
      + :ref:`Should Use array_filter() <should-use-array\_filter()>`
      + :ref:`Slow Functions <slow-functions>`
      + :ref:`Use Instanceof <use-instanceof>`
      + :ref:`array_key_exists() Speedup <array\_key\_exists()-speedup>`
      + :ref:`isset() With Constant <isset()-with-constant>`

    + `iterator_to_array()`

      + :ref:`Should Yield With Key <should-yield-with-key>`


+ `M`
    + `magic_quotes_runtime()`

      + :ref:`PHP 70 Removed Functions <php-70-removed-functions>`

    + `mb_substr()`

      + :ref:`No Substr() One <no-substr()-one>`

    + `md5()`

      + :ref:`Directly Use File <directly-use-file>`

    + `md5_file()`

      + :ref:`Directly Use File <directly-use-file>`

    + `microtime()`

      + :ref:`Use random_int() <use-random\_int()>`

    + `mkdir()`

      + :ref:`Mkdir Default <mkdir-default>`

    + `move_uploaded_file()`

      + :ref:`move_uploaded_file Instead Of copy <move\_uploaded\_file-instead-of-copy>`

    + `mt_rand()`

      + :ref:`Use random_int() <use-random\_int()>`

    + `mt_srand()`

      + :ref:`Use random_int() <use-random\_int()>`


+ `N`
    + `NULL`

      + :ref:`$this Is Not For Static Methods <$this-is-not-for-static-methods>`
      + :ref:`Check JSON <check-json>`
      + :ref:`Static Methods Can't Contain $this <static-methods-can't-contain-$this>`
      + :ref:`Strpos()-like Comparison <strpos()-like-comparison>`
      + :ref:`array_key_exists() Speedup <array\_key\_exists()-speedup>`

    + `Null`

      + :ref:`Avoid Optional Properties <avoid-optional-properties>`
      + :ref:`Indices Are Int Or String <indices-are-int-or-string>`
      + :ref:`Scalar Or Object Property <scalar-or-object-property>`

    + `next()`

      + :ref:`Foreach Don't Change Pointer <foreach-don't-change-pointer>`
      + :ref:`Static Loop <static-loop>`

    + `nl2br()`

      + :ref:`Joining file() <joining-file()>`

    + `null`

      + :ref:`Always Positive Comparison <always-positive-comparison>`
      + :ref:`Avoid Optional Properties <avoid-optional-properties>`
      + :ref:`Break With Non Integer <break-with-non-integer>`
      + :ref:`Check All Types <check-all-types>`
      + :ref:`Don't Unset Properties <don't-unset-properties>`
      + :ref:`No Reference For Ternary <no-reference-for-ternary>`
      + :ref:`No get_class() With Null <no-get\_class()-with-null>`
      + :ref:`Null On New <null-on-new>`
      + :ref:`Reserved Keywords In PHP 7 <reserved-keywords-in-php-7>`
      + :ref:`Scalar Or Object Property <scalar-or-object-property>`
      + :ref:`Should Use Coalesce <should-use-coalesce>`
      + :ref:`Should Use Operator <should-use-operator>`
      + :ref:`Use === null <use-===-null>`
      + :ref:`Use Nullable Type <use-nullable-type>`
      + :ref:`Weak Typing <weak-typing>`
      + :ref:`isset() With Constant <isset()-with-constant>`


+ `O`
    + `opendir()`

      + :ref:`Avoid glob() Usage <avoid-glob()-usage>`


+ `P`
    + `pack()`

      + :ref:`Invalid Pack Format <invalid-pack-format>`

    + `parse_ini_file()`

      + :ref:`Directly Use File <directly-use-file>`

    + `parse_ini_string()`

      + :ref:`Directly Use File <directly-use-file>`

    + `parse_str()`

      + :ref:`PHP 7.2 Deprecations <php-7.2-deprecations>`
      + :ref:`Register Globals <register-globals>`
      + :ref:`parse_str() Warning <parse\_str()-warning>`

    + `parse_url()`

      + :ref:`Pathinfo() Returns May Vary <pathinfo()-returns-may-vary>`

    + `password_hash()`

      + :ref:`Compare Hash <compare-hash>`
      + :ref:`Use password_hash() <use-password\_hash()>`

    + `password_verify()`

      + :ref:`Compare Hash <compare-hash>`

    + `pathinfo()`

      + :ref:`Pathinfo() Returns May Vary <pathinfo()-returns-may-vary>`
      + :ref:`Use Pathinfo <use-pathinfo>`
      + :ref:`Use pathinfo() Arguments <use-pathinfo()-arguments>`

    + `php_egg_logo_guid()`

      + :ref:`Functions Removed In PHP 5.5 <functions-removed-in-php-5.5>`

    + `php_logo_guid()`

      + :ref:`Functions Removed In PHP 5.5 <functions-removed-in-php-5.5>`

    + `php_real_logo_guid()`

      + :ref:`Functions Removed In PHP 5.5 <functions-removed-in-php-5.5>`

    + `phpinfo()`

      + :ref:`Phpinfo <phpinfo>`

    + `pow()`

      + :ref:`** For Exponent <**-for-exponent>`
      + :ref:`Negative Power <negative-power>`

    + `preg_replace()`

      + :ref:`Make One Call With Array <make-one-call-with-array>`
      + :ref:`Processing Collector <processing-collector>`
      + :ref:`Slow Functions <slow-functions>`
      + :ref:`preg_replace With Option e <preg\_replace-with-option-e>`

    + `preg_replace_callback()`

      + :ref:`Make One Call With Array <make-one-call-with-array>`
      + :ref:`preg_replace With Option e <preg\_replace-with-option-e>`

    + `preg_replace_callback_array()`

      + :ref:`Make One Call With Array <make-one-call-with-array>`
      + :ref:`New Functions In PHP 7.0 <new-functions-in-php-7.0>`
      + :ref:`preg_replace With Option e <preg\_replace-with-option-e>`

    + `print_r()`

      + :ref:`var_dump()... Usage <var\_dump()...-usage>`

    + `printf()`

      + :ref:`Echo Or Print <echo-or-print>`
      + :ref:`Printf Number Of Arguments <printf-number-of-arguments>`

    + `proc_nice()`

      + :ref:`New Functions In PHP 7.2 <new-functions-in-php-7.2>`


+ `R`
    + `rand()`

      + :ref:`Use random_int() <use-random\_int()>`

    + `readfile()`

      + :ref:`Joining file() <joining-file()>`


+ `S`
    + `SimpleXMLElement`

      + :ref:`$this Is Not An Array <$this-is-not-an-array>`

    + `Strtr()`

      + :ref:`Strtr Arguments <strtr-arguments>`

    + `Switch()`

      + :ref:`Missing Cases In Switch <missing-cases-in-switch>`

    + `scandir()`

      + :ref:`Avoid glob() Usage <avoid-glob()-usage>`

    + `set_error_handler()`

      + :ref:`Avoid set_error_handler $context Argument <avoid-set\_error\_handler-$context-argument>`

    + `set_exception_handler()`

      + :ref:`set_exception_handler() Warning <set\_exception\_handler()-warning>`

    + `set_magic_quotes_runtime()`

      + :ref:`PHP 70 Removed Functions <php-70-removed-functions>`

    + `set_socket_blocking()`

      + :ref:`PHP 70 Removed Functions <php-70-removed-functions>`

    + `setcookie()`

      + :ref:`Set Cookie Safe Arguments <set-cookie-safe-arguments>`
      + :ref:`Should Use SetCookie() <should-use-setcookie()>`

    + `setlocale()`

      + :ref:`Setlocale() Uses Constants <setlocale()-uses-constants>`

    + `setrawcookie()`

      + :ref:`Set Cookie Safe Arguments <set-cookie-safe-arguments>`
      + :ref:`Should Use SetCookie() <should-use-setcookie()>`

    + `settype()`

      + :ref:`Should Typecast <should-typecast>`

    + `sha1()`

      + :ref:`Directly Use File <directly-use-file>`

    + `sha1_file()`

      + :ref:`Directly Use File <directly-use-file>`

    + `show_source()`

      + :ref:`Directly Use File <directly-use-file>`

    + `sleep()`

      + :ref:`Avoid sleep()/usleep() <avoid-sleep()/usleep()>`

    + `srand()`

      + :ref:`Use random_int() <use-random\_int()>`

    + `str_ireplace()`

      + :ref:`Make One Call With Array <make-one-call-with-array>`

    + `str_pad()`

      + :ref:`Could Use str_repeat() <could-use-str\_repeat()>`

    + `str_repeat()`

      + :ref:`Could Use str_repeat() <could-use-str\_repeat()>`

    + `str_replace()`

      + :ref:`Joining file() <joining-file()>`
      + :ref:`Make One Call With Array <make-one-call-with-array>`

    + `stream_socket_server()`

      + :ref:`@ Operator <@-operator>`

    + `stripos()`

      + :ref:`Simplify Regex <simplify-regex>`

    + `strpos()`

      + :ref:`Simplify Regex <simplify-regex>`
      + :ref:`Slow Functions <slow-functions>`
      + :ref:`Strpos()-like Comparison <strpos()-like-comparison>`

    + `strstr()`

      + :ref:`Slow Functions <slow-functions>`

    + `strtr()`

      + :ref:`Strtr Arguments <strtr-arguments>`

    + `substr_replace()`

      + :ref:`Make One Call With Array <make-one-call-with-array>`

    + `switch()`

      + :ref:`Bracketless Blocks <bracketless-blocks>`
      + :ref:`Break Outside Loop <break-outside-loop>`
      + :ref:`Missing Cases In Switch <missing-cases-in-switch>`
      + :ref:`Strict Comparison With Booleans <strict-comparison-with-booleans>`
      + :ref:`Switch To Switch <switch-to-switch>`
      + :ref:`Switch With Too Many Default <switch-with-too-many-default>`
      + :ref:`Switch Without Default <switch-without-default>`

    + `sys_get_temp_dir()`

      + :ref:`No Hardcoded Path <no-hardcoded-path>`
      + :ref:`Use System Tmp <use-system-tmp>`


+ `T`
    + `Throwable`

      + :ref:`Can't Throw Throwable <can't-throw-throwable>`
      + :ref:`Empty Try Catch <empty-try-catch>`

    + `throwable`

      + :ref:`Can't Throw Throwable <can't-throw-throwable>`

    + `token_get_all()`

      + :ref:`@ Operator <@-operator>`

    + `trim()`

      + :ref:`Substring First <substring-first>`


+ `U`
    + `Usort()`

      + :ref:`Usort Sorting In PHP 7.0 <usort-sorting-in-php-7.0>`

    + `uasort()`

      + :ref:`Slow Functions <slow-functions>`
      + :ref:`Usort Sorting In PHP 7.0 <usort-sorting-in-php-7.0>`

    + `uksort()`

      + :ref:`Slow Functions <slow-functions>`
      + :ref:`Usort Sorting In PHP 7.0 <usort-sorting-in-php-7.0>`

    + `uniqid()`

      + :ref:`Use random_int() <use-random\_int()>`

    + `unpack()`

      + :ref:`Invalid Pack Format <invalid-pack-format>`

    + `unserialize()`

      + :ref:`Unserialize Second Arg <unserialize-second-arg>`

    + `usleep()`

      + :ref:`Avoid sleep()/usleep() <avoid-sleep()/usleep()>`

    + `usort()`

      + :ref:`Slow Functions <slow-functions>`


+ `V`
    + `var_dump()`

      + :ref:`var_dump()... Usage <var\_dump()...-usage>`

    + `var_export()`

      + :ref:`var_dump()... Usage <var\_dump()...-usage>`

    + `vprintf()`

      + :ref:`Printf Number Of Arguments <printf-number-of-arguments>`


+ `W`
    + `while()`

      + :ref:`Bracketless Blocks <bracketless-blocks>`
      + :ref:`Break Outside Loop <break-outside-loop>`


+ `Z`
    + `zend_logo_guid()`

      + :ref:`Functions Removed In PHP 5.5 <functions-removed-in-php-5.5>`


+ `_`
    + `__CLASS__`

      + :ref:`::class <\:\:class>`
      + :ref:`Detect Current Class <detect-current-class>`

    + `__DIR__`

      + :ref:`Could Use __DIR__ <could-use-\_\_dir\_\_>`
      + :ref:`No Hardcoded Path <no-hardcoded-path>`
      + :ref:`__DIR__ Then Slash <\_\_dir\_\_-then-slash>`

    + `__FILE__`

      + :ref:`Could Use __DIR__ <could-use-\_\_dir\_\_>`
      + :ref:`No Hardcoded Path <no-hardcoded-path>`

    + `__call`

      + :ref:`Must Return Methods <must-return-methods>`
      + :ref:`No Direct Call To Magic Method <no-direct-call-to-magic-method>`

    + `__callStatic`

      + :ref:`Must Return Methods <must-return-methods>`

    + `__clone`

      + :ref:`Direct Call To __clone <direct-call-to-\_\_clone>`
      + :ref:`No Direct Call To Magic Method <no-direct-call-to-magic-method>`

    + `__construct`

      + :ref:`Cant Instantiate Class <cant-instantiate-class>`
      + :ref:`Don't Send $this In Constructor <don't-send-$this-in-constructor>`
      + :ref:`Must Call Parent Constructor <must-call-parent-constructor>`
      + :ref:`Old Style Constructor <old-style-constructor>`
      + :ref:`Should Chain Exception <should-chain-exception>`

    + `__debugInfo`

      + :ref:`Must Return Methods <must-return-methods>`
      + :ref:`__debugInfo() Usage <\_\_debuginfo()-usage>`

    + `__get`

      + :ref:`Must Return Methods <must-return-methods>`
      + :ref:`No Direct Call To Magic Method <no-direct-call-to-magic-method>`

    + `__invoke`

      + :ref:`Must Return Methods <must-return-methods>`

    + `__isset`

      + :ref:`Must Return Methods <must-return-methods>`

    + `__set_state`

      + :ref:`Must Return Methods <must-return-methods>`

    + `__sleep`

      + :ref:`Must Return Methods <must-return-methods>`

    + `__toString`

      + :ref:`Must Return Methods <must-return-methods>`
      + :ref:`No Direct Call To Magic Method <no-direct-call-to-magic-method>`
      + :ref:`__toString() Throws Exception <\_\_tostring()-throws-exception>`



