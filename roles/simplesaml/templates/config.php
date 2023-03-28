<?php

/**
 * The configuration of SimpleSAMLphp
 */

$config = [

    /*******************************
     | BASIC CONFIGURATION OPTIONS |
     *******************************/

    'baseurlpath' => 'simplesaml/',
    'loggingdir' => '/var/log/simplesaml',
    'certdir' => '/etc/xdmod/simplesamlphp/cert/',
    'technicalcontact_name' => 'Administrator',
    'timezone' => null,

    /**********************************
     | SECURITY CONFIGURATION OPTIONS |
     **********************************/

    'auth.adminpassword' => 'abc123',
    'admin.protectindexpage' => false,
    'admin.protectmetadata' => false,
    'admin.checkforupdates' => true,

    'trusted.url.domains' => [{{ trusted_url_domains }}],
    'trusted.url.regex' => false,
    'enable.http_post' => true,
    'assertion.allowed_clock_skew' => 180,

    /************************
     | ERRORS AND DEBUGGING |
     ************************/

    'debug' => [
        'saml' => true,
        'backtraces' => true,
        'validatexml' => true,
    ],
    'showerrors' => true,
    'errorreporting' => true,

    /**************************
     | LOGGING AND STATISTICS |
     **************************/

    'logging.level' => SimpleSAML\Logger::DEBUG,
    'logging.handler' => 'file',
    'logging.facility' => defined('LOG_LOCAL5') ? constant('LOG_LOCAL5') : LOG_USER,
    'logging.processname' => 'simplesamlphp',
    'logging.logfile' => 'simplesamlphp.log',
    'proxy' => null,

    /**************************
     | DATABASE CONFIGURATION |
     **************************/

    'database.dsn' => 'mysql:host=localhost;dbname=saml',

    'database.username' => 'simplesamlphp',
    'database.password' => 'secret',
    'database.options' => [],
    'database.prefix' => '',
    'database.driver_options' => [],
    'database.persistent' => false,

    'database.slaves' => [
        /*
        [
            'dsn' => 'mysql:host=myslave;dbname=saml',
            'username' => 'simplesamlphp',
            'password' => 'secret',
            'persistent' => false,
        ],
        */
    ],



    /*************
     | PROTOCOLS |
     *************/
    'enable.saml20-idp' => true,
    'enable.shib13-idp' => false,
    'enable.adfs-idp' => false,
    'shib13.signresponse' => true,


    /***********
     | MODULES |
     ***********/
     'module.enable' => [
         'exampleauth' => false,
         'core' => true,
         'saml' => true
     ],

    /*************************
     | SESSION CONFIGURATION |
     *************************/

    'session.duration' => 8 * (60 * 60), // 8 hours.
    'session.datastore.timeout' => (4 * 60 * 60), // 4 hours
    'session.state.timeout' => (60 * 60), // 1 hour
    'session.cookie.name' => 'SimpleSAMLSessionID',
    'session.cookie.lifetime' => 0,
    'session.cookie.path' => '/',
    'session.cookie.domain' => {{ trusted_url_domains }},
    'session.cookie.secure' => true,
    'session.cookie.samesite' => 'None',
    'session.phpsession.cookiename' => 'SimpleSAML',
    'session.phpsession.savepath' => null,
    'session.phpsession.httponly' => true,
    'session.authtoken.cookiename' => 'SimpleSAMLAuthToken',
    'session.rememberme.enable' => false,
    'session.rememberme.checked' => false,
    'session.rememberme.lifetime' => (14 * 86400),

    /**************************
     | MEMCACHE CONFIGURATION |
     **************************/

    'memcache_store.servers' => [
        [
            ['hostname' => 'localhost'],
        ],
    ],
     */
    'memcache_store.prefix' => '',

    /*************************************
     | LANGUAGE AND INTERNATIONALIZATION |
     *************************************/
    'language' => [
        'priorities' => [
            'no' => ['nb', 'nn', 'en', 'se'],
            'nb' => ['no', 'nn', 'en', 'se'],
            'nn' => ['no', 'nb', 'en', 'se'],
            'se' => ['nb', 'no', 'nn', 'en'],
            'nr' => ['zu', 'en'],
            'nd' => ['zu', 'en'],
            'tw' => ['st', 'en'],
            'nso' => ['st', 'en'],
        ],
    ],
    'language.available' => [
        'en', 'no', 'nn', 'se', 'da', 'de', 'sv', 'fi', 'es', 'ca', 'fr', 'it', 'nl', 'lb',
        'cs', 'sl', 'lt', 'hr', 'hu', 'pl', 'pt', 'pt-br', 'tr', 'ja', 'zh', 'zh-tw', 'ru',
        'et', 'he', 'id', 'sr', 'lv', 'ro', 'eu', 'el', 'af',
    ],
    'language.rtl' => ['ar', 'dv', 'fa', 'ur', 'he'],
    'language.default' => 'en',

    'language.parameter.name' => 'language',
    'language.parameter.setcookie' => true,

    'language.cookie.name' => 'language',
    'language.cookie.domain' => {{ trusted_url_domains }},
    'language.cookie.path' => '/',
    'language.cookie.secure' => true,
    'language.cookie.httponly' => false,
    'language.cookie.lifetime' => (60 * 60 * 24 * 900),
    //'language.cookie.samesite' => \SimpleSAML\Utils\HTTP::canSetSameSiteNone() ? 'None' : null,
    'language.cookie.samesite' => 'None',
    'attributes.extradictionary' => null,

    /**************
     | APPEARANCE |
     **************/
    'theme.use' => 'default',
    'template.auto_reload' => false,
    'production' => true,
    'assets' => [
        /*
         * These settings adjust the caching headers that are sent
         * when serving static resources.
         */
        'caching' => [
            /*
             * Amount of seconds before the resource should be fetched again
             */
            'max_age' => 86400,
            /*
             * Calculate a checksum of every file and send it to the browser
             * This allows the browser to avoid downloading assets again in situations
             * where the Last-Modified header cannot be trusted,
             * for example in cluster setups
             *
             * Defaults false
             */
            'etag' => false,
        ],
    ],
    /*********************
     | DISCOVERY SERVICE |
     *********************/

    /*
     * Whether the discovery service should allow the user to save his choice of IdP.
     */
    'idpdisco.enableremember' => true,
    'idpdisco.rememberchecked' => true,

    /*
     * The disco service only accepts entities it knows.
     */
    'idpdisco.validate' => true,

    'idpdisco.extDiscoveryStorage' => null,

    /*
     * IdP Discovery service look configuration.
     * Wether to display a list of idp or to display a dropdown box. For many IdP' a dropdown box
     * gives the best use experience.
     *
     * When using dropdown box a cookie is used to highlight the previously chosen IdP in the dropdown.
     * This makes it easier for the user to choose the IdP
     *
     * Options: [links,dropdown]
     */
    'idpdisco.layout' => 'dropdown',

    /*************************************
     | AUTHENTICATION PROCESSING FILTERS |
     *************************************/

    /*
     * Authentication processing filters that will be executed for all IdPs
     * Both Shibboleth and SAML 2.0
     */
    'authproc.idp' => [
        /* Enable the authproc filter below to add URN prefixes to all attributes
        10 => array[
            'class' => 'core:AttributeMap', 'addurnprefix'
        ],
        */
        /* Enable the authproc filter below to automatically generated eduPersonTargetedID.
        20 => 'core:TargetedID',
        */

        // Adopts language from attribute to use in UI
        30 => 'core:LanguageAdaptor',

        45 => [
            'class'         => 'core:StatisticsWithAttribute',
            'attributename' => 'realm',
            'type'          => 'saml20-idp-SSO',
        ],

        /* When called without parameters, it will fallback to filter attributes 'the old way'
         * by checking the 'attributes' parameter in metadata on IdP hosted and SP remote.
         */
        50 => 'core:AttributeLimit',
        /*
         * Search attribute "distinguishedName" for pattern and replaces if found
         */
        /*
        60 => [
            'class' => 'core:AttributeAlter',
            'pattern' => '/OU=studerende/',
            'replacement' => 'Student',
            'subject' => 'distinguishedName',
            '%replace',
        ],
        */

        /*
         * Consent module is enabled (with no permanent storage, using cookies).
         */
        /*
        90 => [
            'class' => 'consent:Consent',
            'store' => 'consent:Cookie',
            'focus' => 'yes',
            'checked' => true
        ],
        */
        // If language is set in Consent module it will be added as an attribute.
        99 => 'core:LanguageAdaptor',
    ],

    /*
     * Authentication processing filters that will be executed for all SPs
     * Both Shibboleth and SAML 2.0
     */
    'authproc.sp' => [
        /*
        10 => [
            'class' => 'core:AttributeMap', 'removeurnprefix'
        ],
        */

        /*
         * Generate the 'group' attribute populated from other variables, including eduPersonAffiliation.
        60 => [
            'class' => 'core:GenerateGroups', 'eduPersonAffiliation'
        ],
        */
        /*
         * All users will be members of 'users' and 'members'
         */
        /*
        61 => [
            'class' => 'core:AttributeAdd', 'groups' => ['users', 'members']
        ],
        */

        // Adopts language from attribute to use in UI
        90 => 'core:LanguageAdaptor',
    ],


    /**************************
     | METADATA CONFIGURATION |
     **************************/
      'metadata.sources' => array(
        array(
          'type' => 'flatfile',
          'directory' => '/etc/xdmod/simplesamlphp/metadata/'
        ),
      ),
    /****************************
     | DATA STORE CONFIGURATION |
     ****************************/

    /*
     * Configure the data store for SimpleSAMLphp.
     *
     * - 'phpsession': Limited datastore, which uses the PHP session.
     * - 'memcache': Key-value datastore, based on memcache.
     * - 'sql': SQL datastore, using PDO.
     * - 'redis': Key-value datastore, based on redis.
     *
     * The default datastore is 'phpsession'.
     */
    'store.type'                    => 'phpsession',

    /*
     * The DSN the sql datastore should connect to.
     *
     * See http://www.php.net/manual/en/pdo.drivers.php for the various
     * syntaxes.
     */
    'store.sql.dsn'                 => 'sqlite:/path/to/sqlitedatabase.sq3',

    /*
     * The username and password to use when connecting to the database.
     */
    'store.sql.username' => null,
    'store.sql.password' => null,

    /*
     * The prefix we should use on our tables.
     */
    'store.sql.prefix' => 'SimpleSAMLphp',

    /*
     * The hostname and port of the Redis datastore instance.
     */
    'store.redis.host' => 'localhost',
    'store.redis.port' => 6379,

    /*
     * The prefix we should use on our Redis datastore.
     */
    'store.redis.prefix' => 'SimpleSAMLphp',
];

