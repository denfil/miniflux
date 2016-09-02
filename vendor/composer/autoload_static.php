<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd7e8d436e1dc450edc3153ac8bc31b4
{
    public static $files = array (
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
        '1c6478a893aa3a9ae898668d7af7b441' => __DIR__ . '/../..' . '/app/schemas/sqlite.php',
        'f0aaf41fd213d5a97cf56c060c89445c' => __DIR__ . '/../..' . '/app/helpers/app.php',
        '5d8e3de7e01942090f1b7b4dbdfb5577' => __DIR__ . '/../..' . '/app/helpers/csrf.php',
        '3f7c6586b45b98746d18450089390313' => __DIR__ . '/../..' . '/app/helpers/favicon.php',
        'e96e91c85d691b966391981f72a31834' => __DIR__ . '/../..' . '/app/helpers/form.php',
        'b8d3001d29a919647064eeaec3f6551e' => __DIR__ . '/../..' . '/app/helpers/template.php',
        '7793918f03299c5c8c900e412e166b4f' => __DIR__ . '/../..' . '/app/core/translator.php',
        '69d59b59e8b15a53cc782e283523018d' => __DIR__ . '/../..' . '/app/core/request.php',
        '3fd802226a33a97ae29d1f8315ff66a9' => __DIR__ . '/../..' . '/app/core/response.php',
        'dbd9090b0db725af4a3cd765a9d2e39a' => __DIR__ . '/../..' . '/app/core/router.php',
        '98faa6699f100c5ddb2013d85f9dfabb' => __DIR__ . '/../..' . '/app/core/session.php',
        '93228d441890e5962b0566344884332c' => __DIR__ . '/../..' . '/app/core/template.php',
        '9de087554be89ca71a2ed558a4e35fde' => __DIR__ . '/../..' . '/app/handlers/scraper.php',
        '45d63f4d04cfb927b889e126b91aa553' => __DIR__ . '/../..' . '/app/handlers/service.php',
        'bf8c8992b55a0d6166f67a273960030e' => __DIR__ . '/../..' . '/app/handlers/opml.php',
        '081a26ac825aa2a7e4cb00c18e0510d5' => __DIR__ . '/../..' . '/app/handlers/proxy.php',
        'bc98222aedc910930f5b76b8c84f334e' => __DIR__ . '/../..' . '/app/models/config.php',
        'b59348c9973f21f2c58eb493d9fea5be' => __DIR__ . '/../..' . '/app/models/search.php',
        'e7471626caee68a253c18d9ac0c9642b' => __DIR__ . '/../..' . '/app/models/tag.php',
        '73671a34a21e27508f85cea36a9837de' => __DIR__ . '/../..' . '/app/models/user.php',
        'e8bcd5701df9db676003b87e27b091c9' => __DIR__ . '/../..' . '/app/models/feed.php',
        '7318478c1ab18cc398507355a29a93c3' => __DIR__ . '/../..' . '/app/models/item.php',
        'c0f7d31e45ab3b885f3f3567be6b8cda' => __DIR__ . '/../..' . '/app/models/item_feed.php',
        'c9e2906d32a129f63c98d210037c227b' => __DIR__ . '/../..' . '/app/models/item_group.php',
        '546998ee103e300ad614144f30a1de8e' => __DIR__ . '/../..' . '/app/models/bookmark.php',
        'd06207bd4580f7e9250cf39d0d648fc5' => __DIR__ . '/../..' . '/app/models/auto_update.php',
        '6a19d5803b084354df8269801d4e98e4' => __DIR__ . '/../..' . '/app/models/database.php',
        'ee585b658e324609d721bc6f959e85c8' => __DIR__ . '/../..' . '/app/models/remember_me.php',
        'fc49fda782025f9f73852265b1fa7760' => __DIR__ . '/../..' . '/app/models/group.php',
        '785cebb801997d40232b8337459f1606' => __DIR__ . '/../..' . '/app/models/favicon.php',
        'e348a7661429e81fa0e42efff1ebfe6e' => __DIR__ . '/../..' . '/app/validators/config.php',
        '679a0a7c75414c39298328823e0be180' => __DIR__ . '/../..' . '/app/validators/feed.php',
        'eea04c7f459daa801618b71f49a8c470' => __DIR__ . '/../..' . '/app/validators/user.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pheanstalk\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pheanstalk\\' => 
        array (
            0 => __DIR__ . '/..' . '/pda/pheanstalk/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'Z' => 
        array (
            'ZendXml\\' => 
            array (
                0 => __DIR__ . '/..' . '/zendframework/zendxml/library',
            ),
        ),
        'S' => 
        array (
            'SimpleValidator' => 
            array (
                0 => __DIR__ . '/..' . '/fguillot/simple-validator/src',
            ),
        ),
        'P' => 
        array (
            'PicoFeed' => 
            array (
                0 => __DIR__ . '/..' . '/fguillot/picofeed/lib',
            ),
            'PicoDb' => 
            array (
                0 => __DIR__ . '/..' . '/fguillot/picodb/lib',
            ),
        ),
        'J' => 
        array (
            'JsonRPC' => 
            array (
                0 => __DIR__ . '/..' . '/fguillot/json-rpc/src',
            ),
        ),
    );

    public static $classMap = array (
        'JsonRPC\\Client' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Client.php',
        'JsonRPC\\Exception\\AccessDeniedException' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Exception/AccessDeniedException.php',
        'JsonRPC\\Exception\\AuthenticationFailureException' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Exception/AuthenticationFailureException.php',
        'JsonRPC\\Exception\\ConnectionFailureException' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Exception/ConnectionFailureException.php',
        'JsonRPC\\Exception\\InvalidJsonFormatException' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Exception/InvalidJsonFormatException.php',
        'JsonRPC\\Exception\\InvalidJsonRpcFormatException' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Exception/InvalidJsonRpcFormatException.php',
        'JsonRPC\\Exception\\ResponseEncodingFailureException' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Exception/ResponseEncodingFailureException.php',
        'JsonRPC\\Exception\\ResponseException' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Exception/ResponseException.php',
        'JsonRPC\\Exception\\ServerErrorException' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Exception/ServerErrorException.php',
        'JsonRPC\\HttpClient' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/HttpClient.php',
        'JsonRPC\\MiddlewareHandler' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/MiddlewareHandler.php',
        'JsonRPC\\MiddlewareInterface' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/MiddlewareInterface.php',
        'JsonRPC\\ProcedureHandler' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/ProcedureHandler.php',
        'JsonRPC\\Request\\BatchRequestParser' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Request/BatchRequestParser.php',
        'JsonRPC\\Request\\RequestBuilder' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Request/RequestBuilder.php',
        'JsonRPC\\Request\\RequestParser' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Request/RequestParser.php',
        'JsonRPC\\Response\\ResponseBuilder' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Response/ResponseBuilder.php',
        'JsonRPC\\Response\\ResponseParser' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Response/ResponseParser.php',
        'JsonRPC\\Server' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Server.php',
        'JsonRPC\\Validator\\HostValidator' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Validator/HostValidator.php',
        'JsonRPC\\Validator\\JsonEncodingValidator' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Validator/JsonEncodingValidator.php',
        'JsonRPC\\Validator\\JsonFormatValidator' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Validator/JsonFormatValidator.php',
        'JsonRPC\\Validator\\RpcFormatValidator' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Validator/RpcFormatValidator.php',
        'JsonRPC\\Validator\\UserValidator' => __DIR__ . '/..' . '/fguillot/json-rpc/src/JsonRPC/Validator/UserValidator.php',
        'Pheanstalk\\Command' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command.php',
        'Pheanstalk\\Command\\AbstractCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/AbstractCommand.php',
        'Pheanstalk\\Command\\BuryCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/BuryCommand.php',
        'Pheanstalk\\Command\\DeleteCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/DeleteCommand.php',
        'Pheanstalk\\Command\\IgnoreCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/IgnoreCommand.php',
        'Pheanstalk\\Command\\KickCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/KickCommand.php',
        'Pheanstalk\\Command\\KickJobCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/KickJobCommand.php',
        'Pheanstalk\\Command\\ListTubeUsedCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/ListTubeUsedCommand.php',
        'Pheanstalk\\Command\\ListTubesCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/ListTubesCommand.php',
        'Pheanstalk\\Command\\ListTubesWatchedCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/ListTubesWatchedCommand.php',
        'Pheanstalk\\Command\\PauseTubeCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/PauseTubeCommand.php',
        'Pheanstalk\\Command\\PeekCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/PeekCommand.php',
        'Pheanstalk\\Command\\PutCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/PutCommand.php',
        'Pheanstalk\\Command\\ReleaseCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/ReleaseCommand.php',
        'Pheanstalk\\Command\\ReserveCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/ReserveCommand.php',
        'Pheanstalk\\Command\\StatsCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/StatsCommand.php',
        'Pheanstalk\\Command\\StatsJobCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/StatsJobCommand.php',
        'Pheanstalk\\Command\\StatsTubeCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/StatsTubeCommand.php',
        'Pheanstalk\\Command\\TouchCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/TouchCommand.php',
        'Pheanstalk\\Command\\UseCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/UseCommand.php',
        'Pheanstalk\\Command\\WatchCommand' => __DIR__ . '/..' . '/pda/pheanstalk/src/Command/WatchCommand.php',
        'Pheanstalk\\Connection' => __DIR__ . '/..' . '/pda/pheanstalk/src/Connection.php',
        'Pheanstalk\\Exception' => __DIR__ . '/..' . '/pda/pheanstalk/src/Exception.php',
        'Pheanstalk\\Exception\\ClientException' => __DIR__ . '/..' . '/pda/pheanstalk/src/Exception/ClientException.php',
        'Pheanstalk\\Exception\\CommandException' => __DIR__ . '/..' . '/pda/pheanstalk/src/Exception/CommandException.php',
        'Pheanstalk\\Exception\\ConnectionException' => __DIR__ . '/..' . '/pda/pheanstalk/src/Exception/ConnectionException.php',
        'Pheanstalk\\Exception\\ServerBadFormatException' => __DIR__ . '/..' . '/pda/pheanstalk/src/Exception/ServerBadFormatException.php',
        'Pheanstalk\\Exception\\ServerDrainingException' => __DIR__ . '/..' . '/pda/pheanstalk/src/Exception/ServerDrainingException.php',
        'Pheanstalk\\Exception\\ServerException' => __DIR__ . '/..' . '/pda/pheanstalk/src/Exception/ServerException.php',
        'Pheanstalk\\Exception\\ServerInternalErrorException' => __DIR__ . '/..' . '/pda/pheanstalk/src/Exception/ServerInternalErrorException.php',
        'Pheanstalk\\Exception\\ServerOutOfMemoryException' => __DIR__ . '/..' . '/pda/pheanstalk/src/Exception/ServerOutOfMemoryException.php',
        'Pheanstalk\\Exception\\ServerUnknownCommandException' => __DIR__ . '/..' . '/pda/pheanstalk/src/Exception/ServerUnknownCommandException.php',
        'Pheanstalk\\Exception\\SocketException' => __DIR__ . '/..' . '/pda/pheanstalk/src/Exception/SocketException.php',
        'Pheanstalk\\Job' => __DIR__ . '/..' . '/pda/pheanstalk/src/Job.php',
        'Pheanstalk\\Pheanstalk' => __DIR__ . '/..' . '/pda/pheanstalk/src/Pheanstalk.php',
        'Pheanstalk\\PheanstalkInterface' => __DIR__ . '/..' . '/pda/pheanstalk/src/PheanstalkInterface.php',
        'Pheanstalk\\Response' => __DIR__ . '/..' . '/pda/pheanstalk/src/Response.php',
        'Pheanstalk\\ResponseParser' => __DIR__ . '/..' . '/pda/pheanstalk/src/ResponseParser.php',
        'Pheanstalk\\Response\\ArrayResponse' => __DIR__ . '/..' . '/pda/pheanstalk/src/Response/ArrayResponse.php',
        'Pheanstalk\\Socket' => __DIR__ . '/..' . '/pda/pheanstalk/src/Socket.php',
        'Pheanstalk\\Socket\\NativeSocket' => __DIR__ . '/..' . '/pda/pheanstalk/src/Socket/NativeSocket.php',
        'Pheanstalk\\Socket\\StreamFunctions' => __DIR__ . '/..' . '/pda/pheanstalk/src/Socket/StreamFunctions.php',
        'Pheanstalk\\Socket\\WriteHistory' => __DIR__ . '/..' . '/pda/pheanstalk/src/Socket/WriteHistory.php',
        'Pheanstalk\\YamlResponseParser' => __DIR__ . '/..' . '/pda/pheanstalk/src/YamlResponseParser.php',
        'PicoDb\\Builder\\BaseBuilder' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Builder/BaseBuilder.php',
        'PicoDb\\Builder\\ConditionBuilder' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Builder/ConditionBuilder.php',
        'PicoDb\\Builder\\InsertBuilder' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Builder/InsertBuilder.php',
        'PicoDb\\Builder\\OrConditionBuilder' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Builder/OrConditionBuilder.php',
        'PicoDb\\Builder\\UpdateBuilder' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Builder/UpdateBuilder.php',
        'PicoDb\\Database' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Database.php',
        'PicoDb\\DriverFactory' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/DriverFactory.php',
        'PicoDb\\Driver\\Base' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Driver/Base.php',
        'PicoDb\\Driver\\Mssql' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Driver/Mssql.php',
        'PicoDb\\Driver\\Mysql' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Driver/Mysql.php',
        'PicoDb\\Driver\\Postgres' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Driver/Postgres.php',
        'PicoDb\\Driver\\Sqlite' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Driver/Sqlite.php',
        'PicoDb\\Hashtable' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Hashtable.php',
        'PicoDb\\LargeObject' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/LargeObject.php',
        'PicoDb\\SQLException' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/SQLException.php',
        'PicoDb\\Schema' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Schema.php',
        'PicoDb\\StatementHandler' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/StatementHandler.php',
        'PicoDb\\Table' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/Table.php',
        'PicoDb\\UrlParser' => __DIR__ . '/..' . '/fguillot/picodb/lib/PicoDb/UrlParser.php',
        'PicoFeed\\Base' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Base.php',
        'PicoFeed\\Client\\Client' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/Client.php',
        'PicoFeed\\Client\\ClientException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/ClientException.php',
        'PicoFeed\\Client\\Curl' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/Curl.php',
        'PicoFeed\\Client\\ForbiddenException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/ForbiddenException.php',
        'PicoFeed\\Client\\HttpHeaders' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/HttpHeaders.php',
        'PicoFeed\\Client\\InvalidCertificateException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/InvalidCertificateException.php',
        'PicoFeed\\Client\\InvalidUrlException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/InvalidUrlException.php',
        'PicoFeed\\Client\\MaxRedirectException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/MaxRedirectException.php',
        'PicoFeed\\Client\\MaxSizeException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/MaxSizeException.php',
        'PicoFeed\\Client\\Stream' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/Stream.php',
        'PicoFeed\\Client\\TimeoutException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/TimeoutException.php',
        'PicoFeed\\Client\\UnauthorizedException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/UnauthorizedException.php',
        'PicoFeed\\Client\\Url' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/Url.php',
        'PicoFeed\\Config\\Config' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Config/Config.php',
        'PicoFeed\\Encoding\\Encoding' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Encoding/Encoding.php',
        'PicoFeed\\Filter\\Attribute' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Filter/Attribute.php',
        'PicoFeed\\Filter\\Filter' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Filter/Filter.php',
        'PicoFeed\\Filter\\Html' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Filter/Html.php',
        'PicoFeed\\Filter\\Tag' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Filter/Tag.php',
        'PicoFeed\\Generator\\ContentGeneratorInterface' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Generator/ContentGeneratorInterface.php',
        'PicoFeed\\Generator\\FileContentGenerator' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Generator/FileContentGenerator.php',
        'PicoFeed\\Generator\\YoutubeContentGenerator' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Generator/YoutubeContentGenerator.php',
        'PicoFeed\\Logging\\Logger' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Logging/Logger.php',
        'PicoFeed\\Parser\\Atom' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Atom.php',
        'PicoFeed\\Parser\\DateParser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/DateParser.php',
        'PicoFeed\\Parser\\Feed' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Feed.php',
        'PicoFeed\\Parser\\Item' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Item.php',
        'PicoFeed\\Parser\\MalformedXmlException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/MalformedXmlException.php',
        'PicoFeed\\Parser\\Parser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Parser.php',
        'PicoFeed\\Parser\\ParserException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/ParserException.php',
        'PicoFeed\\Parser\\ParserInterface' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/ParserInterface.php',
        'PicoFeed\\Parser\\Rss10' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Rss10.php',
        'PicoFeed\\Parser\\Rss20' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Rss20.php',
        'PicoFeed\\Parser\\Rss91' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Rss91.php',
        'PicoFeed\\Parser\\Rss92' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Rss92.php',
        'PicoFeed\\Parser\\XmlEntityException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/XmlEntityException.php',
        'PicoFeed\\Parser\\XmlParser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/XmlParser.php',
        'PicoFeed\\PicoFeedException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/PicoFeedException.php',
        'PicoFeed\\Processor\\ContentFilterProcessor' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Processor/ContentFilterProcessor.php',
        'PicoFeed\\Processor\\ContentGeneratorProcessor' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Processor/ContentGeneratorProcessor.php',
        'PicoFeed\\Processor\\ItemPostProcessor' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Processor/ItemPostProcessor.php',
        'PicoFeed\\Processor\\ItemProcessorInterface' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Processor/ItemProcessorInterface.php',
        'PicoFeed\\Processor\\ScraperProcessor' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Processor/ScraperProcessor.php',
        'PicoFeed\\Reader\\Favicon' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Reader/Favicon.php',
        'PicoFeed\\Reader\\Reader' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Reader/Reader.php',
        'PicoFeed\\Reader\\ReaderException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Reader/ReaderException.php',
        'PicoFeed\\Reader\\SubscriptionNotFoundException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Reader/SubscriptionNotFoundException.php',
        'PicoFeed\\Reader\\UnsupportedFeedFormatException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Reader/UnsupportedFeedFormatException.php',
        'PicoFeed\\Scraper\\CandidateParser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Scraper/CandidateParser.php',
        'PicoFeed\\Scraper\\ParserInterface' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Scraper/ParserInterface.php',
        'PicoFeed\\Scraper\\RuleLoader' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Scraper/RuleLoader.php',
        'PicoFeed\\Scraper\\RuleParser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Scraper/RuleParser.php',
        'PicoFeed\\Scraper\\Scraper' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Scraper/Scraper.php',
        'PicoFeed\\Serialization\\Subscription' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Serialization/Subscription.php',
        'PicoFeed\\Serialization\\SubscriptionList' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Serialization/SubscriptionList.php',
        'PicoFeed\\Serialization\\SubscriptionListBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Serialization/SubscriptionListBuilder.php',
        'PicoFeed\\Serialization\\SubscriptionListParser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Serialization/SubscriptionListParser.php',
        'PicoFeed\\Serialization\\SubscriptionParser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Serialization/SubscriptionParser.php',
        'PicoFeed\\Syndication\\AtomFeedBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/AtomFeedBuilder.php',
        'PicoFeed\\Syndication\\AtomHelper' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/AtomHelper.php',
        'PicoFeed\\Syndication\\AtomItemBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/AtomItemBuilder.php',
        'PicoFeed\\Syndication\\FeedBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/FeedBuilder.php',
        'PicoFeed\\Syndication\\ItemBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/ItemBuilder.php',
        'PicoFeed\\Syndication\\Rss20FeedBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/Rss20FeedBuilder.php',
        'PicoFeed\\Syndication\\Rss20Helper' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/Rss20Helper.php',
        'PicoFeed\\Syndication\\Rss20ItemBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/Rss20ItemBuilder.php',
        'SimpleValidator\\Validator' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validator.php',
        'SimpleValidator\\Validators\\Alpha' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/Alpha.php',
        'SimpleValidator\\Validators\\AlphaNumeric' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/AlphaNumeric.php',
        'SimpleValidator\\Validators\\Base' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/Base.php',
        'SimpleValidator\\Validators\\Date' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/Date.php',
        'SimpleValidator\\Validators\\Email' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/Email.php',
        'SimpleValidator\\Validators\\Equals' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/Equals.php',
        'SimpleValidator\\Validators\\Exists' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/Exists.php',
        'SimpleValidator\\Validators\\GreaterThan' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/GreaterThan.php',
        'SimpleValidator\\Validators\\InArray' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/InArray.php',
        'SimpleValidator\\Validators\\Integer' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/Integer.php',
        'SimpleValidator\\Validators\\Ip' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/Ip.php',
        'SimpleValidator\\Validators\\Length' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/Length.php',
        'SimpleValidator\\Validators\\MaxLength' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/MaxLength.php',
        'SimpleValidator\\Validators\\MinLength' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/MinLength.php',
        'SimpleValidator\\Validators\\NotEquals' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/NotEquals.php',
        'SimpleValidator\\Validators\\NotInArray' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/NotInArray.php',
        'SimpleValidator\\Validators\\Numeric' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/Numeric.php',
        'SimpleValidator\\Validators\\Range' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/Range.php',
        'SimpleValidator\\Validators\\Required' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/Required.php',
        'SimpleValidator\\Validators\\Unique' => __DIR__ . '/..' . '/fguillot/simple-validator/src/SimpleValidator/Validators/Unique.php',
        'ZendXml\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/zendframework/zendxml/library/ZendXml/Exception/ExceptionInterface.php',
        'ZendXml\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/zendframework/zendxml/library/ZendXml/Exception/InvalidArgumentException.php',
        'ZendXml\\Exception\\RuntimeException' => __DIR__ . '/..' . '/zendframework/zendxml/library/ZendXml/Exception/RuntimeException.php',
        'ZendXml\\Security' => __DIR__ . '/..' . '/zendframework/zendxml/library/ZendXml/Security.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd7e8d436e1dc450edc3153ac8bc31b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd7e8d436e1dc450edc3153ac8bc31b4::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfd7e8d436e1dc450edc3153ac8bc31b4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfd7e8d436e1dc450edc3153ac8bc31b4::$classMap;

        }, null, ClassLoader::class);
    }
}
