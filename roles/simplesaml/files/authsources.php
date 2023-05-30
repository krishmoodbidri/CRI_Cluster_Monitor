<?php
$config = array(
  /*
   * If you want to support both local auth and Single Sign On auth look into
   * https://simplesamlphp.org/docs/stable/multiauth:multiauth
   * https://simplesamlphp.org/docs/stable/sqlauth:sql
   * An updated example will be provided when this is implemented.
   */
    'admin' => [
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ],
  'default-sp' => array(
    'saml:SP',
    'privatekey' => '/etc/xdmod/simplesamlphp/cert/saml.pem',
    'certificate' => '/etc/xdmod/simplesamlphp/cert/saml.crt',
    'idp' => 'https://samltest.id/saml/idp',
    'signature.algorithm' => 'http://www.w3.org/2001/04/xmldsig-more#rsa-sha256',
    'authproc' => array(
        40 => array(
          'class' => 'core:AttributeMap',
          'urn:oid:0.9.2342.19200300.100.1.1' => 'username',
          'urn:oid:0.9.2342.19200300.100.1.3' => 'email_address',
          'urn:oid:2.5.4.42' => 'first_name',
          'urn:oid:2.5.4.4' => 'last_name',
        ),

/*      50 => array(
        'class' => 'core:AttributeAdd',
        'organization' => 'Test'
      ),
*/
      // Ensures that the 'username' property has one or more non-whitespace characters
/*      60 => array(
        'class' => 'authorize:Authorize',
        'username' => array(
           '/\S+/'
        )
      ),
      // Ensures that the 'organization' property has one or more non-whitespace characters
      61 => array(
        'class' => 'authorize:Authorize',
        'organization' => array(
           '/\S+/'
        )
      )*/
    )
  ),
);
