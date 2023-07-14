<?php
$metadata['urn:mace:incommon:uab.edu'] = array (
  'entityid' => 'urn:mace:incommon:uab.edu',
  'description' => 
  array (
    'en' => 'University of Alabama at Birmingham',
  ),
  'OrganizationName' => 
  array (
    'en' => 'University of Alabama at Birmingham',
  ),
  'name' => 
  array (
    'en' => 'University of Alabama at Birmingham',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'University of Alabama at Birmingham',
  ),
  'url' => 
  array (
    'en' => 'http://www.uab.edu/',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'http://www.uab.edu/',
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'Landy Manderson',
      'emailAddress' => 
      array (
        0 => 'mailto:landy@uab.edu',
      ),
    ),
    1 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'UABIT User Services',
      'emailAddress' => 
      array (
        0 => 'mailto:UserServices@uab.edu',
      ),
    ),
    2 => 
    array (
      'contactType' => 'other',
      'givenName' => 'UAB Enterprise Information Security',
      'emailAddress' => 
      array (
        0 => 'mailto:infosecurity@uab.edu',
      ),
    ),
    3 => 
    array (
      'contactType' => 'administrative',
      'givenName' => 'Rachel Moorehead',
      'emailAddress' => 
      array (
        0 => 'mailto:rmoorehead@uab.edu',
      ),
    ),
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' => 'https://shib.dpo.uab.edu/idp/profile/Shibboleth/SSO',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://shib.dpo.uab.edu/idp/profile/SAML2/POST/SSO',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' => 'https://shib.dpo.uab.edu/idp/profile/SAML2/POST-SimpleSign/SSO',
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://shib.dpo.uab.edu/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'ArtifactResolutionService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' => 'https://shib.dpo.uab.edu:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' => 1,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://shib.dpo.uab.edu:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' => 2,
    ),
  ),
  'NameIDFormats' => 
  array (
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => '
MIIDFzCCAf+gAwIBAgIULiXLaJ+Pp3B9mZOt+wM+Or3VL7gwDQYJKoZIhvcNAQEL
BQAwGzEZMBcGA1UEAwwQc2hpYi5kcG8udWFiLmVkdTAeFw0yMzA0MjIwMDE2MjRa
Fw0zMzA0MTkwMDE2MjRaMBsxGTAXBgNVBAMMEHNoaWIuZHBvLnVhYi5lZHUwggEi
MA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDE/qIFLjzeIAL6uUyZjrco3mfO
9W81U5tlu9YkMX17WyIOTS0ZdNA9fTMqD9bwHnmWtfSLnxgnEx9BzD4PrnWrcu1J
5oInlM8X8b+RUO7yEG+cwD8DwWkb6oIhFVgJdfzz9ERvA3b62XbDw5wMvgLtymRh
wCSFqbNM/CgdakHxQTcnb4syK7BfhlRkTR33wIDhr3nkvm0r4rydjmzLxL+dxuYb
fNFueTq6576wICkT9BhRYYr3os56JpZwHyGc+dhV1a19e0/IuaiRSucaWE+IcqrX
lfO94gGCwfzpB8KWRbu5MyTgYuh3BPSthl7etavM8qcIt8woD1voRcUq7qYxAgMB
AAGjUzBRMB0GA1UdDgQWBBR0RaiImwbuUp++N1cAQRNb12giFDAfBgNVHSMEGDAW
gBR0RaiImwbuUp++N1cAQRNb12giFDAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3
DQEBCwUAA4IBAQA40KXzMEhqD7Yhqbtq6eSRPfaDr/Up5soTfW6w4oeAsHOSgePx
r6tIqy7z/19OjUv2Yp+We/fp8DhHH216vq0bLcpTWYh9rS4ZZ3rAEOS6Q8wYn1Qs
NWmaxxPZCbW4Yll3oWWetMt1JOjWLPt+hk5vr3GrTYVkz6ml5kbSlYkV66Oma2Y5
yGS+Os0dbjWT6HJ5nVpHzXRwzkHiwTfFoHdHvQcE40il2FEX1aeO3/pAIup5YoSo
US1HhCpMHaHrYkD9Rn1QSSXY0arSfLeN4NwrBU1RQgisyijXV6DzoEDmzxfpJwvO
pKhwkay63TU4BMXwKSj36TGmvgbbzhhfILqN
          ',
    ),
  ),
  'scope' => 
  array (
    0 => 'uab.edu',
  ),
);
